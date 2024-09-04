<?php

namespace WellnessLiving\Wl\Visit;

/**
 * Reasons of failed book or check-in.
 *
 * Last used ID: 29
 */
class VisitDenyReasonSid
{
  /**
   * The business can not take one more client.
   */
  const ACCESS_DENIED = 1;

  /**
   * Access is limited.
   */
  const ACCESS_LIMITED = 2;

  /**
   * The business can not take one more client.
   */
  const ACCOUNT_LIMIT = 3;

  /**
   * Class is not available for certain age.
   */
  const AGE_RESTRICTION = 4;

  /**
   * Liability Release needs to be agreed.
   */
  const AGREE_NX = 5;

  /**
   * @title Instructor has denied appointment request
   */
  const APPOINTMENT_DENY = 25;

  /**
   * @title Instructor has not approved appointment request
   */
  const APPOINTMENT_REQUEST = 26;

  /**
   * @title Gym attendance disabled by business policy
   */
  const ATTEND_GYM_DISABLE = 23;

  /**
   * @title Self check-ins are disabled by business policy
   */
  const ATTEND_SELF_DISABLE = 22;

  /**
   * @title Unpaid check-ins are disabled by business policy
   */
  const ATTEND_UNPAID = 28;

  /**
   * @title User on a wait list
   */
  const ATTEND_WAIT = 27;

  /**
   * Client is already booked for this session.
   */
  const BOOKED_ALREADY = 6;

  /**
   * It's too early to book a class.
   */
  const BOOK_EARLY = 7;

  /**
   * It's too late to book a class.
   */
  const BOOK_LATE = 8;

  /**
   * @title Visit should be booked prior to check in
   */
  const BOOK_NX = 24;

  /**
   * Cannot book to this class anymore.
   */
  const BOOK_RESTRICT = 9;

  /**
   * Business is inactive.
   */
  const BUSINESS_INACTIVE = 10;

  /**
   * Class is canceled.
   */
  const CLASS_CANCELED = 11;

  /**
   * Class is full.
   */
  const CLASS_FULL = 14;

  /**
   * Class does not exist anymore.
   */
  const CLASS_NOT_AVAILABLE_ANYMORE = 15;

  /**
   * Client is flagged at location.
   */
  const CLIENT_FLAGGED = 12;

  /**
   * Credit card is required for booking services.
   */
  const CREDIT_CARD_REQUIRE = 13;

  /**
   * Business is closed.
   */
  const HOLIDAY = 16;

  /**
   * Login is required.
   */
  const LOGIN_REQUIRED = 17;

  /**
   * Online booking is disabled for the class.
   */
  const NOT_BOOKABLE = 18;

  /**
   * @title No appropriate payment option
   */
  const PAYMENT_NX = 30;

  /**
   * @title Unclassified reason
   */
  const UNKNOWN = 29;

  /**
   * Required personal details missing.
   */
  const USER_INFO_MISSING = 19;

  /**
   * Visit to another class is required first.
   */
  const VISIT_BEFORE = 20;

  /**
   * The wait list is full.
   */
  const WAIT_LIST_LIMIT_MAX = 21;
}

?>