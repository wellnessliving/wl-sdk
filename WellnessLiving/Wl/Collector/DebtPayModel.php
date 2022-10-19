<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\WlModelAbstract;

/**
 * Performs payment for specific debt.
 */
class DebtPayModel extends WlModelAbstract
{
  /**
   * Currency of the payment. One of {@link CurrencySid} constants.
   *
   * @post get
   * @var int
   */
  public $id_currency;

  /**
   * Payment method of the payment. One of {@link \RsPayMethodSid} constants.
   *
   * `null` if payment method is unknown. In this case {@link \RsPayMethodSid::ACCOUNT} would be used.
   *
   * @post post
   * @var int|null
   */
  public $id_pay_method;

  /**
   * Business key of the debt.
   * Primary key in {@link \RsBusinessSql}.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Debt key towards which payment was performed.
   * Primary key in {@link CollectorDebtSql}.
   *
   * @post post
   * @var string
   */
  public $k_collector_debt;

  /**
   * Transaction key that was generated to register payment.
   * Primary key in {@link \RsPayTransactionSql}.
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
   * Primary key in {@link \PassportLoginSql}.
   *
   * @post get
   * @var string
   */
  public $uid;

}

?>