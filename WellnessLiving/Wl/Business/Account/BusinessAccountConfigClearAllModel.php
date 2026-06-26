<?php

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Clears all failed transactions from the business's payment schedule.
 *
 * @method WlModelRequest post() Clears an existing payment and sets the payment to the status of 'Clear Balance'.
 */
class BusinessAccountConfigClearAllModel extends WlModelAbstract
{
  /**
   * Business account transaction key.
   *
   * @post post
   * @var string
   */
  public $k_business;
}

?>