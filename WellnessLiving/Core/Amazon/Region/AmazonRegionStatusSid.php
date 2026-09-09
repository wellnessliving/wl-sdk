<?php

namespace WellnessLiving\Core\Amazon\Region;

/**
 * A list of statuses of Amazon datacenter.
 */
class AmazonRegionStatusSid
{
  /**
   * The datacenter is active.
   *
   * The datacenter may be transitioned to {@link AmazonRegionStatusSid::LOCK} when a datacenter is locked.
   * The transition is executed by `\Build\Core\DatacenterLockAsync`.
   */
  const ACTIVE = 1;

  /**
   * This datacenter is manually disabled.
   *
   * This status can only be set manually.
   * Also, datacenter can transition from this status only manually.
   *
   * If the datacenter is disabled, it behaves using the following rules:
   * * from the point of view of disabled datacenter, it is active whereas all other datacenters of the world are locked;
   * * from the point of view of all other datacenters, this datacenter is locked;
   * * when deployment completes, it does not change status of the disabled datacenter.
   *   Disabled datacenter must be enabled manually.
   */
  const DISABLE = 3;

  /**
   * The datacenter is locked.
   *
   * The following happens when the datacenter is locked:
   *
   * *
   *   Errors are not logged.
   * * Table synchronization: if there is at least one locked datacenter in the world, then synchronization Cron methods
   *   may not start. This leads to that synchronization queue starts growing indefinitely.
   *   Remember not to keep datacenters disabled for too long because this effectively disables synchronization between
   *   all other datacenters.
   * * Background and asynchronous processes: if processes has started when there was one status of all datacenters in
   *   the world, and now the status has changed, then the process must exit.
   * * Adding tasks to the queue of a different datacenter with {@link CoreTaskAbstract::addRegion()}:
   *   if a datacenter is locked, then this task will be inserted locally with a delay of 1 minute.
   * * Starting of background tasks when its {@link CoreTaskAbstract::regionId()} returns a different datacenter:
   *   This task is re-scheduled after 1 minute instead of moving to a different datacenter.
   *
   * The datacenter may be transitioned to {@link AmazonRegionStatusSid::ACTIVE} when a datacenter is unlocked.
   * The transition is executed by `\Build\Core\DatacenterLockAsync`.
   */
  const LOCK = 2;
}

?>