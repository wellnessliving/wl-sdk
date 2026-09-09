<?php

namespace WellnessLiving\Wl\Skin\Application\Section;

/**
 * Home screen sections of mobile client app.
 *
 * Last used ID: 11.
 */
class HomeSectionSid
{
  /**
   * Announcements.
   *
   * @title Announcements
   */
  const ANNOUNCEMENT = 1;

  /**
   * Guest passes.
   *
   * @title Guest Passes
   */
  const GUEST_PASS = 10;

  /**
   * Progress group. Has no enable state of its own - visibility is derived from its children
   * {@link HomeSectionSid::PROGRESS_WEEKLY_GOAL} and {@link HomeSectionSid::PROGRESS_LIFETIME_VISIT}.
   *
   * @title Your progress
   */
  const PROGRESS = 2;

  /**
   * Lifetime visits, a child of {@link HomeSectionSid::PROGRESS}.
   *
   * @title Lifetime visits
   */
  const PROGRESS_LIFETIME_VISIT = 4;

  /**
   * Weekly goal, a child of {@link HomeSectionSid::PROGRESS}.
   *
   * @title Weekly goal
   */
  const PROGRESS_WEEKLY_GOAL = 3;

  /**
   * Purchase options.
   *
   * @title Your purchase options
   */
  const PURCHASE_OPTION = 9;

  /**
   * Quick actions.
   *
   * @title Quick Actions
   */
  const QUICK_ACTION = 11;

  /**
   * Referral.
   *
   * @title Referral
   */
  const REFERRAL = 7;

  /**
   * Rewards.
   *
   * @title Rewards
   */
  const REWARDS = 6;

  /**
   * Upcoming bookings.
   *
   * @title Upcoming bookings
   */
  const UPCOMING_BOOKING = 8;

  /**
   * Workout of the day.
   *
   * @title Workout of the day
   */
  const WORKOUT_OF_DAY = 5;
}

?>