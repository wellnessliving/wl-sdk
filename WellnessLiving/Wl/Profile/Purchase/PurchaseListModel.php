<?php

namespace WellnessLiving\Wl\Profile\Purchase;

use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of purchases to show in user profile.
 */
class PurchaseListModel extends WlModelAbstract
{
  /**
   * Criteria for list filtering:
   * <ul><li>Number [<tt>id_active</tt>] Active or inactive purchase items show. One of the {@link AFlagSid} constants.
   * </li>
   * <li>Number [<tt>id_sale</tt>] Type of good. One of the {@link RsSaleSid} constants.
   * </li>
   * <li>Number [<tt>id_sale_exclude</tt>] Type of good which must be excluded. One of the {@link RsSaleSid} constants.
   * </li>
   * <li>String [<tt>s_search</tt>] Title (or part of title) of purchase item.
   * </li></ul>
   * @var array
   */
  public $a_filter = [
    'id_active' => AFlagSid::ON
  ];

  /**
   * Purchase items to show. Every element - sub array:
   * <ul><li>bool[] <tt>a_active</tt> For packages may contain a lot of values; for other purchase items - only 1 value.
   * Sense of values: <tt>true</tt> - is active; <tt>false</tt> - is inactive.</li>
   * <li>bool[] <tt>a_sale</tt> For packages may contain a lot of values; for other purchase items - only 1 value.
   * Sense of values: IDs of purchase item type in store (constants of {@link RsSaleSid}).</li>
   * <li>String <tt>dt_add</tt> Date of purchase adding.</li>
   * <li>String <tt>k_code</tt> ID of redemption code which was used to obtain some goods.
   * Not empty only if <tt>k_login_promotion</tt> and <tt>k_purchase</tt> is empty.</li>
   * <li>String [<tt>k_enrollment_book</tt>] ID of whole event book.
   * Presents only for purchases of whole events which are components of package.</li>
   * <li>String [<tt>k_login_product</tt>] ID of purchased product.
   * Presents only for purchases of products which are components of package.</li>
   * <li>String <tt>k_login_promotion</tt> ID of user's promotion without purchase.
   * Not empty only if <tt>k_code</tt> and <tt>k_purchase</tt> is empty.</li>
   * <li>String <tt>k_purchase</tt> ID of ordinary purchase.
   * Not empty only if <tt>k_code</tt> is empty.</li>
   * <li>String <tt>k_purchase_item</tt> ID of ordinary purchase item.
   * Not empty only if <tt>k_code</tt> is empty.</li>
   * <li>String [<tt>k_session_pass</tt>] ID of makeup to attend event.
   * Presents for repeat purchase of event.</li>
   * <li>String <tt>s_title</tt> ID of makeup to attend event.
   * Title of purchase item.</li></ul>
   *
   * Order of items in this array is the order in which elements should be shown.
   *
   * @get result
   * @var array
   */
  public $a_purchase = [];

  /**
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * ID of a user to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>