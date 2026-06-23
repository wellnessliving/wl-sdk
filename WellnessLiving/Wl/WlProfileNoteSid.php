<?php

namespace WellnessLiving\Wl;

/**
 * Sources of system notes.
 *
 * Last used ID: 12.
 */
abstract class WlProfileNoteSid
{
  /**
   * A list of clients with not redeemed invitations.
   */
  const DOORACCESS_BRIVO_INVITATION_BRIVOINVITATIONPROFILE = 5;

  /**
   * A list of accounts with invalid progress log.
   */
  const MEMBER_PROGRESS_LOG_PROFILE = 3;

  /**
   * A list of accounts with not verified progress log.
   */
  const MEMBER_PROGRESS_LOG_VERIFICATION = 4;

  /**
   * A list of accounts with negative balance.
   */
  const PAY_ACCOUNT = 1;

  /**
   * A list of accounts with unsigned waivers.
   */
  const PROFILE_PAGE_OVERVIEW_ALERT_AGREE = 8;

  /**
   * A list of accounts with upcoming birthdays.
   */
  const PROFILE_PAGE_OVERVIEW_ALERT_BIRTHDAY = 6;

  /**
   * A list of accounts with unsigned contracts.
   */
  const PROFILE_PAGE_OVERVIEW_ALERT_CONTRACT = 9;

  /**
   * A list of accounts with expired or soon expiring credit cards.
   */
  const PROFILE_PAGE_OVERVIEW_ALERT_CREDITCARD = 7;

  /**
   * A list of accounts with a milestone visit.
   */
  const PROFILE_PAGE_OVERVIEW_ALERT_MILESTONEVISIT = 12;

  /**
   * A list of accounts with uncompleted quizzes.
   */
  const PROFILE_PAGE_OVERVIEW_ALERT_QUIZ = 10;

  /**
   * A list of accounts at risk of churn.
   */
  const PROFILE_PAGE_OVERVIEW_ALERT_RISK = 11;

  /**
   * A list of due membership payments.
   */
  const PROMOTION_PAY = 2;
}

?>