<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Catalog\Payment\PaymentModel;
use WellnessLiving\Wl\Insurance\Catalog\ProgramListModel;
use WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel;
use WellnessLiving\Wl\Shop\Product\PurchaseRestrictionSid;
use WellnessLiving\Wl\WlProgramSid;
use WellnessLiving\Wl\WlSaleSid;

/**
 * Returns a list of all products available from a business’s shop.
 * If a location is specified, only products available at that location are included.
 */
class CatalogListModel extends WlModelAbstract
{
  /**
   * Products in the online store category.
   *
   * Every element has the following fields:
   * <dl>
   *   <dt>
   *     array <var>a_location</var>
   *   </dt>
   *   <dd>
   *     The list of locations where the current sale item is available.
   *   </dd>
   *   <dt>
   *     string[] <var>a_login_type</var>
   *   </dt>
   *   <dd>
   *     The list of login types available to purchase the sale item.
   *     Empty list means that the sale item is available to all login types.
   *   </dd>
   *   <dt>
   *     string[] <var>a_member_group</var>
   *   </dt>
   *   <dd>
   *     The list of member groups available to purchase the sale item.
   *
   *     Empty list means that the sale item is available to all member groups.
   *   </dd>
   *   <dt>
   *     string[] <var>a_shop_category</var>
   *   </dt>
   *   <dd>
   *     A list of online store category keys.
   *   </dd>
   *   <dt>
   *     int <var>[id_program]</var>
   *   </dt>
   *   <dd>
   *      The program ID, set for promotions. One of the {@link WlProgramSid} constants.
   *      <p>If `id_program` is {@link WlProgramSid::INSURANCE_MEMBERSHIP}, then use:</p>
   *      <ul>
   *        <li>{@link ProgramListModel} to obtain a list of active programs.</li>
   *        <li>{@link EnrollmentFieldListModel} to get and validate fields for a given program.</li>
   *        <li>{@link PaymentModel} for a program purchase.</li>
   *      </ul>
   *   </dd>
   *   <dt>
   *     int <var>id_restriction</var>
   *   </dt>
   *   <dd>
   *     The restriction ID. One of the {@link PurchaseRestrictionSid} constants.
   *   </dd>
   *   <dt>
   *     int <var>id_sale</var>
   *   </dt>
   *   <dd>
   *     The sale category ID. One of the {@link WlSaleSid} constants.
   *   </dd>
   *   <dt>
   *     bool <var>is_online_sell</var>
   *   </dt>
   *   <dd>
   *     Determines whether the sale item can be purchased by the client.
   *   </dd>
   *   <dt>
   *     bool <var>is_visit</var>
   *   </dt>
   *   <dd>
   *     This will be <tt>true</tt> if this Purchase Option is suitable to pay for the visit {@link CatalogListModel::$k_visit}.
   *     Otherwise, this will be <tt>false</tt>.
   *     If {@link CatalogListModel::$k_visit} is empty, this will always be `false`.
   *   </dd>
   *   <dt>
   *     string <var>k_id</var>
   *   </dt>
   *   <dd>
   *     The sale item ID.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     The category title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_shop_product;

  /**
   * If `true`, the current user is able to add the purchased item to the account.
   *
   * @get result
   * @var bool
   */
  public $can_add;

  /**
   * The key of the business to get categories for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The location key.
   * This can affect the list of displayed products.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The visit key to pay for.
   *
   * @get get
   * @var string
   */
  public $k_visit = '0';
}

?>