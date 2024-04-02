<?php

namespace WellnessLiving\Wl\Login;

/**
 * Manages identifiers of user activity.
 *
 * Last ID: 54.
 *
 * @copyright 2012 - 2015, WellnessLiving Inc, www.wellnessliving.com.
 */
abstract class WlLoginActivityTypeSid
{
  /**
   * Client books an appointment.
   */
  const APPOINTMENT_BOOK = 27;

  /**
   * Client booked an appointment and shared on Facebook.
   */
  const APPOINTMENT_BOOK_FACEBOOK = 47;

  /**
   * Client booked an appointment and shared on Twitter.
   */
  const APPOINTMENT_BOOK_TWITTER = 48;

  /**
   * Client cancels an appointment.
   */
  const APPOINTMENT_CANCEL = 28;

  /**
   * Client attends an appointment.
   */
  const APPOINTMENT_VISIT = 23;

  /**
   * Client books an appointment to wait list.
   */
  const APPOINTMENT_WAIT = 52;

  /**
   * Client booked an asset and shared on Facebook.
   */
  const ASSET_BOOK_FACEBOOK = 49;

  /**
   * Client booked an asset and shared on Twitter.
   */
  const ASSET_BOOK_TWITTER = 50;

  /**
   * Client's birthday.
   */
  const BIRTHDAY = 1;

  /**
   * Client booked a class.
   */
  const CLASS_BOOK = 2;

  /**
   * Client booked a class and shared on Facebook.
   */
  const CLASS_BOOK_FACEBOOK = 43;

  /**
   * Client booked a class and shared on Twitter.
   */
  const CLASS_BOOK_TWITTER = 44;

  /**
   * Client cancelled a class.
   */
  const CLASS_CANCEL = 3;

  /**
   * Client attends a class.
   */
  const CLASS_VISIT = 15;

  /**
   * Client booked a class.
   */
  const CLASS_WAIT = 54;

  /**
   * Gift card transferred.
   */
  const COUPON_TRANSFER = 51;

  /**
   * Staff approved a custom reward for a client.
   */
  const CUSTOM_REWARD = 31;

  /**
   * Client booked an enrollment.
   */
  const ENROLLMENT_BOOK = 17;

  /**
   * Client booked an enrollment and shared on Facebook.
   */
  const ENROLLMENT_BOOK_FACEBOOK = 45;

  /**
   * Client booked an enrollment and shared on Twitter.
   */
  const ENROLLMENT_BOOK_TWITTER = 46;

  /**
   * Client cancels an enrollment.
   */
  const ENROLLMENT_CANCEL = 18;

  /**
   * Client attends an enrollment.
   */
  const ENROLLMENT_VISIT = 16;

  /**
   * Client booked an enrollment.
   */
  const ENROLLMENT_WAIT = 53;

  /**
   * Client connected his Facebook account.
   */
  const FACEBOOK_CONNECT = 12;

  /**
   * Client disconnected his Facebook account.
   */
  const FACEBOOK_DISCONNECT = 19;

  const FAVORITE_ADD_CLASS = 4;

  const FAVORITE_ADD_LOCATION = 5;

  const FAVORITE_ADD_STAFF = 6;

  const FAVORITE_REMOVE_CLASS = 7;

  const FAVORITE_REMOVE_LOCATION = 8;

  const FAVORITE_REMOVE_STAFF = 9;

  const FRIEND_ADD = 10;

  /**
   * Client made a gym visit.
   */
  const GYM_VISIT = 32;

  const INVITE_SEND = 14;

  /**
   * The user shared location item into Facebook
   */
  const LOCATION_SHARE_FACEBOOK = 39;

  /**
   * The user shared location item into Twitter
   */
  const LOCATION_SHARE_TWITTER = 40;

  /**
   * The user spend money.
   */
  const PAY = 22;

  /**
   * Client has bought prize.
   */
  const PRIZE = 24;

  /**
   * Promotion transferred.
   */
  const PROMOTION_TRANSFER = 34;

  /**
   * Customer bought the product.
   *
   * @deprecated Use {@link WlLoginActivityTypeSid::PAY} instead.
   */
  const PURCHASE_PRODUCT = 30;

  /**
   * Customer bought the promotion.
   *
   * @deprecated Use {@link WlLoginActivityTypeSid::PAY} instead.
   */
  const PURCHASE_PROMOTION = 29;

  /**
   * The user shared purchase item into Facebook
   */
  const PURCHASE_SHARE_FACEBOOK = 25;

  /**
   * The user shared purchase item into Twitter
   */
  const PURCHASE_SHARE_TWITTER = 26;

  /**
   * Referral made a purchase.
   */
  const REFER_PURCHASE = 38;

  /**
   * A referrer is set for the user.
   */
  const REFER_REGISTER = 37;

  /**
   * The user has logged in.
   */
  const REGISTRATION = 21;

  const REVIEW = 11;

  /**
   * The user shared purchase item into Facebook
   */
  const REVIEW_SHARE_FACEBOOK = 41;

  /**
   * The user shared purchase item into Twitter
   */
  const REVIEW_SHARE_TWITTER = 42;

  /**
   * All reward points have been reset.
   */
  const REWARD_RESET = 36;

  /**
   * Client attended several visits.
   */
  const SUMMARY_VISIT = 35;

  /**
   * Client connected his Twitter account.
   */
  const TWITTER_CONNECT = 13;

  /**
   * Client disconnected his Twitter account.
   */
  const TWITTER_DISCONNECT = 20;
}

?>