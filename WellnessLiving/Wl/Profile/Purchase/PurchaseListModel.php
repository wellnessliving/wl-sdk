<?php

namespace WellnessLiving\Wl\Profile\Purchase;

use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlSaleSid;

/**
 * An endpoint that gets a list of purchases for a user.
 *
 * This endpoint is still available but has been superseded by {@link \WellnessLiving\Wl\Profile\PurchaseList\PurchaseListModel}.
 */
class PurchaseListModel extends WlModelAbstract
{
  /**
   * An array of parameters with which you can filter results. The following parameters are available:
   * <ul><li>int [`id_active`] Determines whether to display active or inactive purchases.
   * One of the {@link \WellnessLiving\Core\a\AFlagSid} constants.
   * </li>
   * <li>int [`id_sale`] The type of product to search for. One of the {@link WlSaleSid} constants.
   * </li>
   * <li>int [`id_sale_exclude`] The type of product to be excluded from the search.
   * One of the {@link WlSaleSid} constants.
   * </li>
   * <li>string [`s_search`] The name or a part of the name to search for.
   * </li></ul>
   * @var array
   */
  public $a_filter = [
    'id_active' => AFlagSid::ON
  ];

  /**
   * A list of purchased items. Every element contains a sub-array with the following fields:
   * <ul><li>bool[] `a_active` Most purchases will have one value. However, packages may contain a large number
   * of values. If `true`, then the purchase is active. If `false`, then the purchase is inactive.</li>
   * <li>bool[] `a_sale` Most purchases will have one value. However, packages may contain a large number of
   * values. The array values are the IDs of the purchase item types, which are {@link WlSaleSid} constants.</li>
   * <li>string `dt_add` The date that the purchase was added.</li>
   * <li>string `k_code` The redemption code ID that was used to make a purchase. This value is used only if
   * <var>k_login_promotion</var> and <var>k_purchase</var> are empty.</li>
   * <li>string [`k_enrollment_book`] The key of an event that requires clients to book every session at once.
   * This is only used if the event is a part of a package.</li>
   * <li>string [`k_login_product`] The key of the purchased product.
   * This is only used if the event is a part of a package.</li>
   * <li>string `k_login_promotion` The key of the user's existing Purchase Options.
   * This value is used only if <var>k_code</var> and <var>k_purchase</var> are empty.</li>
   * <li>string `k_purchase` The key of a purchase where no special case rules are in effect.
   * Only used if <var>k_code</var> is empty.</li>
   * <li>string `k_purchase_item` The ID of a purchase item where no special case rules are in effect.
   * Only used if <var>k_code</var> is empty.</li>
   * <li>string [`k_session_pass`] In certain cases a session can be cancelled and make-up sessions can be
   * granted to a client in lieu of other compensation. This is the ID of one of make-up sessions used to attend an
   * event. This is also present for a repeat purchase of an event.</li>
   * <li>string `s_title` The name of the purchase item.</li></ul>
   *
   * The order of items in this array is the order in which elements should be displayed.
   *
   * @get result
   * @var array
   */
  public $a_purchase = [];

  /**
   * The business ID number used internally by WellnessLiving.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The key of the user to show information for.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>