<?php

namespace WellnessLiving\Wl\Profile\PurchaseList;

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
   * User's purchases:
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
   *     Date of purchase adding.
   *   </dd>
   *   <dt>
   *     int <var>id_purchase_item</var>
   *   </dt>
   *   <dd>
   *     ID of purchase type. One of constants {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_sale</var>
   *   </dt>
   *   <dd>
   *     ID of sale category in store. One of constants {@link \WellnessLiving\WlSaleSid}.
   *   </dd>
   *   <dt>
   *     bool <var>is_active</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> - purchase item is active; <tt>false</tt> - purchase item is not active.
   *   </dd>
   *   <dt>
   *     bool [<var>is_component</var>]
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if purchase item is a package component; <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     string <var>k_code</var>
   *   </dt>
   *   <dd>
   *     ID of redemption code which was used to obtain some goods. Not empty only if <var>k_purchase</var> and <var>k_purchase_item</var> is empty.
   *   </dd>
   *   <dt>
   *     string [<var>k_enrollment_book</var>]
   *   </dt>
   *   <dd>
   *     ID of whole event book. Is returner only for purchases of whole events which are components of package.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     ID of purchase type. Primary key in different tables.
   *   </dd>
   *   <dt>
   *     string [<var>k_login_product</var>]
   *   </dt>
   *   <dd>
   *     ID of purchased product. Is returned only for purchases of products which are components of package. Primary key in {@link \RsLoginProductSql} table.
   *   </dd>
   *   <dt>
   *     string <var>k_login_promotion</var>
   *   </dt>
   *   <dd>
   *     ID of user's promotion.
   *   </dd>
   *   <dt>
   *     string <var>k_purchase</var>
   *   </dt>
   *   <dd>
   *     ID of ordinary purchase. Not empty only if <var>k_code</var> is empty.
   *   </dd>
   *   <dt>
   *     string <var>k_purchase_item</var>
   *   </dt>
   *   <dd>
   *     ID of ordinary purchase item. Not empty only if <var>k_code</var> is empty.
   *   </dd>
   *   <dt>
   *     string [<var>k_session_pass</var>]
   *   </dt>
   *   <dd>
   *     ID of makeup to attend event. Is returned for repeat purchase of event.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     Title of purchase item.
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