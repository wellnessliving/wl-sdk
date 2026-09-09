<?php

namespace WellnessLiving\Wl;

/**
 * A list of recurrent payment data types.
 */
abstract class RsPayRecurrentSid
{
  /**
   * Payment based on bank accounts (for example, credit card or bank account).
   *
   * See {@link RsPayBankSid} for a list of bank account types.
   *
   * @see RsPayBankSid
   */
  const BANK = 1;
}

?>