<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\WlModelAbstract;

/**
 * Registers debt payment, that was performed beyond Wellnessliving, and credits client's account balance on given amount.
 */
class DebtPayModel extends WlModelAbstract
{
  /**
   * Currency of the payment.
   * One of {@link \WellnessLiving\Core\Locale\CurrencySid} constants.
   *
   * !!! Important !!! Currency should coincide with currency of debt that was sent to collections.
   *
   * @post post
   * @var int
   */
  public $id_currency;

  /**
   * Payment method of the payment.
   * One of {@link \WellnessLiving\WlPayMethodSid} constants.
   *
   * `null` if payment method is unknown. In this case {@link \WellnessLiving\WlPayMethodSid::ACCOUNT} would be used.
   *
   * @post post
   * @var int|null
   */
  public $id_pay_method;

  /**
   * Business key of the debt.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Debt key towards which payment was performed.
   *
   * @post post
   * @var string
   */
  public $k_collector_debt;

  /**
   * Transaction key that was generated to register payment.
   *
   * @post result
   * @var string
   */
  public $k_pay_transaction;

  /**
   * Amount of money that has been paid towards the debt.
   *
   * @post post
   * @var string
   */
  public $m_amount;

  /**
   * Business key of the debt.
   *
   * @post get
   * @var string
   */
  public $uid;

}

?>