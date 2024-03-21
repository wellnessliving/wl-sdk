<?php

namespace WellnessLiving\Wl\Login;

/**
 * Manages identifiers of user activity.
 *
 * Last ID: 38.
 *
 * @copyright 2012 - 2015, WellnessLiving Inc, www.wellnessliving.com.
 */
class WlLoginActivityTypeSid
{
  /** Client books an appointment. */
  const APPOINTMENT_BOOK = 27;

  /** Client cancels an appointment. */
  const APPOINTMENT_CANCEL = 28;

  /** Client attends an appointment. */
  const APPOINTMENT_VISIT = 23;

  /** Client's birthday. */
  const BIRTHDAY = 1;

  /** Client booked a class. */
  const CLASS_BOOK = 2;

  /** Client cancelled a class. */
  const CLASS_CANCEL = 3;

  /** Client attends a class. */
  const CLASS_VISIT = 15;

  /** Staff approved a custom reward for a client. */
  const CUSTOM_REWARD = 31;

  /** Client booked an enrollment. */
  const ENROLLMENT_BOOK = 17;

  /** Client attends an enrollment. */
  const ENROLLMENT_CANCEL = 18;

  /** Client attends an enrollment. */
  const ENROLLMENT_VISIT = 16;

  /** Client connected his Facebook account. */
  const FACEBOOK_CONNECT = 12;

  /** Client disconnected his Facebook account. */
  const FACEBOOK_DISCONNECT = 19;
  
  const FAVORITE_ADD_CLASS = 4;
  const FAVORITE_ADD_LOCATION = 5;
  const FAVORITE_ADD_STAFF = 6;
  const FAVORITE_REMOVE_CLASS = 7;
  const FAVORITE_REMOVE_LOCATION = 8;
  const FAVORITE_REMOVE_STAFF = 9;
  const FRIEND_ADD = 10;

  /** Client made a gym visit. */
  const GYM_VISIT = 32;

  const INVITE_SEND = 14;

  /** The user spend money. */
  const PAY = 22;

  /** Client has bought prize. */
  const PRIZE = 24;

  /**
   * Promotion transferred.
   */
  const PROMOTION_TRANSFER = 34;

  /**
   * Customer bought the product.
   *
   * @deprecated Use {@link RsLoginActivityTypeSid::PAY} instead.
   */
  const PURCHASE_PRODUCT = 30;

  /**
   * Customer bought the promotion.
   *
   * @deprecated Use {@link RsLoginActivityTypeSid::PAY} instead.
   */
  const PURCHASE_PROMOTION = 29;

  /** The user shared purchase item into Facebook */
  const PURCHASE_SHARE_FACEBOOK = 25;

  /** The user shared purchase item into Twitter */
  const PURCHASE_SHARE_TWITTER = 26;

  /**
   * Referral made a purchase.
   */
  const REFER_PURCHASE = 38;

  /**
   * A referrer is set for the user.
   */
  const REFER_REGISTER = 37;

  /** The user has logged in. */
  const REGISTRATION = 21;

  const REVIEW = 11;

  /**
   * All reward points have been reset.
   */
  const REWARD_RESET = 36;

  /**
   * Client attended several visits.
   *
   * @see \RsRewardScoreSid::VISIT
   */
  const SUMMARY_VISIT = 35;

  /** Client connected his Twitter account. */
  const TWITTER_CONNECT = 13;

  /** Client disconnected his Twitter account. */
  const TWITTER_DISCONNECT = 20;
}

?>