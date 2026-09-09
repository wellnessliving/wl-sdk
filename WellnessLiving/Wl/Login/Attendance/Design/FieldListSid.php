<?php

namespace WellnessLiving\Wl\Login\Attendance\Design;

/**
 * List of fields that can be used on attendance list.
 *
 * Last ID: 21.
 */
class FieldListSid
{
  /**
   * Client's age.
   */
  const AGE = 1;

  /**
   * Attendance at rank.
   */
  const ATTENDANCE_AT_RANK = 20;

  /**
   * Title of client's current belt.
   */
  const BELT = 16;

  /**
   * Select of belt categories, which connected to client.
   */
  const BELT_CATEGORY = 15;

  /**
   * User who booked visit.
   */
  const BOOKED_BY = 12;

  /**
   * Class conditions for belt promotion.
   */
  const CONDITION_FOR_PROMOTION = 21;

  /**
   * Client's email address.
   */
  const EMAIL = 2;

  /**
   * Client's age.
   */
  const GENDER = 3;

  /**
   * Client's Name.
   */
  const LOGIN = 10;

  /**
   * Client's member identifier.
   */
  const MEMBER_NUMBER = 4;

  /**
   * Type of payment that applied to visit.
   */
  const ORDER_NUMBER = 5;

  /**
   * Type of payment that applied to visit.
   */
  const PAY_WITH = 6;

  /**
   * Client's phone number.
   */
  const PHONE = 7;

  /**
   * Client's picture.
   */
  const PICTURE = 8;

  /**
   * Assigned forms.
   */
  const QUIZ = 18;

  /**
   * Whether client ready for rank promotion.
   */
  const READY_FOR_PROMOTION = 17;

  /**
   * Visit status.
   */
  const STATUS = 13;

  /**
   * Time at rank.
   */
  const TIME_AT_RANK = 19;

  /**
   * Assets.
   */
  const VISIT_ASSET = 11;

  /**
   * Count of remaining visits in client promotion.
   */
  const VISIT_REMAIN = 9;

  /**
   * When the user was added to the wait list.
   */
  const WAIT_FROM = 14;
}

?>