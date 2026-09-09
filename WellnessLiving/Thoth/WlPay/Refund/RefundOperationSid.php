<?php

namespace WellnessLiving\Thoth\WlPay\Refund;

/**/
class RefundOperationSid
{
  /**
   * Refund operation.
   *
   * This operation can only be performed on settled transactions.
   *
   * Partial refund is possible.
   */
  const REFUND = 1;

  /**
   * Void operation.
   *
   * This operation can only be performed on unsettled transactions.
   *
   * Partial voiding is not allowed.
   */
  const VOID = 2;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Refund.RefundOperationSid';
}

?>