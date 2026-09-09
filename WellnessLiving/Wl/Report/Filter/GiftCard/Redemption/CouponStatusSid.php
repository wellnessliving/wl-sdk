<?php

namespace WellnessLiving\Wl\Report\Filter\GiftCard\Redemption;

/**
 * Redemption status of the gift card.
 */
class CouponStatusSid
{
  /**
   * Redemption date is null and is not active.
   */
  const DEACTIVATED = 3;

  /**
   * Redemption date is null and end date is before today.
   */
  const EXPIRED = 4;

  /**
   * Redemption date is null and end date is today or after.
   */
  const NOT_REDEEMED = 5;

  /**
   * Redemption date is not null.
   */
  const REDEEMED = 1;
}

?>