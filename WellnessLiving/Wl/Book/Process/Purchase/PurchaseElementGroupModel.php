<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * API point to get information about a list of purchase options wile booking process.
 */
class PurchaseElementGroupModel extends WlModelAbstract
{
  /**
   * A list of purchase items. Each item is an associative array with the following keys:
   *
   * @get get
   * @var array[]
   */
  public $a_purchase_item = [];

  /**
   * A list of taxes for the given purchase options.
   * Keys - tax keys, values - tax amounts.
   *
   * @get result
   * @var string[]
   */
  public $a_tax;

  /**
   * Date/time of session is booking.
   *
   * `null` until initialized.
   *
   * @get get
   * @var string|null
   */
  public $dtu_date = null;

  /**
   * The key of the session to check for booking availability.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The key of the location in which the purchase is made.
   * This is also the booking process location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The total cost of the given purchase options.
   *
   * @get result
   * @var string
   */
  public $m_cost;

  /**
   * The amount of the whole discount for the given purchase options.
   *
   * @get result
   * @var string
   */
  public $m_discount;

  /**
   * The discount amount provided by a discount code for the given purchase options.
   *
   * @get result
   * @var string
   */
  public $m_discount_code;

  /**
   * The discount amount for the client type for the given purchase options.
   *
   * @get result
   * @var string
   */
  public $m_discount_login;

  /**
   * The price of the given purchase options (with or without taxes, depending on regional standards).
   *
   * @get result
   * @var string
   */
  public $m_price;

  /**
   * The amount of subtotal for the given purchase options.
   *
   * @get result
   * @var string
   */
  public $m_subtotal;

  /**
   * The amount of taxes for the given purchase options.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * The discount code.
   *
   * @get get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * The key of the current user.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>