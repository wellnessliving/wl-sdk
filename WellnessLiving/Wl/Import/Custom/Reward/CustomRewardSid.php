<?php

namespace WellnessLiving\Wl\Import\Custom\Reward;

/**
 * List of columns required to import client reward balance.
 *
 * Last used ID: 3.
 */
abstract class CustomRewardSid
{
  /**
   * Client's balance.
   */
  const BALANCE = 1;

  /**
   * Client's first name.
   */
  const FIRST_NAME = 3;

  /**
   * Client's last name.
   */
  const LAST_NAME = 2;

  /**
   * Client's email.
   */
  const MAIL = 5;

  /**
   * Client's uid.
   */
  const UID = 4;
}

?>