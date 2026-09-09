<?php

namespace WellnessLiving\Wl\Import\Custom\ClientAccountBalance;

/**
 * List of columns required to import client account balance.
 */
class CustomClientAccountBalanceSid
{
  /**
   * Client's account balance.
   */
  const ACCOUNT_BALANCE = 4;

  /**
   * Client name in format: `Name, Surname`.
   */
  const CLIENT_NAME = 2;

  /**
   * Client's email.
   */
  const EMAIL = 3;

  /**
   * ID of the member within the business.
   */
  const MEMBER_ID = 1;

  /**
   * Client's uid.
   */
  const UID = 5;
}

?>