<?php

namespace WellnessLiving\Wl\Business\Account\Transaction;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to modify amount of the failed payment.
 * After modification secondary payment for failed payment will use overridden amount instead of initial.
 *
 * @method WlModelRequest put()
 */
class TransactionOverrideAmountModel extends WlModelAbstract
{
  /**
   * Business key for which transaction belong.
   *
   * @put post
   * @var string
   */
  public $k_business;

  /**
   * Failed business account transaction for which amount should be changed.
   *
   * @put post
   * @var string
   */
  public $k_business_account_transaction;

  /**
   * Override transaction amount.
   *
   * `null` to set default value.
   *
   * @put post
   * @var string|null
   */
  public $m_amount;
}

?>