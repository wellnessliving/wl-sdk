<?php

namespace WellnessLiving\Core\Db\Update\Task\OnceMethod;

/**
 * Contains set of the execution time for one-time methods.
 *
 * See documentation in <tt>namespace.Core/Db/Update/Task/OnceMethod/doc/execution-time-doc.md</tt>.
 */
class OnceMethodExecutionSid
{
  /**
   * A one-time method is executed during the main update. Blocking of the servers is required.
   */
  const BLOCKED = 2;

  /**
   * A one-time method is executed during the main update. Blocking of the servers is not required (the method is executed in both cases).
   */
  const NORMAL = 3;

  /**
   * A one-time method is executed after the main update in the background task.
   */
  const POSTERIOR = 4;

  /**
   * A one-time method is executed during the preliminary update of the database.
   */
  const PRELIMINARY = 1;
}

?>