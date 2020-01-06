<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogList;

use WellnessLiving\WlModelAbstract;

/**
 * List of products in selected shop category for staff application.
 */
class CatalogListModel extends WlModelAbstract
{
  /**
   * Products in the online store category.
   *
   * Every element has the next fields:
   * <dl>
   *   <dt>array <tt>a_shop_category</tt></dt>
   *   <dd>List of online store category IDs.</dd>
   *   <dt>int <var>[id_program]</var></dt>
   *   <dd>
   *      Program ID. Set for promotions.
   *      <p>If id_program = {@link \WellnessLiving\WlProgramSid::INSURANCE_MEMBERSHIP} then, use:</p>
   *      <ul>
   *        <li>{@link \WellnessLiving\Wl\Insurance\Catalog\ProgramModel} to obtain list of active programs.</li>
   *        <li>{@link \WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel} to get and validate fields for a given program.</li>
   *        <li>{@link \WellnessLiving\Wl\Catalog\Payment\PaymentModel} for program purchase.</li>
   *      </ul>
   *   </dd>
   *   <dt>string <tt>text_title</tt></dt>
   *   <dd>Category title.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_shop_product = [];

  /**
   * Whether staff has access to the Client Add page or not.
   *
   * @get result
   * @type {Boolean}
   */
  public $can_add = false;

  /**
   * Whether currently selected user is a new client and has access to introductory offers.
   *
   * @var bool
   */
  public $is_customer_new = false;

  /**
   * ID of the business to get categories for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Location ID.
   * Can affect the list of displayed products.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Client's login type.
   *
   * <tt>null</tt> means not set, or user is guest ('walk-in' option).
   *
   * @var string|null
   */
  public $k_login_type = null;

  /**
   * Visit ID to pay for.
   *
   * @get get
   * @var string
   */
  public $k_visit = '';
}

?>