<?php

namespace WellnessLiving\Wl\Catalog\Terms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Catalog\QuickPurchaseTypeSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\RsPlaceSid;

/**
 * Applies the client's decision about terms and conditions to cart items.
 *
 * Unlike a contract, there is nothing to sign, and this does not go through
 * {@link \RsPurchaseItemAbstract::agree()} - agreeing or skipping only sets the cart item's own
 * `id_terms_
 *
 * @method WlModelRequest post() Performs {@link \Wl\Catalog\Terms\TermsApi::$id_terms_action} for every item of {@link \Wl\Catalog\Terms\TermsApi::$a_item}.  Agreeing or skipping marks the cart items as resolved, so the client can proceed to checkout. Declining removes the items from the cart, and {@link \Wl\Catalog\Terms\TermsApi::$url_list} is returned if the cart became empty. Skipping is available only in the point of sale.
 */
class TermsModel extends WlModelAbstract
{
  /**
 * Cart items to apply the action to. Every element has next fields:
 *
 * <dl>
 *   <dt>int `id_purchase_item`</dt>
 *   <dd>Purchase item ID, one of {@link WlPurchaseItemSid} constants.</dd>
 * 
 *   <dt>string `k_id`</dt>
 *   <dd>Product ID.</dd>
 * 
 *   <dt>string `s_item_key`</dt>
 *   <dd>Cart item key.</dd>
 * </dl>
 * @post post
 * @var array[]
 */
  public $a_item = [];

  /**
 * Data for Quick Buy. Empty if the purchase is not in Quick Buy mode. Structure of the array:
 *
 * <dl>
 *   <dt>int `id_table`</dt>
 *   <dd>Quick purchase type. One of {@link QuickPurchaseTypeSid}.</dd>
 * 
 *   <dt>bool `is_quick_buy`</dt>
 *   <dd>Whether Quick Buy mode is used.</dd>
 * 
 *   <dt>string `k_appointment`</dt>
 *   <dd>Appointment key to pay for.</dd>
 * 
 *   <dt>string `k_id`</dt>
 *   <dd>Key of the item within the `id_table` table that Quick Buy is performed for.</dd>
 * 
 *   <dt>string `k_visit`</dt>
 *   <dd>Visit key to pay for.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User that Quick Buy is performed for.</dd>
 * </dl>
 * @post post
 * @var array
 */
  public $a_quick_config = [];

  /**
 * From where request comes. One of {@link RsPlaceSid}.
 *
 * @post get
 * @var int
 */
  public $id_place = 1;

  /**
 * Action to perform. One of {@link TermsActionSid}.
 *
 * @post post
 * @var int
 */
  public $id_terms_action = 0;

  /**
 * Business the cart belongs to.
 *
 * @post post
 * @var string
 */
  public $k_business = '0';

  /**
 * Link to the catalog list. Set only if the cart became empty after
 * {@link TermsActionSid::DECLINE}, an empty string otherwise.
 *
 * @post result
 * @var string
 */
  public $url_list = '';
}

?>