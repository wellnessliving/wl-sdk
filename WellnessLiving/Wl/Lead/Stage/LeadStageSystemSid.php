<?php

namespace WellnessLiving\Wl\Lead\Stage;

/**
 * System-defined lead stages.
 *
 * Every business has one stage of each of them by default. 
 *
 * Type of every system stage is defined by the system and can not be changed,
 *
 * Custom stages created by a business have no system ID.
 *
 * Last used ID: 6.
 */
class LeadStageSystemSid
{
  /**
   * A lead which was contacted by a staff member.
   *
   * @title Contacted
   */
  const CONTACTED = 6;

  /**
   * A lead which is being actively worked with and is close to a purchase.
   *
   * @title Hot
   */
  const HOT = 2;

  /**
   * A lead which was lost.
   *
   * @title Lost
   */
  const LOST = 5;

  /**
   * A newly captured lead. This stage is set to a client when they are added as a lead.
   *
   * @title New Inquiries
   */
  const NEW = 1;

  /**
   * A lead which has shown some interest, but is not ready to purchase yet.
   *
   * @title Warm
   */
  const WARM = 3;

  /**
   * A lead which was successfully converted into a client.
   *
   * @title Won
   */
  const WON = 4;
}

?>