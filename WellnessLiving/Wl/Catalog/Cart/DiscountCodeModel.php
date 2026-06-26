<?php

namespace WellnessLiving\Wl\Catalog\Cart;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Discount code check API.
 *
 * @method WlModelRequest get() Checks discount code and whether it can be applied to the elements of the purchase.
 */
class DiscountCodeModel extends WlModelAbstract
{
  /**
   *
   * <dl>
   *   <dt>string `f_amount`</dt>
   *   <dd>Fixed amount of discount. For 1 unit of purchase item.</dd>
   * 
   *   <dt>float `f_percent`</dt>
   *   <dd>Discount size in percents.</dd>
   * 
   *   <dt>int `i_limit`</dt>
   *   <dd>Maximum count of usage. Zero means unlimited usage.</dd>
   * 
   *   <dt>string `k_discount_code`</dt>
   *   <dd>Discount code key.</dd>
   * 
   *   <dt>string `s_discount_code`</dt>
   *   <dd>Discount code value.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_discount_code;

  /**
   * Information about elements of purchase.
   *
   * <dl>
   *   <dt>int `id_sale`</dt>
   *   <dd>Purchase ite sale category. Constant from {@link WlSaleSid}.</dd>
   * 
   *   <dt>string `k_id`</dt>
   *   <dd>Purchase item key.</dd>
   * </dl>
   * @get get
   * @var array[]
   */
  public $a_item = [];

  /**
   * Business in which the purchase is made.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Discount code value.
   *
   * @get get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * Error code. Empty string if no errors.
   *
   * @get result
   * @var string
   */
  public $text_error_code;

  /**
   * Customer UID.
   *
   * @get get
   * @var string
   */
  public $uid_customer = '0';
}

?>