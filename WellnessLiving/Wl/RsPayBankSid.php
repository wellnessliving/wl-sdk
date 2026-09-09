<?php

namespace WellnessLiving\Wl;

/**
 * A list of bank account types.
 */
abstract class RsPayBankSid
{
  /**
   * Bank account for ACH direct bank transactions. USA-specific system.
   *
   * @link http://en.wikipedia.org/wiki/Automated_Clearing_House
   */
  const ACH = 2;

  /**
   * A credit card.
   */
  const CARD = 1;

  /**
   * Bank account for Direct Entry direct bank transactions.  Australian-specific system.
   *
   * @link http://en.wikipedia.org/wiki/Financial_system_in_Australia#Direct_Entry
   */
  const DIRECT_ENTRY = 3;
}

?>