<?php

namespace WellnessLiving\Wl\Purchase\Receipt;

use WellnessLiving\WlModelAbstract;

/**
 * Returns receipt data of certain purchase.
 */
class PurchaseReceiptModel extends WlModelAbstract
{
  /**
   * Information about the account balance for a user's account after payment for the purchase. Every element has the following keys:
   *
   * @get result
   * @var array
   */
  public $a_account_rest = [];

  /**
   * Information about the business.
   *
   * @get result
   * @var array
   */
  public $a_business = [];

  /**
   * Payment transaction information. Every element has the following keys:
   *
   * @get result
   * @var array
   */
  public $a_card = [];

  /**
   * Information about the customer.
   *
   * @get result
   * @var array
   */
  public $a_customer = [];

  /**
   * A list of payment methods for the current purchase. Every element has the following keys:
   *
   * @get result
   * @var array
   */
  public $a_pay_method = [];

  /**
   * Complete information about price information for the purchase.
   *
   * @get result
   * @var array
   */
  public $a_price = [];

  /**
   * A list of purchase items. Every element has the following keys:
   *
   * @get result
   * @var array[]
   */
  public $a_purchase_item = [];

  /**
   * The local date of the purchase in MySQL format.
   *
   * @get result
   * @var string
   */
  public $dtl_purchase;

  /**
   * Determines whether the payment contained a signature.
   *
   * @get result
   * @var bool
   */
  public $has_signature;

  /**
   * HTML representation of the purchase receipt.
   *
   * @get result
   * @var string
   */
  public $html_receipt;

  /**
   * Whether {@link PurchaseReceiptModel::$url_print} and {@link PurchaseReceiptModel::$url_print_receipt} require authentication.
   *
   * If `true`, the URL contains a token that allows temporary access to the page without logging in. If 'false', the
   * page requires authentication.
   *
   * @get get
   * @var bool
   */
  public $is_url_public = false;

  /**
   * The key of the purchase.
   *
   * @get get
   * @var string|null
   */
  public $k_purchase = null;

  /**
   * The normalized purchase ID.
   *
   * @get result
   * @var string
   */
  public $text_purchase_id;

  /**
   * The receipt text set in the store settings.
   *
   * @get result
   * @var string
   */
  public $text_receipt;

  /**
   * The URL for printing on a normal printer.
   *
   * @get result
   * @var string
   */
  public $url_print;

  /**
   * The URL for printing on a receipt printer.
   *
   * @get result
   * @var string
   */
  public $url_print_receipt;
}

?>