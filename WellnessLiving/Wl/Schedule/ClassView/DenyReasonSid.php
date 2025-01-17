<?php

namespace WellnessLiving\Wl\Schedule\ClassView;

/**
 * Reasons why the client can't book this class.
 *
 * Last used ID: 24
 */
class DenyReasonSid
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
     * Client has unpaid fees.
     */
  const BALANCE_NEGATIVE = 22;

  /**
     * Client is already booked for this session.
     *
     * @titile Client is already booked for this session
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
     * Online booking is disabled for this type of client.
     */
  const NOT_BOOKABLE_BY_TYPE = 24;

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

  /**
     * Client has unsigned waiver.
     */
  const WAIVER_NX = 23;
}

?>