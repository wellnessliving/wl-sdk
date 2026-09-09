<?php

namespace WellnessLiving\Wl\Import\Custom\LoginCoupon;

/**
 * List of columns required to import client gift cards.
 *
 * Last used ID: 16.
 */
class CustomLoginCouponSid
{
  /**
   * Remaining amount on a balance, which can be used.
   */
  const BALANCE = 7;

  /**
   * Related to the gift card pricing option.
   */
  const COMPONENT = 9;

  /**
   * Amount on the date of purchase.
   *
   *  If it's positive - this is the amount added to the gift card.
   *  If it's negative - this is the amount redeemed from the gift card.
   *  If balance is not set, then the first positive amount sets the initial balance.
   */
  const COST = 6;

  /**
   * Unique ID of the coupon.
   */
  const COUPON_ID = 3;

  /**
   * Date, when gift card will expire.
   */
  const DATE_EXPIRE = 5;

  /**
   * Date, when it was sold.
   */
  const DATE_SOLD = 4;

  /**
   * Client's full name, who bought this gift card.
   */
  const FULL_NAME_BOUGHT = 1;

  /**
   * Client's full name, who got this gift card.
   * If it's empty, client who bought this gift card got it.
   */
  const FULL_NAME_GOT = 2;

  /**
   * Name of the location, where gift card was redeemed.
   */
  const LOCATION_REDEEM = 13;

  /**
   * Name of the location, where gift card was sold.
   */
  const LOCATION_SALE = 12;

  /**
   * Member ID of the client, who got the gift card.
   */
  const MEMBER_ID_GOT = 16;

  /**
   * Member ID of the client, who bought the gift card.
   */
  const MEMBER_ID_PURCHASER = 15;

  /**
   * Purchase ID, related to the gift card.
   */
  const PURCHASE_ID = 14;

  /**
   * Current status of the gift card: active, redeemed, partially redeemed, or voided.
   */
  const STATUS = 8;

  /**
   * UID key of the client, who bought the gift card.
   */
  const UID_PURCHASE = 10;

  /**
   * UID key of the client, who got the gift card.
   */
  const UID_TO = 11;
}

?>