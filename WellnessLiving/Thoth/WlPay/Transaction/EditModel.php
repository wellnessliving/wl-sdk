<?php

namespace WellnessLiving\Thoth\WlPay\Transaction;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Allows to manually change some data of a payment transaction process, such as date, amount, payment method.
 *
 * @method WlModelRequest put() Changes payment transaction according to request.
 */
class EditModel extends WlModelAbstract
{
  /**
   * New time of payment transaction:
   *
   * Not specified if should not be changed.
   *
   * <dl>
   *   <dt>int `i_hour`</dt>
   *   <dd>Number of hours.</dd>
   * 
   *   <dt>int `i_minute`</dt>
   *   <dd>Number of minutes.</dd>
   * 
   *   <dt>bool `is_am`</dt>
   *   <dd>Whether time in AM or PM.</dd>
   * </dl>
   * @put post
   * @var array
   */
  public $a_time;

  /**
   * New date without time of payment transaction process.
   *
   * Not specified if should not be changed.
   *
   * @put post
   * @var string
   */
  public $dt_date_local;

  /**
   * Changed amount of the transaction.
   *
   * @put result
   * @var string
   */
  public $html_amount;

  /**
   * Changed date of the transaction.
   *
   * @put result
   * @var string
   */
  public $html_date;

  /**
   * New base payment method of payment transaction. One of {@link WlPayMethodSid} constants.
   *
   * Not specified if should not be changed.
   *
   * @put post
   * @var int
   */
  public $id_pay_method;

  /**
   * New custom payment method of payment transaction.
   *
   * Not specified if should not be changed or if base payment method should be used.
   *
   * @put post
   * @var string
   */
  public $k_pay_method;

  /**
   * ID of a payment transaction to change.
   *
   * May be empty if {@link EditModel::$k_pay_transaction_process} is specified.
   *
   * @put get
   * @var string
   */
  public $k_pay_transaction;

  /**
   * ID of a payment transaction process to change.
   *
   * May be empty if {@link EditModel::$k_pay_transaction} is specified.
   *
   * @put get
   * @var string
   */
  public $k_pay_transaction_process;

  /**
   * New amount of payment transaction process.
   *
   * Not specified if should not be changed.
   *
   * @put post
   * @var string
   */
  public $m_amount;
}

?>