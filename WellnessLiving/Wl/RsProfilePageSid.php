<?php

namespace WellnessLiving\Wl;

use WellnessLiving\Wl\Report\WlReportPageSid;

/**
 * A list of pages shown in user profile.
 *
 * Last used ID: 28.
 */
abstract class RsProfilePageSid
{
  /**
   * Account balance history: payment transactions by account.
   */
  const ACCOUNT_BALANCE_HISTORY = 27;

  const ACTIVITY = 2;

  /**
   * Billing information: payment transactions and internal user account status.
   */
  const BILLING = 17;

  /**
   * List all of the contracts that the client has agreed to and not yet agreed to.
   */
  const CONTRACT = 19;

  const EARN = 15;

  /**
   * List of form responses.
   */
  const FORM = 26;

  /**
   * List of guest pass whether the specified user has at least one guest pass invitation -
   * either as the host who sent it or as the guest who received it.
   */
  const GUEST_PASS = 28;

  /**
   * @deprecated Use {@link WlReportPageSid::PROFILE_ATTENDANCE_SCHEDULE} instead.
   */
  const HISTORY = 4;

  const MAIL = 6;

  const MEMBER = 7;

  /**
   * Push notifications page.
   */
  const NOTIFICATION = 24;

  /**
   * Notifications settings page.
   */
  const NOTIFICATIONS = 25;

  const OVERVIEW = 8;

  const PRIZE = 16;

  /**
   * Progress log page.
   */
  const PROGRESS = 22;

  /**
   * Progress goal page.
   */
  const PROGRESS_GOAL = 23;

  const PURCHASE = 9;

  const PURCHASE_DETAIL = 13;

  /**
   * Installment plan schedule.
   */
  const PURCHASE_INSTALLMENT = 20;

  const REWARD = 14;

  /**
   * @deprecated Use {@link WlReportPageSid::PROFILE_ATTENDANCE_SCHEDULE} instead.
   */
  const SCHEDULE = 10;

  /**
   * Shows list of the administrators who have signed in as a user.
   */
  const SIGNIN_HISTORY = 21;

  /**
   * Full list of auto-emails to configure subscription.
   */
  const SUBSCRIBE = 18;

  const TERM = 11;

  /**
   * A list of user's payment transactions.
   */
  const TRANSACTION = 12;
}

?>