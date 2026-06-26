<?php

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Clears a business account balance transaction.
 *
 * @method WlModelRequest post() Clears an existing payment and sets the payment to the status of 'Clear Balance'. Clear balance is used when WellnessLiving wants to forgive outstanding payments for a business. 'Clear Balance' is a type of payment method and corresponds to the {@link \RsPayMethodSid::CLEAR_BALANCE} constant.
 */
class BusinessAccountConfigClearModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * Business account transaction key.
   *
   * @post post
   * @var string
   */
  public $k_business_account_transaction;
}

?>