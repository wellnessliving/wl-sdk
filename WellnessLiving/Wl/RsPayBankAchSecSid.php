<?php

namespace WellnessLiving\Wl;

/**
 * A list of SEC codes which can be chosen.
 */
abstract class RsPayBankAchSecSid
{
  /**
   * Corporate bank account.
   */
  const CCD = 4;

  /**
   * Prearranged Payment & Deposit.
   */
  const PPD = 2;

  /**
   * Telephone Initiated Entry.
   */
  const TEL = 3;

  /**
   * Web Initiated Entry.
   */
  const WEB = 1;
}

?>