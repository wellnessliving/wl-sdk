<?php

namespace WellnessLiving\Wl\Fitbuilder\Setup;

/**
 * List of all possible pages in the Fit Builder setup.
 *
 * Last used ID: 6
 */
class FitbuilderSetupSid
{
  /**
   * Circuits.
   *
   * A series of exercises combined with no rest in between, completing the series once counts as a round.
   *
   * The cindy is a common crossfit circuit it includes: 5 pull-ups + 10 push-ups + 15 squats.
   */
  const CIRCUITS = 1;

  /**
   * Exercises.
   *
   * Exercises is a single motion or series of motions that are intended to develop the person’s strength or stamina.
   *
   * Examples: Push-up, Squat, Clean.
   */
  const EXERCISES = 2;

  /**
   * Marketplace page.
   *
   * @link https://wellnessliving.atlassian.net/browse/WL-87820
   */
  const MARKETPLACE = 6;

  /**
   * Fit Builder settings.
   */
  const SETTINGS = 5;

  /**
   * Workout of the day.
   *
   * Schedule of all workouts by days.
   */
  const WOD = 4;

  /**
   * Workouts.
   *
   * A workout is a combination of exercises or circuits divided into sections (workout categories).
   * The exercises or circuits could be separated by rest time.
   */
  const WORKOUTS = 3;
}

?>