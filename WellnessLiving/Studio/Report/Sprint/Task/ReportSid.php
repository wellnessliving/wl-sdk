<?php

namespace WellnessLiving\Studio\Report\Sprint\Task;

/**
 * List of report modes for report "Task by sprint".
 */
class ReportSid
{
  /**
   * Normal report view with full information about tasks.
   */
  const NORMAL = 1;

  /**
   * Report grouped by teams and with a totals:
   * * Development time for personnel.
   * * Development time for personnel in the team.
   */
  const TEAM_DEV_TIME = 2;

  /**
   * Report grouped by teams and with a totals:
   * * Story point for personnel.
   * * Story point for personnel in the team.
   */
  const TEAM_SP = 3;
}

?>