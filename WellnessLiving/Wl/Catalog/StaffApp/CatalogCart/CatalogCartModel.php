<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogCart;

use WellnessLiving\WlModelAbstract;

/**
 * Calculates price data for a sale item.
 *
 * Note that the terms "promotion" and "Purchase Option" refer to the same thing.
 */
class CatalogCartModel extends WlModelAbstract
{
  /**
   * A list of available discount codes with the next structure:
   *
   * @get result
   * @var array
   */
  public $a_discount_code = [];

  /**
   * The list of cart items with the next structure:
   *
   * @get get
   * @var array[]
   */
  public $a_item = [];

  /**
   * The discount as a percentage.
   *
   * @get get
   * @var float
   */
  public $f_discount_percent = 0;

  /**
   * If `true`, every item is checked at the cart. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_check_cart_item = false;

  /**
   * Determines whether the business applied a commission at checkout.
   *
   * @get result
   * @var bool
   */
  public $is_commission = false;

  /**
   * Determines, how staff sees discount codes in Store.
   * `true` as select field, `false` as input field.
   *
   * @get result
   * @var bool
   */
  public $is_discount_code_mode_select = false;

  /**
   * Determines whether to display custom receipt notes at checkout.
   *
   * @get result
   * @var bool
   */
  public $is_receipt_note = false;

  /**
   * The business key.
   *
   * This field isn't used directly, but described for correct JavaScript auto-generation.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The business location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * The discount amount in dollars, excluding tax.
   *
   * @get result
   * @var string
   */
  public $m_discount;

  /**
   * The manual discount amount in dollars, excluding tax.
   * Staff members can set this amount when making a sale.
   *
   * @get get
   * @var string
   */
  public $m_discount_flat = '';

  /**
   * The discount amount applied to the cart's total amount, including taxes.
   *
   * @get result
   * @var string
   */
  public $m_discount_total;

  /**
   * The subtotal amount.
   *
   * @get result
   * @var string
   */
  public $m_subtotal;

  /**
   * The amount of tax.
   *
   * @get result
   * @var string
   */
  public $m_tax;

  /**
   * The amount of tips.
   *
   * @get get
   * @var string
   */
  public $m_tip = '';

  /**
   * The amount of appointment tips.
   *
   * @get result
   * @var string
   */
  public $m_tip_purchase;

  /**
   * The cart's total amount.
   *
   * @get result
   * @var string
   */
  public $m_total;

  /**
   * The discount code.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $text_discount_code = null;

  /**
   * The discount code's error code.
   *
   * `null` if no error.
   *
   * @get result
   * @var string|null
   */
  public $text_error_code = null;

  /**
   * The discount code's error message.
   *
   * `null` if no error.
   *
   * @get result
   * @var string|null
   */
  public $text_error_message = null;

  /**
   * The custom receipt note's text.
   *
   * @get result
   * @var string
   */
  public $text_receipt_note = '';

  /**
   * The key of the current user.
   *
   * @get get
   * @var string
   */
  public $uid_current;

  /**
   * The key of the user who performed the purchase.
   *
   * @get get
   * @var string
   */
  public $uid_customer = '';
}

?>