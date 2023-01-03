<?php

namespace WellnessLiving\Wl\Profile\Purchase;

use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;

/**
 * Gets a list of purchases for a user.
 *
 * This endpoint is still available but has been superseded by Profile\PurchaseList\PurchaseListModel.
 */
class PurchaseListModel extends WlModelAbstract
{
  /**
   * An array of parameters with which you can filter results. The following parameters are available:
   * <ul><li>int [<tt>id_active</tt>] Whether to display active or inactive purchases.
   * One of the {@link AFlagSid} constants.
   * </li>
   * <li>int [<tt>id_sale</tt>] The type of product to search for. One of the {@link RsSaleSid} constants.
   * </li>
   * <li>int [<tt>id_sale_exclude</tt>] TThe type of product to be excluded from the search.
   * One of the {@link RsSaleSid} constants.
   * </li>
   * <li>string [<tt>s_search</tt>] The name or a part of the name to search for.
   * </li></ul>
   * @var array
   */
  public $a_filter = [
    'id_active' => AFlagSid::ON
  ];

  /**
   * A list of purchased items. Every element contains a sub array with the following fields:
   * <ul><li>bool[] <tt>a_active</tt> Most purchases will have one value, however, packages may contain a large number
   * of values. If `true` the purchase is active. If `false` then the purchase is inactive.</li>
   * <li>bool[] <tt>a_sale</tt> Most purchases will have one value, however, packages may contain a large number of
   * values. The array values are the IDs of the purchase item types, which are {@link RsSaleSid} constants.</li>
   * <li>string <tt>dt_add</tt> The date that the purchase was added.</li>
   * <li>string <tt>k_code</tt> The redemption code ID that was used to make a purchase. This value is used only if
   * <var>k_login_promotion</var> and <var>k_purchase</var> are empty.</li>
   * <li>string [<tt>k_enrollment_book</tt>] The key of an event that requires clients to book every session at once.
   * This is only used if the event is a part of a package.</li>
   * <li>string [<tt>k_login_product</tt>] The key of the purchased product.
   * This is only used if the event is a part of a package.</li>
   * <li>string <tt>k_login_promotion</tt> The key of the user's existing purchase options.
   * This value is used only if <var>k_code</var> and <var>k_purchase</var> are empty.</li>
   * <li>string <tt>k_purchase</tt> The key of a purchase where no special case rules are in effect.
   * Only used if <var>k_code</var> is empty.</li>
   * <li>string <tt>k_purchase_item</tt> The ID of a purchase item where no special case rules are in effect.
   * Only used if <var>k_code</var> is empty.</li>
   * <li>string [<tt>k_session_pass</tt>] In certain cases a session can be cancelled and ‘makeup’ sessions can be
   * granted to a client in lieu of other compensation. This is the ID of one of makeup sessions used to attend an
   * event. This is also present for repeat purchase of event.</li>
   * <li>string <tt>s_title</tt> The name of the purchase item.</li></ul>
   *
   * Order of items in this array is the order in which elements should be shown.
   *
   * @get result
   * @var array
   */
  public $a_purchase = [];

  /**
   * The business ID number used internally by WellnessLiving.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The key of the user to show information for.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>