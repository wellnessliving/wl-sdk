<?php

namespace WellnessLiving\Wl\Insurance\Reimbursement;

/**
 * Types of the visits.
 *
 * Online and physical visits are treated by insurance companies differently.
 *
 * Last used ID: 3.
 */
class VisitTypeSid
{
  /**
   * Online class without recording.
   *
   * Name of the class should be: Online Live Streaming Class
   *
   * @title Online Live
   */
  const ONLINE = 2;

  /**
   * Actual physical to the club.
   *
   * @title In-Person
   */
  const PHYSICAL = 1;

  /**
   * Online class with recording.
   *
   * Name of the class should be: Online Recorded Class or MCOD Wellness.
   *
   * @title Online Recorded
   */
  const RECORDED = 3;
}

?>