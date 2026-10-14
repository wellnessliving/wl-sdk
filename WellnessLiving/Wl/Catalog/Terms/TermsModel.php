<?php

namespace WellnessLiving\Wl\Catalog\Terms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\RsPlaceSid;

/**
 * Applies the client's decision about terms and conditions to cart items.
 *
 * Unlike a contract, there is nothing to sign, and this does not go through
 * {@link \RsPurchaseItemAbstract::agree()} - agreeing or skipping only sets the cart item's own
 * `is_terms_agree` or `is_terms_
 *
 * @method WlModelRequest post() Performs {@link \Wl\Catalog\Terms\TermsApi::$id_terms_action} for every item of {@link \Wl\Catalog\Terms\TermsApi::$a_item}.
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
 * Data for Quick Buy.
 *
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