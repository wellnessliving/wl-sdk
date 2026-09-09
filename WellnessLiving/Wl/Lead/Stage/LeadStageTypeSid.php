<?php

namespace WellnessLiving\Wl\Lead\Stage;

use WellnessLiving\Wl\Lead\Conversion\LeadConversionTypeSid;

/**
 * Types of lead stages.
 *
 * Every stage has a type. The type is selected when the stage is created and can not be changed afterwards,
 * neither for system stages ({@link LeadStageSystemSid}) nor for stages created by a business.
 *
 * A business must always have at least one stage of every type, so the last stage of a type can not be deleted.
 *
 * Last used ID: 3.
 */
class LeadStageTypeSid
{
  /**
   * A lead is lost - the client will not make a purchase.
   *
   * Replaces {@link LeadConversionTypeSid::LOST}.
   *
   * @title Lost
   */
  const LOST = 3;

  /**
   * A lead is still in the funnel - the business is working with the client.
   *
   * @title Open
   */
  const OPEN = 1;

  /**
   * A lead is won - the client is converted into a member.
   *
   * Replaces {@link LeadConversionTypeSid::WON}.
   *
   * @title Won
   */
  const WON = 2;
}

?>