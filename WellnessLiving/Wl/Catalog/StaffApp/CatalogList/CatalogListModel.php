<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogList;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of all products available for a business’s shop at a particular location.
 */
class CatalogListModel extends WlModelAbstract
{
  /**
   * Products in the online store category.
   *
   * Every element has the following next fields:
   * <dl>
   *   <dt>array <tt>a_shop_category</tt></dt>
   *   <dd>A list of online store category IDs.</dd>
   *   <dt>int <var>[id_program]</var></dt>
   *   <dd>
   *      The program ID set for promotions.
   *      <p>If id_program = {@link \WellnessLiving\WlProgramSid::INSURANCE_MEMBERSHIP}, then use:</p>
   *      <ul>
   *        <li>{@link \WellnessLiving\Wl\Insurance\Catalog\ProgramListModel} to obtain a list of active programs.</li>
   *        <li>{@link \WellnessLiving\Wl\Insurance\Enrollment\Field\EnrollmentFieldListModel} to get and validate fields for a given program.</li>
   *        <li>{@link \WellnessLiving\Wl\Catalog\Payment\PaymentModel} for a program purchase.</li>
   *      </ul>
   *   </dd>
   *   <dt>string <tt>text_title</tt></dt>
   *   <dd>The category title.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_shop_product = [];

  /**
   * If `true` then the current user is able to add the purchased item to the account.
   *
   * @get result
   * @type {Boolean}
   */
  public $can_add = false;

  /**
   * If `true` then currently selected user is a new client and has access to introductory offers.
   *
   * @var bool
   */
  public $is_customer_new = false;

  /**
   * The ID of the business to get categories for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The location ID.
   * This can affect the list of displayed products.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The client's login type.
   *
   * <tt>null</tt> means this isn't yet set or the user is guest (such as a "walk-in" client).
   *
   * @var string|null
   */
  public $k_login_type = null;

  /**
   * The visit ID to pay for.
   *
   * @get get
   * @var string
   */
  public $k_visit = '';
}

?>