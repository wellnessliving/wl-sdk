<?php

namespace WellnessLiving\Core\Search\Postgres;

/**
 * List of statuses of PostgreSQL instances used for search provider.
 *
 * See <tt>namespace.Core/Search/Postgres/doc/postgres-instance-statuses.md</tt> for more visual presentation.
 *
 * Constant descriptions each have a list of actions allowed on the instance in that status. The list is doubled in
 * two perspectives:<dl>
 *    <dt>From client perspective</dt>
 *    <dd>
 *      Represents what actions the client can do when it sees an instance in this status. Status may be read from
 *      cache so it may be outdated, and instance status may change while client is already holding the connection open.
 *      This does not affect the client - it still performs any action that was allowed at the time connection was opened.
 *    </dd>
 *    <dt>From server perspective</dt>
 *    <dd>
 *      Represents what actions the server in this status may expect. Instance status may be cached, and clients holding
 *      already open connection may not be aware that instance status was changed during this time, so there's a bit of
 *      "lag" in what actions are no longer allowed on this server. Connections performing actions that are no longer
 *      intended on this instance will be slowly reducing in number over time as caches expire and already open
 *      connections are being closed.
 *    </dd>
 *  </dl>
 *
 * Then, from each perspective there's a list of all possible actions on the instance, and a yes/no answer to whether
 * they're allowed/expected on this instance. Possible actions: <dl>
 *    <dt>Store new documents</dt>
 *    <dd>Writing of a new or updated document when it's first indexed or re-indexed.</dd>
 *    <dt>Delete documents</dt>
 *    <dd>
 *      Deletion of documents when they're no longer needed after re-indexing. Meaning it won't be stored on another
 *      instance, so it's different from moving of documents between isntances during rebalancing process.
 *    </dd>
 *    <dt>Move documents</dt>
 *    <dd>
 *      Moving of documents from one instance to another that's in a status that accepts new documents. The document
 *      is written to new instance, and deleted from this one.
 *    </dd>
 *    <dt>Search query</dt><dd>Regular queries for searching of documents.</dd>
 *  </dl>
 *
 * Last used ID: 8
 */
class PostgresInstanceStatusSid
{
  /**
   * New instance is waiting to be activated. Server is created, database and search table are ready.
   *
   * Allowed actions: <dl>
   *  <dt>From client perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>No</dd>
   *    <dt>Delete documents</dt><dd>No</dd>
   *    <dt>Move documents</dt><dd>No</dd>
   *    <dt>Search query</dt><dd>No</dd>
   *  </dl></dd>
   *
   *  <dt>From server perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>No</dd>
   *    <dt>Delete documents</dt><dd>No</dd>
   *    <dt>Move documents</dt><dd>No</dd>
   *    <dt>Search query</dt><dd>No</dd>
   *  </dl></dd>
   * </dl>
   *
   * Transitions to {@link PostgresInstanceStatusSid::ACTIVE} via
   *
   * Transition is allowed when all other instances in the same search cluster (identified by provider name and search
   * table CID) are in one of he following statuses: <ul>
   *  <li>{@link PostgresInstanceStatusSid::ACTIVE}</li>
   *  <li>{@link PostgresInstanceStatusSid::ACTIVATING}</li>
   *  <li>{@link PostgresInstanceStatusSid::DRY}</li>.
   * <ul>.
   * All instances in {@link PostgresInstanceStatusSid::ACTIVE} status at the time in same search cluster are switched to
   * {@link PostgresInstanceStatusSid::ACTIVE_BALANCING} to let load balancer move documents from them to this instance(s).
   *
   * This transition is delayed if there are instances in {@link PostgresInstanceStatusSid::CREATING} or
   * {@link PostgresInstanceStatusSid::STARTING} statuses until they all become
   * {@link PostgresInstanceStatusSid::ACTIVATING}, allowing to introduce all of them to the cluster at once. Otherwise
   * their introduction would have to be paused until rebalancing is complete with each activating instance sequentially,
   * resulting in unnecessary work re-checking all documents in the cluster and delaying completion.
   *
   * It is forbidden to make this transition while there are {@link PostgresInstanceStatusSid::ACTIVE_BALANCING} or
   * {@link PostgresInstanceStatusSid::DRYING} instances in the cluster due to possible creation of duplicate or outdated
   * documents.
   * See <tt>Core/Search/Postgres/doc/considerations-for-changing-search-cluster.md</tt>, chapter "Changes while
   *  rebalancing" for details.
   *
   * It is also forbidden to make this transition while there are instances in
   * {@link PostgresInstanceStatusSid::REINDEX} status, because after reindexing they're returned to
   * {@link PostgresInstanceStatusSid::ACTIVE} status, skipping the rebalancing stage.
   *
   * Presence of {@link PostgresInstanceStatusSid::DRY} instances doesn't affect index integrity in any way, so they
   * don't block this transition.
   *
   * Transitions from {@link PostgresInstanceStatusSid::STARTING} via
   * {@link ProviderPostgresInstanceCron::cronStartingActivating()} when server has been created and database
   * initialized.
   */
  const ACTIVATING = 8;

