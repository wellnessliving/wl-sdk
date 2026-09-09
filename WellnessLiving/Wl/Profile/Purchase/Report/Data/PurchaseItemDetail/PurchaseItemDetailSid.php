<?php

namespace WellnessLiving\Wl\Profile\Purchase\Report\Data\PurchaseItemDetail;

/**
 * Represent detail item list.
 *
 * Last used ID: 15.
 */
class PurchaseItemDetailSid
{
  /**
   * 'Auto-renewed' detail.
   */
  const AUTO_RENEW = 1;

  /**
   * 'Canceled' detail.
   */
  const CANCEL = 2;

  /**
   * 'Converted' detail.
   */
  const CONVERT = 3;

  /**
   * 'Edited' detail.
   */
  const EDIT = 4;

  /**
   * 'Expired' detail.
   */
  const EXPIRE = 5;

  /**
   * 'Invited by' detail. Shows the host user who sent the guest pass invitation.
   */
  const INVITE = 14;

  /**
   * 'On hold' detail.
   */
  const ONHOLD = 8;

  /**
   * Element was purchase for this user by some other user.
   */
  const PURCHASE_BY = 9;

  /**
   * Element was purchase by this user for some other user.
   */
  const PURCHASE_FOR = 10;

  /**
   * 'Purchase type' detail (deposit/fully paid).
   */
  const PURCHASE_TYPE = 13;

  /**
   * 'Set to Convert' detail.
   */
  const SET_CONVERT = 11;

  /**
   * 'Shared' detail.
   */
  const SHARE = 6;

  /**
   * 'Transferred' detail.
   */
  const TRANSFER = 7;

  /**
   * Membership was granted as a part of a tuition purchase.
   */
  const TUITION = 15;

  /**
   * 'Upcoming Hold' detail.
   */
  const UPCOMING_HOLD = 12;
}

?>