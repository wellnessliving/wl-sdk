<?php

namespace WellnessLiving\Wl\Book\Process\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Information about purchase options which allow to book specified session(s).
 */
class PurchaseModel extends WlModelAbstract
{
  /**
   * List of purchase options which are available for session(s) which is(are) being booked.
   * Keys - unique string IDs. Values - arrays with next keys:
   *   <ul><li>{}[] [<tt>a_visit_limit</tt>] Actual only for promotions. List of limits on booking by promotion.
   *     Every element has next keys:
   *     <ul><li>String <tt>s_title</tt> Description of limit.</li></ul>
   *   </li><li>String <tt>f_price</tt> Price.</li>
   *   <li>String [<tt>f_price_early</tt>] Price which is actual for early bookings.</li>
   *   <li>Number [<tt>i_limit</tt>] Limit of sessions which may be booked by purchase options.</li>
   *   <li>Number [<tt>i_payment_period</tt>] Actual only for promotions with program 'membership'.
   *     Duration of regular payment interval.
   *   </li>
   *   <li>Number [<tt>i_session</tt>] Number of sessions which is booked simultaneously.</li>
   *   <li>Number [<tt>id_program_category</tt>] Actual only for promotions. ID of promotion program category.
   *     One of {@link RsProgramCategorySid} constants.
   *   </li>
   *   <li>Number [<tt>id_program_type</tt>] Actual only for promotions. ID of promotion program type.
   *     One of {@link WlProgramTypeSid} constants.
   *   </li>
   *   <li>Number <tt>id_purchase_item</tt> ID of purchase option type. One of {@link RsPurchaseItemSid} constants.</li>
   *   <li>Boolean <tt>is_contract</tt> <tt>true</tt> - purchase option requires assignment of contract; <tt>false</tt> - does not require assignment.</li>
   *   <li>Boolean [<tt>is_convert</tt>] <tt>true</tt> - after expiration purchase option should be converted to certain anther instance; <tt>false</tt> - otherwise.</li>
   *   <li>Boolean [<tt>is_renew</tt>] <tt>true</tt> - purchase option is renewable; <tt>false</tt> - otherwise.</li>
   *   <li>Boolean [<tt>is_renew_check</tt>] <tt>true</tt> - purchase option is renewable and option "auto-renew" should be turned on by default; <tt>false</tt> - otherwise.</li>
   *   <li>String <tt>k_id</tt> ID of purchase option in database. Table depends on <tt>id_purchase_item</tt>.</li>
   *   <li>String [<tt>k_login_prize</tt>] ID of user's prize which can be used instead purchase option to book session.</li>
   *   <li>String [<tt>s_contract</tt>] Contract of purchase option. Is set only if <tt>is_contract</tt> is <tt>true</tt>.</li>
   *   <li>String <tt>s_description</tt> Description.</li>
   *   <li>String [<tt>s_payment_duration</tt>] Actual only for promotions with program 'membership'.
   *     Measurement unit of <tt>i_payment_period</tt>.
   *   </li>
   *   <li>String [<tt>s_promotion_convert</tt>] Actual only if <tt>is_convert</tt> is <tt>true</tt>.
   *     Title of promotion to which purchase option should be converted after expiration.</li>
   *   <li>String <tt>s_title</tt> Title.</li>
   *   <li>String <tt>s_value</tt> Unique identifier.</li></ul>
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_purchase = null;

  /**
   * List of session is being booked. Keys - IDs of sessions. Values - lists of date/time when sessions are occurred.
   *
   * @get get
   * @var array|null
   */
  public $a_session = null;

  /**
   * Date/time of the session that user is booking now.
   * In MySQL format. In GMT.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * ID of session which is booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * Business ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * ID of a user who is making the book.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>