  /**
   * Status in which instances should be most of the time.
   *
   * Allowed actions: <dl>
   *  <dt>From client perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>Yes</dd>
   *    <dt>Delete documents</dt><dd>Yes</dd>
   *    <dt>Move documents</dt><dd>No</dd>
   *    <dt>Search query</dt><dd>Yes</dd>
   *  </dl></dd>
   *
   *  <dt>From server perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>Yes</dd>
   *    <dt>Delete documents</dt><dd>Yes</dd>
   *    <dt>Move documents</dt><dd>No</dd>
   *    <dt>Search query</dt><dd>Yes</dd>
   *  </dl></dd>
   * </dl>
   *
   * Transitions to {@link PostgresInstanceStatusSid::ACTIVE_BALANCING} via
   * {@link ProviderPostgresInstanceCron::cronActivatingActive()} when load balancer may be moving documents to
   * other instances, e.g. when a new instance is added - all other active instances for the same search table are
   * switched to active balancing.
   *
   * Transitions to {@link PostgresInstanceStatusSid::DRYING} via
   *
   * It is not allowed to make this transition while there are {@link PostgresInstanceStatusSid::ACTIVE_BALANCING} or
   * {@link PostgresInstanceStatusSid::DRYING} instances in the cluster. See
   * <tt>Core/Search/Postgres/doc/considerations-for-changing-search-cluster.md</tt>, chapter "Changes while rebalancing"
   *  for details.
   *
   * Transitions to {@link PostgresInstanceStatusSid::REINDEX} via {@link PostgresCron::cronActiveReindex()} when index
   * needs to be rebuilt.
   * The transition is performed with through the critical section, the name of which is formed
   *
   * Transitions from {@link PostgresInstanceStatusSid::ACTIVE_BALANCING} via
   * {@link ProviderPostgresBalanceCron::cronBalance()} when balancing on the instance is complete - all documents that
   * were meant to be moved, have been moved.
   *
   * Transitions from {@link PostgresInstanceStatusSid::REINDEX} via {@link PostgresCron::cronReindexActive()} when
   * index rebuilding is complete.
   * The transition is performed with through the critical section, the name of which is formed
   *
   * Transitions from {@link PostgresInstanceStatusSid::ACTIVATING} via
   * {@link ProviderPostgresInstanceCron::cronActivatingActive()} when instance setup is complete - PostgreSQL is
   * installed and search database is created.
   */
  const ACTIVE = 1;

