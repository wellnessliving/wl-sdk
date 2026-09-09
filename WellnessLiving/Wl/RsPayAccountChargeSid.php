<?php

namespace WellnessLiving\Wl;

/**
 * List of page transaction type.
 */
class RsPayAccountChargeSid
{
  /**
   * Account charging using payment form.
   */
  const AUTO = 1;

  /**
   * Manual account charge by admin.
   */
  const CREDIT = 3;

  /**
   * Manual account withdrawal by admin.
   */
  const DEBIT = 2;
}

?>