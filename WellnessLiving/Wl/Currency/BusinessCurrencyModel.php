<?php

namespace WellnessLiving\Wl\Currency;

use WellnessLiving\Core\Locale\CurrencySid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves currencies of all franchisees' businesses in case of franchise or currency of a business.
 *
 * @method WlModelRequest get() Retrieves information about currencies.
 */
class BusinessCurrencyModel extends WlModelAbstract
{
  /**
   * List of franchisees' currencies.
   *
   * @get result
   * @var int[]
   * @see CurrencySid
   */
  public $a_list = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>