  /**
   * Instance in active re-balancing.
   *
   * Allowed actions: <dl>
   *  <dt>From client perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>Yes</dd>
   *    <dt>Delete documents</dt><dd>Yes</dd>
   *    <dt>Move documents</dt><dd>Yes</dd>
   *    <dt>Search query</dt><dd>Yes</dd>
   *  </dl></dd>
   *
   *  <dt>From server perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>Yes</dd>
   *    <dt>Delete documents</dt><dd>Yes</dd>
   *    <dt>Move documents</dt><dd>Yes</dd>
   *    <dt>Search query</dt><dd>Yes</dd>
   *  </dl></dd>
   * </dl>
   *
   * Transitions to {@link PostgresInstanceStatusSid::ACTIVE} via {@link ProviderPostgresBalanceCron::cronBalance()}
   * when re-balancing is complete.
   *
   * Transitions from {@link PostgresInstanceStatusSid::ACTIVE} via
   * {@link ProviderPostgresInstanceCron::cronActivatingActive()} when a new instance is added to the cluster and some
   * of the documents from this instance may need to be moved to another. This transition must increment
   *
   * May not be transitioned to {@link PostgresInstanceStatusSid::DRYING} because it may lead to duplicate documents.
   *  See <tt>namespace.Core/Search/Postgres/doc/considerations-for-changing-search-cluster.md</tt>, chapter "Changes
   *  while rebalancing" for details.
   */
  const ACTIVE_BALANCING = 2;

  /**
   * New instance. Server is not yet created.
   *
   * Allowed actions: <dl>
   *  <dt>From client perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>No</dd>
   *    <dt>Delete documents</dt><dd>No</dd>
   *    <dt>Move documents</dt><dd>No</dd>
   *    <dt>Search query</dt><dd>No</dd>
   *  </dl></dd>
   *
   *  <dt>From server perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>No</dd>
   *    <dt>Delete documents</dt><dd>No</dd>
   *    <dt>Move documents</dt><dd>No</dd>
   *    <dt>Search query</dt><dd>No</dd>
   *  </dl></dd>
   * </dl>
   *
   * Transitions to {@link PostgresInstanceStatusSid::STARTING} via
   */
  const CREATING = 3;

  /**
   * Empty instance ready for deletion. Before deletion the following checks are performed:
   * 1. Enough time has passed since transition to this status for cache on client side to update.
   * 2. There are no open connections other than the cron job performing these checks.
   * 3. The table in the instance is indeed empty.
   * When all 3 conditions are true, the instance is deleted.
   *
   * Allowed actions: <dl>
   *  <dt>From client perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>No - no new connections should be sent to this instance.</dd>
   *    <dt>Delete documents</dt><dd>No - no new connections should be sent to this instance.</dd>
   *    <dt>Move documents</dt><dd>No - no new connections should be sent to this instance.</dd>
   *    <dt>Search query</dt><dd>No - no new connections should be sent to this instance.</dd>
   *  </dl></dd>
   *
   *  <dt>From server perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt>
   *    <dd>
   *      Yes - in edge cases by already open connections, or by new connections that received a cached status
   *      of this instance that still allowed storage of new documents. This is an error because before the status
   *      is changed to {@link PostgresInstanceStatusSid::DRY} enough time should've passed for caches to update.
   *    </dd>
   *    <dt>Delete documents</dt><dd>No</dd>
   *    <dt>Move documents</dt><dd>No</dd>
   *    <dt>Search query</dt>
   *    <dd>
   *      Yes - instance status may still be cached as {@link PostgresInstanceStatusSid::DRYING}, therefore new search
   *      query connections may will still be coming, reducing in number over time as caches are expiring.
   *    </dd>
   *  </dl></dd>
   * </dl>
   *
   * Transitions to {@link PostgresInstanceStatusSid::DRYING} via
   *
   * Before deletion it waits for all opened connections (with search queries) to be closed. After that checks the table
   * again that it is indeed empty, that one of the open connections from earlier didn't store a new document here.
   *
   * Transitions from {@link PostgresInstanceStatusSid::DRYING} via {@link ProviderPostgresBalanceCron::cronBalance()}
   * when the instance is empty and enough time has passed for instance status caches to recognize that this instance
   * no longer accepts new documents.
   */
  const DRY = 4;

