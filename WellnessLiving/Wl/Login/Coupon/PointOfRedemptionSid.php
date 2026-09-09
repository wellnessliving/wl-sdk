<?php

namespace WellnessLiving\Wl\Login\Coupon;

/**
 * List of point of redemptions.
 *
 * Last ID: 3.
 */
class PointOfRedemptionSid
{
  /**
   * If gift card got redeemed at the client's profile.
   */
  const CLIENT_PROFILE = 1;

  /**
   * If gift card got redeemed at the online store in the staff’s backend, Client Web App, Achieve App, or Elevate App.
   */
  const ONLINE_STORE = 2;
}

?>