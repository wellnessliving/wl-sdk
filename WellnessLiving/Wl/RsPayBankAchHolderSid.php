<?php

namespace WellnessLiving\Wl;

/**
 * A list of account holder types which can be chosen.
 */
abstract class RsPayBankAchHolderSid
{
  /**
   * Account holder is a business.
   */
  const BUSINESS = 2;

  /**
   * Account holder is a person.
   */
  const PERSONAL = 1;
}

?>