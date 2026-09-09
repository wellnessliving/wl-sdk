<?php

namespace WellnessLiving\Wl;

/**
 * List of possible types of reasons of appointment cancellation.
 */
class RsAppointmentCancelReasonSid
{
  /**
   * Early cancellation.
   */
  const EARLY_CANCELLATION = 2;

  /**
   * User manually input reason of cancellation.
   */
  const OTHER = 3;

  /**
   * The reason of appointment cancellation that staff did not show up.
   */
  const STAFF_NO_SHOW = 1;
}

?>