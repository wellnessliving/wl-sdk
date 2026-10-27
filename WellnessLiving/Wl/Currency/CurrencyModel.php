<?php

namespace WellnessLiving\Wl\Currency;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about all currencies in the system.
 *
 * @method WlModelRequest get() Retrieves information about currencies.  Queries all active (non-removed) currencies from the database and returns them as an associative array  keyed by currency key, with each entry containing the currency sign, its display position, and the  international currency code.
 */
class CurrencyModel extends WlModelAbstract
{
  /**
   * Keys - currency keys. Values - information about currency:
   *
   * <dl>
   *   <dt>bool `is_before`</dt>
   *   <dd><tt>true</tt> - locate sign before amount; <tt>false</tt> - locate sign after amount.</dd>
   * 
   *   <dt>string `s_sign`</dt>
   *   <dd>Sign of currency.</dd>
   * 
   *   <dt>string `sid_currency`</dt>
   *   <dd>International code of the currency.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_currency;
}

?>