<?php

namespace WellnessLiving\Core\Sms\A2p;

/**
 * A2P10DLC campaign types.
 * Prices here are added to the monthly price of the `\Wl\Business\Account\Subscription\Sms\SmsSubscription`.
 *
 * Last used id: 3.
 */
class CampaignTypeSid
{
  /**
   * Low volume campaign.
   *
   * @price-month 1.50
   * @price-one-time 19.00
   * @title Low volume campaign
   */
  const LOW_VOLUME = 1;

  /**
   * Standard campaign.
   *
   * @price-month 10.00
   * @price-one-time 59.00
   * @title Standard campaign
   */
  const STANDARD = 2;

  /**
   * Starter campaign.
   *
   * @price-month 2.00
   * @price-one-time 19.00
   * @title Starter campaign
   */
  const STARTER = 3;

  /**
   * Zero volume campaign.
   *
   * @price-month 0.00
   * @price-one-time 0.00
   * @title Waived campaign fee
   */
  const ZERO_VOLUME = 4;
}

?>