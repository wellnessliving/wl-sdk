<?php

namespace WellnessLiving\Wl\Profile\PurchaseList;

use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;

/**
 * Gets a list of purchases for a user.
 */
class PurchaseListModel extends WlModelAbstract
{
  /**
   * A list of purchased items. Every element contains a sub array with the following fields:
   * <dl>
   *   <dt>
   *     bool[] <var>a_active</var>
   *   </dt>
   *   <dd>
   *     Value of <var>a_purchase['is_active']</var>. For packages also contains values of <var>a_purchase['is_active']</var> of every component.
   *   </dd>
   *   <dt>
   *     int[] <var>a_sale</var>
   *   </dt>
   *   <dd>
   *     Value of <var>a_purchase['id_sale']</var>. For packages also contains values of <var>a_purchase['id_sale']</var> of every component.
   *   </dd>
   *   <dt>
   *     string <var>dt_add</var>
   *   </dt>
   *   <dd>
   *     The date that the purchase was added.
   *   </dd>
   *   <dt>
   *     int <var>id_purchase_item</var>
   *   </dt>
   *   <dd>
   *     The ID of the purchase type. One of the constants {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_sale</var>
   *   </dt>
   *   <dd>
   *     The ID of the sale category in the store. One of the constants {@link \WellnessLiving\WlSaleSid}.
   *   </dd>
   *   <dt>
   *     bool <var>is_active</var>
   *   </dt>
   *   <dd>
   *     If `true` then the purchase item is active. If `false` then the purchase item is not active.
   *   </dd>
   *   <dt>
   *     bool [<var>is_component</var>]
   *   </dt>
   *   <dd>
   *     This will be `true` if the purchase item is a package component otherwise it will be `false`.
   *   </dd>
   *   <dt>
   *     string <var>k_code</var>
   *   </dt>
   *   <dd>
   *     The redemption code key that was used to make a purchase.
   *     This value is used only if <var>k_login_promotion</var> and <var>k_purchase</var> are empty.
   *   </dd>
   *   <dt>
   *     string [<var>k_enrollment_book</var>]
   *   </dt>
   *   <dd>
   *     The key of an event that requires clients to book every session at once.
   *     This is only used if the event is part of a package.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     The key of the purchase type referring to different types of keys depending on the value of <var>id_sale</var>.
   *   </dd>
   *   <dt>
   *     string [<var>k_login_product</var>]
   *   </dt>
   *   <dd>
   *     The key of the purchased product. Only used if the event is part of a package.
   *   </dd>
   *   <dt>
   *     string <var>k_login_promotion</var>
   *   </dt>
   *   <dd>
   *     The key of the user's existing purchase options. Only used if k_code and k_purchase are empty.
   *   </dd>
   *   <dt>
   *     string <var>k_purchase</var>
   *   </dt>
   *   <dd>
   *     The key of a purchase where no special case rules are in effect. Only used if k_code is empty.
   *   </dd>
   *   <dt>
   *     string <var>k_purchase_item</var>
   *   </dt>
   *   <dd>
   *     The key of a purchase item where no special case rules are in effect. Only used if <var>k_code</var> is empty.
   *   </dd>
   *   <dt>
   *     string [<var>k_session_pass</var>]
   *   </dt>
   *   <dd>
   *     In certain cases a session can be canceled and ‘makeup’ sessions can be granted to a client in lieu of
   *     other compensation. This is the key of one of the makeup sessions used to attend an event. This is also
   *     present for a repeat purchase of an event.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The name of the purchase item.
   *   </dd>
   *   <dt>
   *     string <var>uid</var>
   *   </dt>
   *   <dd>
   *     ID of purchase owner.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_purchase = [];

  /**
   * The key of a business to show information for.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The key of a user to show information for.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>