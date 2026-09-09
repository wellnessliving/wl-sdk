<?php

namespace WellnessLiving\Wl\Lead\Stage;

/**
 * A list of ways a lead stage can be assigned to a client.
 *
 * Last used ID: 4.
 */
class LeadStageSourceSid
{
  /**
   * Stage is assigned automatically by an automation.
   *
   * @title Automation
   */
  const AUTOMATION = 1;

  /**
   * Stage is assigned manually through the report.
   *
   * @title Manually
   */
  const MANUAL = 2;

  /**
   * Stage is assigned automatically by member group settings.
   *
   * @title Client group
   */
  const MEMBER_GROUP = 3;

  /**
   * Client is placed into the default stage of the business because no stage was chosen for them: either the
   * client has just been added to the business, see {@link LeadStageMemberListen}, or the client had no stage
   *
   * Such an assignment does not mean that the stage of the client is really known. This is why the migration
   * of the old lead statuses is allowed to replace it, see
   *
   * @title System default
   */
  const SYSTEM_DEFAULT = 4;
}

?>