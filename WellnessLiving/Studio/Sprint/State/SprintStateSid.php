<?php

namespace WellnessLiving\Studio\Sprint\State;

/**
 * A list of sprint state.
 *
 * Last used ID: 6.
 */
class SprintStateSid
{
  /**
   * Sprint status when all tasks that were done in the trunk should be closed as quickly as possible.
   */
  const CODE_FREEZE = 3;

  /**
   * Sprint completed.
   */
  const COMPLETE = 5;

  /**
   * Sprint is in work right now.
   */
  const CURRENT = 2;

  /**
   * Sprint is planned for the future.
   */
  const FUTURE = 1;

  /**
   * State of sprint when a system health check is in progress before release.
   */
  const REGRESSION = 4;

  /**
   * Regression testing is now completed.
   * The sprint is being released to regions.
   */
  const RELEASING = 6;
}

?>