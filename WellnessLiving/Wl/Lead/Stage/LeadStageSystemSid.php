<?php

namespace WellnessLiving\Wl\Lead\Stage;

use WellnessLiving\Wl\Lead\Conversion\LeadConversionTypeSid;

/**
 * System-defined lead stages.
 *
 * Every business has one stage of each of them by default. 
 *
 * Type of every system stage is defined by the system and can not be changed,
 * see {@link LeadStageSystemSid::typeAll()} and {@link LeadStageTypeSid}.
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
   * Type of the stage is {@link LeadStageTypeSid::OPEN}.
   *
   * @title Contacted
   */
  const CONTACTED = 6;

  /**
   * A lead which is being actively worked with and is close to a purchase.
   *
   * Type of the stage is {@link LeadStageTypeSid::OPEN}.
   *
   * @title Hot
   */
  const HOT = 2;

  /**
   * A lead which was lost.
   *
   * Replaces {@link LeadConversionTypeSid::LOST}.
   * Type of the stage is {@link LeadStageTypeSid::LOST}.
   *
   * @title Lost
   */
  const LOST = 5;

  /**
   * A newly captured lead. This stage is set to a client when they are added as a lead.
   *
   * Type of the stage is {@link LeadStageTypeSid::OPEN}.
   *
   * @title New Inquiries
   */
  const NEW = 1;

  /**
   * A lead which has shown some interest, but is not ready to purchase yet.
   *
   * Type of the stage is {@link LeadStageTypeSid::OPEN}.
   *
   * @title Warm
   */
  const WARM = 3;

  /**
   * A lead which was successfully converted into a client.
   *
   * Replaces {@link LeadConversionTypeSid::WON}.
   * Type of the stage is {@link LeadStageTypeSid::WON}.
   *
   * @title Won
   */
  const WON = 4;
}

?>