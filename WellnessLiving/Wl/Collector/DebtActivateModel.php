<?php

namespace WellnessLiving\Wl\Collector;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint designed to activate skipped debt for a user.
 *
 * @method WlModelRequest post()
 */
class DebtActivateModel extends WlModelAbstract
{
  /**
   * List of debts that should be activated.
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
   * Text to be shown as reason of the skip.
   *
   * @post post
   * @var string
   */
  public $text_reason = '';
}

?>