<?php

namespace WellnessLiving\Wl\Visit;

/**
 * Reasons of failed book or check-in.
 *
 * Last used ID: 37
 */
class VisitDenyReasonSid
{
  /**
   * The business can not take one more client.
   *
   * @title Access denied please contact support
   */
  const ACCESS_DENIED = 1;

  /**
   * Access is limited.
   *
   * @title Access to this location is restricted
   */
  const ACCESS_LIMITED = 2;

  /**
   * The business can not take one more client.
   *
   * @title Error during booking. Rebooking required
   */
  const ACCOUNT_LIMIT = 3;

  /**
   * Class is not available for certain age.
   *
   * @title Age requirement not met for this class
   */
  const AGE_RESTRICTION = 4;

  /**
   * Liability Release needs to be agreed.
   *
   * @title Waiver not signed
   */
  const AGREE_NX = 5;

  /**
   * @title Service approval denied
   */
  const APPOINTMENT_DENY = 25;

  /**
   * @title Service requires staff approval
   */
  const APPOINTMENT_REQUEST = 26;

  /**
   * @title Business Policy restricts Gym Visits
   */
  const ATTEND_GYM_DISABLE = 23;

  /**
   * @title Self check-in not available for this service
   */
  const ATTEND_SELF_DISABLE = 22;

  /**
   * @title Business policy prevents unpaid check-ins
   */
  const ATTEND_UNPAID = 28;

  /**
   * @title Client is on the Wait List
   */
  const ATTEND_WAIT = 27;

  /**
   * @title Client has a negative account balance
   */
  const BALANCE_NEGATIVE = 37;

  /**
   * Client is already booked for this session.
   *
   * @title Client is already booked
   */
  const BOOKED_ALREADY = 6;

  /**
   * It's too early to book a class.
   *
   * @title It's too early to book this service
   */
  const BOOK_EARLY = 7;

  /**
   * It's too late to book a class.
   *
   * @title Booking is outside the allowed booking window
   */
  const BOOK_LATE = 8;

  /**
   * @title Visit must be booked before check-in
   */
  const BOOK_NX = 24;

  /**
   * Cannot book to this class anymore.
   *
   * @title Booking is restricted
   */
  const BOOK_RESTRICT = 9;

  /**
   * Business is inactive.
   *
   * @title The business is inactive
   */
  const BUSINESS_INACTIVE = 10;

  /**
   * Class is canceled.
   *
   * @title The service is cancelled
   */
  const CLASS_CANCELED = 11;

  /**
   * Class is full.
   *
   * @title Class is full
   */
  const CLASS_FULL = 14;

  /**
   * Class does not exist anymore.
   *
   * @title The service is no longer available
   */
  const CLASS_NOT_AVAILABLE_ANYMORE = 15;

  /**
   * Client is flagged at location.
   *
   * @title Client is flagged at this location
   */
  const CLIENT_FLAGGED = 12;

  /**
   * Credit card is required for booking services.
   *
   * @title Credit card required to book this service
   */
  const CREDIT_CARD_REQUIRE = 13;

  /**
   * Business is closed.
   *
   * @title Closed day
   */
  const HOLIDAY = 16;

  /**
   * Login is required.
   *
   * @title Log in is required
   */
  const LOGIN_REQUIRED = 17;

  /**
   * Online booking is disabled for the class.
   *
   * @title Online booking is disabled for this service
   */
  const NOT_BOOKABLE = 18;

  /**
   * @title Contract not signed
   */
  const PAYMENT_CONTRACT = 35;

  /**
   * @title Purchase Option expired
   */
  const PAYMENT_EXPIRE = 36;

  /**
   * @title Purchase Option on hold
   */
  const PAYMENT_HOLD = 34;

  /**
   * @title No valid Purchase Option
   */
  const PAYMENT_NX = 30;

  /**
   * @title Purchase Option has no visits left
   */
  const PAYMENT_REMAIN = 33;

  /**
   * @title Purchase Option not active yet
   */
  const PAYMENT_START = 32;

  /**
   * @title Attendance limit on Purchase Option reached
   */
  const SCHEDULE_RESTRICT = 31;

  /**
   * @title Check-in could not be completed
   */
  const UNKNOWN = 29;

  /**
   * Required personal details missing.
   *
   * @title Client has missing profile fields
   */
  const USER_INFO_MISSING = 19;

  /**
   * Visit to another class is required first.
   *
   * @title Prerequisites are required for this service
   */
  const VISIT_BEFORE = 20;

  /**
   * The wait list is full.
   *
   * @title Wait List is full
   */
  const WAIT_LIST_LIMIT_MAX = 21;
}

?>