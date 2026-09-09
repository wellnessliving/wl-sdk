<?php

namespace WellnessLiving\Wl\Schedule\Design;

/**
 * Staff name display options.
 *
 * Last used ID: 5
 */
class StaffNameSid
{
  /**
   * Show initial first name and full last name staff.
   */
  const FULL_FIRST_INITIAL_LAST_NAME = 3;

  /**
   * Show full first and last name staff.
   */
  const FULL_FIRST_LAST_NAME = 1;

  /**
   * Show initial first name and full last name staff.
   */
  const INITIAL_FIRST_FULL_LAST_NAME = 2;

  /**
   * Show only first name staff.
   */
  const ONLY_FIST_NAME = 4;

  /**
   * Display job title instead staff member's name.
   */
  const POSITION = 5;
}

?>