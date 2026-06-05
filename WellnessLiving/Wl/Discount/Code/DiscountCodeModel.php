<?php

namespace WellnessLiving\Wl\Discount\Code;

use WellnessLiving\WlModelAbstract;

/**
 * Discount codes API point.
 */
class DiscountCodeModel extends WlModelAbstract
{
  /**
   * Discount codes list.
   *
   * Each element has next structure:<dl>
   * <dt>string <var>k_discount_code</var> </dt>
   * <dd>Discount code key. 
   * <dt>string <var>text_discount_code</var></dt>
   * <dd>Discount code title.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_list;

  /**
   * Business key of the discount codes.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>