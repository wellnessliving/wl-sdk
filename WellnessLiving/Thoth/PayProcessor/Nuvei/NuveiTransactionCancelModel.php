<?php

namespace WellnessLiving\Thoth\PayProcessor\Nuvei;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Cancels `Nuvei` transaction.
 *
 * @method WlModelRequest post() Cancels the `Nuvei` transaction.  Voids the payer authentication session opened by {@link \Thoth\PayProcessor\Nuvei\NuveiOpenOrderApi} and schedules the  underlying payment transaction to be voided.
 */
class NuveiTransactionCancelModel extends WlModelAbstract
{
  /**
   * Key of the business which receives the payment.
   *
   * `null` in case when not initialized yet.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of payment transaction that was created in {@link NuveiOpenOrderModel}.
   *
   * This will be `null` if not loaded yet.
   *
   * @post post
   * @var string|null
   */
  public $k_pay_transaction = null;
}

?>