<?php

namespace WellnessLiving\Wl;

/**
 * Types of reward actions.
 *
 * Last used ID: 32
 */
abstract class RsRewardScoreSid
{
  /**
   * Customer Birthday earns X points.
   */
  const BIRTHDAY = 16;

  /**
   * Book a class online.
   */
  const BOOK = 14;

  /**
   * Book a class and share on Facebook.
   */
  const BOOK_FACEBOOK = 2;

  /**
   * Book a class and share on Twitter.
   */
  const BOOK_TWITTER = 3;

  /**
   * Custom action.
   */
  const CUSTOM = 26;

  /**
   * Connect profile to Facebook.
   */
  const LOGIN_FACEBOOK = 7;

  /**
   * Manual edit reward points.
   */
  const MANUAL = 21;

  /**
   * Each Dollar spent earns customers X points.
   */
  const PAY = 15;

  /**
   * The reward for the purchase of some product.
   */
  const PURCHASE_PRODUCT = 28;

  /**
   * The reward for the purchase of some promotion.
   */
  const PURCHASE_PROMOTION = 27;

  /**
   * Share to facebook purchased item.
   */
  const PURCHASE_SHARE_FACEBOOK = 22;

  /**
   * Share to twitter purchased item.
   */
  const PURCHASE_SHARE_TWITTER = 23;

  /**
   * Referral purchase.
   */
  const REFER_PURCHASE = 30;

  /**
   * Referral registration.
   */
  const REFER_REGISTER = 31;

  /**
   * User registration.
   */
  const REGISTRATION = 20;

  /**
   * Record to reset all-time earned user points. This points will be always negative.
   */
  const RESET = 25;

  /**
   * Record to reset current available user points. This points will be always negative.
   */
  const RESET_AVAILABLE = 32;

  /**
   * Write a review on microsite.
   */
  const REVIEW = 11;

  /**
   * Write a review on microsite and share on Facebook.
   */
  const REVIEW_FACEBOOK = 9;

  /**
   * Write a review on microsite and share on Twitter.
   */
  const REVIEW_TWITTER = 10;

  /**
   * Visit classes on the same location.
   */
  const VISIT = 12;

  /**
   * Attending a specific appointment earns customers X points.
   */
  const VISIT_APPOINTMENT = 29;

  /**
   * Attending a specific class earns customers X points.
   */
  const VISIT_CLASS = 18;

  /**
   * Attending a specific Workshop/Enrollment/Event earns customers X points.
   */
  const VISIT_ENROLLMENT = 19;
}

?>