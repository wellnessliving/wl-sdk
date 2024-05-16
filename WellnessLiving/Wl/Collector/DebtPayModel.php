<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Registers a debt payment that was performed beyond Wellnessliving, with a specified credit amount applied to a client's account balance.
 */
class DebtPayModel extends WlModelAbstract
{
  /**
   * The currency of the payment.
   * One of {@link CurrencySid} constants.
   *
   * Important! The currency must coincide with currency of the debt that was sent to collections.
   *
   * @post get
   * @var int
   */
  public $id_currency = 0;

  /**
   * The payment method ID.
   * One of {@link WlPayMethodSid} constants.
   *
   * `null` if the payment method is unknown. In such cases, {@link WlPayMethodSid::CASH} would be used.
   *
   * @post post
   * @var int|null
   */
  public $id_pay_method = null;

  /**
   * The key of the business from which the debt originates.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * The debt key towards which the payment was performed.
   *
   * @post post
   * @var string
   */
  public $k_collector_debt = '';

  /**
   * The transaction key generated to register the payment.
   *
   * @post result
   * @var string
   */
  public $k_pay_transaction = '';

  /**
   * The amount of money that's been paid towards the debt.
   *
   * @post post
   * @var string
   */
  public $m_amount = '';

  /**
   * The key of the user with the debt.
   *
   * @post get
   * @var string
   */
  public $uid = '';
}

?>