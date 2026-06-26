<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint designed to skip user from being debtor.
 *
 * @method WlModelRequest post()
 */
class DebtSkipModel extends WlModelAbstract
{
  /**
   * List of debts that should be skipped.
   *
   * Keys are user keys. Primary key in {@link \PassportLoginSql}
   * Values are debt keys.
   *
   * @post post
   * @var array
   */
  public $a_collector_debt = [];

  /**
   * Currency of the payment. One of {@link CurrencySid} constants.
   *
   * @post get
   * @var int
   */
  public $id_currency = 0;

  /**
   * Business key of the debt.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Debt key towards which skip should be performed.
   *
   * @post post
   * @var string
   */
  public $k_collector_debt = '';

  /**
   * Text to be shown as reason of the skip.
   *
   * @post post
   * @var string
   */
  public $text_reason = '';

  /**
   * Business key of the debt.
   *
   * @post get
   * @var string
   */
  public $uid = '';
}

?>