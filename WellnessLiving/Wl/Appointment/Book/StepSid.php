<?php

namespace WellnessLiving\Wl\Appointment\Book;

/**
 * List of steps to be passed by the client to book a service.
 *
 * Last used id: 22.
 */
class StepSid
{
  /**
   * Step with the selecting of asset.
   */
  const ASSET = 7;

  /**
   * Step with the selecting of asset category.
   */
  const ASSET_CATEGORY = 10;

  /**
   * Step for select asset duration.
   */
  const ASSET_DURATION = 13;

  /**
   * Selection of assets which are required for service booking.
   */
  const ASSET_SERVICE = 14;

  /**
   * Authorization.
   */
  const AUTHORIZE = 20;

  /**
   * Resolving of conflicts.
   */
  const CONFLICT = 18;

  /**
   * Step with the contract signup.
   */
  const CONTRACT = 11;

  /**
   * Step with the selecting of location.
   */
  const LOCATION = 1;

  /**
   * Step with the payment of promotion.
   */
  const PAYMENT = 6;

  /**
   * Add-ons.
   */
  const PRODUCT = 17;

  /**
   * Step with the selecting of purchase options.
   */
  const PURCHASE = 5;

  /**
   * Preview before purchase.
   */
  const PURCHASE_PREVIEW = 16;

  /**
   * Step with answers the questions.
   */
  const QUESTION = 12;

  /**
   * Step with required quizzes.
   */
  const QUIZ = 22;

  /**
   * Step with the selecting of book date.
   */
  const SCHEDULE = 4;

  /**
   * An intermediate step for services where the client himself sets the sequence of steps Staff and Schedule.
   */
  const SEQUENCE = 21;

  /**
   * Step with the selecting of service.
   */
  const SERVICE = 2;

  /**
   * Step with the selecting of service category.
   */
  const SERVICE_CATEGORY = 8;

  /**
   * Step with the selecting of staff member.
   */
  const STAFF = 3;

  /**
   * Step with the selecting a gender of the staff members.
   */
  const STAFF_GENDER = 9;

  /**
   * Selection of user to book appointment for.
   */
  const USER = 15;

  /**
   * Step with waiver signing.
   */
  const WAIVER = 19;
}

?>