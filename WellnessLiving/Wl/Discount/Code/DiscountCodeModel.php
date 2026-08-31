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
   * List of event keys to filter the discount codes by.
   *
   * A discount code is returned if it applies to any of the given events, to any of the memberships in
   * {@link DiscountCodeModel::$a_promotion_filter}, or to all purchase items.
   *
   * If both {@link DiscountCodeModel::$a_event_filter} and {@link DiscountCodeModel::$a_promotion_filter} are empty,
   * discount codes are not filtered by applicability.
   *
   * @get get
   * @var string[]
   */
  public $a_event_filter = [];

  /**
   * Discount codes list. Each element has the following structure: 
   *
   * <dl>
   *   <dt>bool `is_active`</dt>
   *   <dd>`true` if the discount code is active, `false` otherwise.</dd>
   * 
   *   <dt>bool `is_remove`</dt>
   *   <dd>`true` if the discount code is removed, `false` otherwise.</dd>
   * 
   *   <dt>string `k_discount_code`</dt>
   *   <dd>Discount code key. </dd>
   * 
   *   <dt>string `s_code`</dt>
   *   <dd>Actual discount code string.</dd>
   * 
   *   <dt>string `text_discount_code`</dt>
   *   <dd>Discount code title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list;

  /**
   * List of membership and passes keys to filter the discount codes by.
   *
   * A discount code is returned if it applies to any of the given memberships, to any of the events in
   * {@link DiscountCodeModel::$a_event_filter}, or to all purchase items.
   *
   * If both {@link DiscountCodeModel::$a_event_filter} and {@link DiscountCodeModel::$a_promotion_filter} are empty,
   * discount codes are not filtered by applicability.
   *
   * @get get
   * @var string[]
   */
  public $a_promotion_filter = [];

  /**
   * Business key of the discount codes.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>