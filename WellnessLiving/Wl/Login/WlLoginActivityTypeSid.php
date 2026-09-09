<?php

namespace WellnessLiving\Wl\Login;

use WellnessLiving\Wl\RsRewardScoreSid;

/**
 * Manages identifiers of user activity.
 *
 * Last ID: 56.
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

  /**
   * Client added a class to favorites.
   */
  const FAVORITE_ADD_CLASS = 4;

  /**
   * Client added a location to favorites.
   */
  const FAVORITE_ADD_LOCATION = 5;

  /**
   * Client added a staff member to favorites.
   */
  const FAVORITE_ADD_STAFF = 6;

  /**
   * Client removed a class from favorites.
   */
  const FAVORITE_REMOVE_CLASS = 7;

  /**
   * Client removed a location from favorites.
   */
  const FAVORITE_REMOVE_LOCATION = 8;

  /**
   * Client removed a staff member from favorites.
   */
  const FAVORITE_REMOVE_STAFF = 9;

  /**
   * Client added a friend.
   */
  const FRIEND_ADD = 10;

  /**
   * Client made a gym visit.
   */
  const GYM_VISIT = 32;

  /**
   * Client sent an invite.
   */
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

  /**
   * Client wrote a review.
   */
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
   * Reward points were changed manually.
   */
  const REWARD_MANUAL = 55;

  /**
   * All-time earned reward points have been reset.
   */
  const REWARD_RESET = 36;

  /**
   * Current available reward points have been reset.
   */
  const REWARD_RESET_AVAILABLE = 56;

  /**
   * Client attended several visits.
   *
   * @see RsRewardScoreSid::VISIT
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