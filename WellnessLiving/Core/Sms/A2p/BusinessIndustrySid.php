<?php

namespace WellnessLiving\Core\Sms\A2p;

/**
 * Business industries for A2P10DLC registration.
 *
 * @note Only one value has been added, because this value currently cannot be chosen, it always defaults to 'RETAIL'.
 * This Sid only exists to make it easier to add more industries in the future.
 *
 * Last used id: 1.
 */
class BusinessIndustrySid
{
  /**
   * Retail.
   *
   * @title Retail
   * @twilio-value RETAIL
   */
  const RETAIL = 1;
}

?>