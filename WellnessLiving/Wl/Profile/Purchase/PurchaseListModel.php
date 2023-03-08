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
   * <dl>
   *   <dt>int [<var>id_active</var>]</dt>
   *   <dd>Determines whether to display active or inactive purchases.
   *     One of the {@link \WellnessLiving\Core\a\AFlagSid} constants.</dd>
   *   <dt>int [<var>id_sale</var>]</dt>
   *   <dd>The type of product to search for. One of the {@link WlSaleSid} constants.</dd>
   *   <dt>int [<var>id_sale_exclude</var>]</dt>
   *   <dd>The type of product to be excluded from the search.
   *     One of the {@link WlSaleSid} constants.</dd>
   *   <dt>int [<var>s_search</var>]</dt>
   *   <dd>The name or a part of the name to search for.</dd>
   * </dl>
   *
   * @var array
   */
  public $a_filter = [
    'id_active' => AFlagSid::ON
  ];

  /**
   * A list of purchased items. Every element contains a sub-array with the following fields:
   * <dl>
   *   <dt>bool[] <var>a_active</var></dt>
   *   <dd>Most purchases will have one value. However, packages may contain a large number
   *     of values. If `true`, then the purchase is active. If `false`, then the purchase is inactive.</dd>
   *   <dt>bool[] <var>a_sale</var></dt>
   *   <dd>Most purchases will have one value. However, packages may contain a large number of
   *     values. The array values are the IDs of the purchase item types, which are {@link WlSaleSid} constants.</dd>
   *   <dt>string <var>dt_add</var></dt>
   *   <dd>The date that the purchase was added.</dd>
   *   <dt>string <var>k_code</var></dt>
   *   <dd>The redemption code ID that was used to make a purchase. This value is used only if
   *     <var>k_login_promotion</var> and <var>k_purchase</var> are empty.</dd>
   *   <dt>string [<var>k_enrollment_book</var>]</dt>
   *   <dd>The key of an event that requires clients to book every session at once.
   *     This is only used if the event is a part of a package.</dd>
   *   <dt>string [<var>k_login_product</var>]</dt>
   *   <dd>The key of the purchased product.
   *     This is only used if the event is a part of a package.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>The key of the user's existing Purchase Options.
   *     This value is used only if <var>k_code</var> and <var>k_purchase</var> are empty.</dd>
   *   <dt>string <var>k_purchase</var></dt>
   *   <dd>.The key of a purchase where no special case rules are in effect.
   *     Only used if <var>k_code</var> is empty.</dd>
   *   <dt>string <var>k_purchase_item</var></dt>
   *   <dd>The ID of a purchase item where no special case rules are in effect.
   *     Only used if <var>k_code</var> is empty.</dd>
   *   <dt>string [<var>k_session_pass</var>]</dt>
   *   <dd>In certain cases a session can be cancelled and make-up sessions can be
   *     granted to a client in lieu of other compensation. This is the ID of one of make-up sessions used to attend an
   *     event. This is also present for a repeat purchase of an event.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The name of the purchase item.</dd>
   * </dl>
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