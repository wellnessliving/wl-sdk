<?php

namespace WellnessLiving\Thoth\PayProcessor\Config;

/**
 * Report sort fields list.
 */
class DirectConnectSortFieldSid
{
  /**
   * Payment ID.
   *
   * @var int
   */
  const PAYMENT_ID = 1;

  /**
   * Payment reference number
   *
   * @var int
   */
  const PAYMENT_REFERENCE_NUMBER = 2;

  /**
   * Result code.
   *
   * @var int
   */
  const RESULT_CODE = 3;

  /**
   * Transaction type
   *
   * @var int
   */
  const TRANSACTION_TYPE = 4;
}

?>