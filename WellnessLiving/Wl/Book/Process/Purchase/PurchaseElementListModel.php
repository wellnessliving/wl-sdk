<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Displays a list of purchase items.
 */
class PurchaseElementListModel extends WlModelAbstract
{
  /**
   * A list of purchase items to get information for. Every element has the next keys:
   *
   * @get get
   * @var array[]
   */
  public $a_purchase_item_request = [];

  /**
   * Detailed information about the amounts for the purchase item list.
   * Every element has the next keys:
   *
   * @get result
   * @var array[]
   */
  public $a_purchase_item_result;

  /**
   * The key of the business in which the purchase is made.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The key of the location in which the purchase is made.
   * This is also the booking process location.
   *
   * This will be `null` if not set yet or if the location can't be defined for some reason.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The discount code.
   *
   * @get get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * The key of the user making the purchase.
   *
   * @get get
   * @var string
   */
  public $uid;
}

?>