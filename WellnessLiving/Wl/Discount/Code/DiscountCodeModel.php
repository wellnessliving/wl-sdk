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
   * Each element has next structure:
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>string `k_discount_code`</dt>
  <dd>Discount code key. 

  <dt>string `text_discount_code`</dt>
  <dd>Discount code title.</dd>
</dl>
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