  /**
   * Instance in being prepared for removal. All stored documents are actively moved to other instances.
   *
   * Allowed actions: <dl>
   *  <dt>From client perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>No</dd>
   *    <dt>Delete documents</dt><dd>Yes</dd>
   *    <dt>Move documents</dt><dd>Yes</dd>
   *    <dt>Search query</dt><dd>Yes</dd>
   *  </dl></dd>
   *
   *  <dt>From server perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt>
   *    <dd>
   *      Yes - by already open connections or new connections for a while after status was changed, reducing in number
   *      over time as already open write connections are being closed and instance status caches expire.
   *    </dd>
   *    <dt>Delete documents</dt><dd>Yes</dd>
   *    <dt>Move documents</dt><dd>Yes</dd>
   *    <dt>Search query</dt><dd>Yes</dd>
   *  </dl></dd>
   * </dl>
   *
   * Transitions to {@link PostgresInstanceStatusSid::DRY} via {@link ProviderPostgresBalanceCron::cronBalance()} when
   * search table is empty and enough time has passed for instance status caches to recognize that this instance no
   * longer accepts new documents.
   *
   * Transitions from {@link PostgresInstanceStatusSid::ACTIVE} (currently only manually) when server is being prepared
   * for removal.
   *
   * Transitions from {@link PostgresInstanceStatusSid::DRY} via {@link ProviderPostgresInstanceCron::cronDryDelete()}
   * in edge cases when new documents have been detected on the instance that was marked empty.
   */
  const DRYING = 5;

  /**
   * The instance is performing index creation.
   *
   * Allowed actions: <dl>
   *  <dt>From client perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>Yes</dd>
   *    <dt>Delete documents</dt><dd>Yes</dd>
   *    <dt>Move documents</dt><dd>No</dd>
   *    <dt>Search query</dt><dd>Yes</dd>
   *  </dl></dd>
   *
   *  <dt>From server perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>Yes</dd>
   *    <dt>Delete documents</dt><dd>Yes</dd>
   *    <dt>Move documents</dt><dd>No</dd>
   *    <dt>Search query</dt><dd>Yes</dd>
   *  </dl></dd>
   * </dl>
   *
   * Transitions to {@link PostgresInstanceStatusSid::ACTIVE} via {@link PostgresCron::cronReindexActive()} when index
   * rebuilding is complete.
   * The transition is performed with through the critical section, the name of which is formed
   *
   * Transitions from {@link PostgresInstanceStatusSid::ACTIVE} via {@link PostgresCron::cronActiveReindex()} when
   * index needs to be rebuilt.
   * The transition is performed with through the critical section, the name of which is formed
   */
  const REINDEX = 7;

  /**
   * New instance starting and initializing. Server is requested to create, but not necessarily ready yet.
   * Database and search table is not yet ready.
   *
   * Allowed actions: <dl>
   *  <dt>From client perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>No</dd>
   *    <dt>Delete documents</dt><dd>No</dd>
   *    <dt>Move documents</dt><dd>No</dd>
   *    <dt>Search query</dt><dd>No</dd>
   *  </dl></dd>
   *
   *  <dt>From server perspective:</dt>
   *  <dd><dl>
   *    <dt>Store new documents</dt><dd>No</dd>
   *    <dt>Delete documents</dt><dd>No</dd>
   *    <dt>Move documents</dt><dd>No</dd>
   *    <dt>Search query</dt><dd>No</dd>
   *  </dl></dd>
   * </dl>
   *
   * Transitions to {@link PostgresInstanceStatusSid::ACTIVATING} via
   *
   * Transitions from {@link PostgresInstanceStatusSid::CREATING} via
   */
  const STARTING = 6;
}

?>