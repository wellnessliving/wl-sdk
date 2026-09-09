<?php

namespace WellnessLiving\Wl\Classes\Edit;

/**
 * Event time enrollment rules.
 * Influence only block events.
 */
class EnrollTimeSid
{
  /**
   * Deny enrollment of the event that is in progress.
   *
   * @title Clients must pre-register before the start of the event
   */
  const PROGRESS_DENY = 1;

  /**
   * Allow enrollment to event in progress with full payment.
   *
   * @title Clients can enroll into an event that is in progress and pay full price
   */
  const PROGRESS_FULL = 3;

  /**
   * Allow enrollment to event in progress with prorated payment.
   *
   * @title Clients can enroll into an event that is in progress and pay prorated amount
   */
  const PROGRESS_PRORATE = 2;
}

?>