<?php

namespace WellnessLiving\Wl\Discount\Code;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Discount codes API point.
 *
 * @method WlModelRequest get() Returns discount codes of the specified business.  Used in the backend discount management UI to show the full list of discount codes for a business so the staff member can select one to view or edit.
 */
class DiscountCodeModel extends WlModelAbstract
{
  /**
   * Discount codes list.
   *
   * Each element has next structure:
   *
   * <dl>
   *   <dt>string `k_discount_code`</dt>
   *   <dd>Discount code key. </dd>
   * 
   *   <dt>string `text_discount_code`</dt>
   *   <dd>Discount code title.</dd>
   * </dl>
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