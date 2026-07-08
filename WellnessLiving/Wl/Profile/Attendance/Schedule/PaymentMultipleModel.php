<?php

namespace WellnessLiving\Wl\Profile\Attendance\Schedule;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid;

/**
 * Manages multiple payments for unpaid appointments on the same calendar date, or for a specific
 *  list of appointments.
 *
 * @method WlModelRequest get() Loads unpaid appointments data for the multiple payment panel.  Loads unpaid appointments together with their addons, applicable purchase options, and  purchase options already owned by the client. Appointments are loaded either for a client  and their relatives on a specific day, or for an explicit list of appointments specified in  {@link \Wl\Profile\Attendance\Schedule\PaymentMultipleApi::$a_appointment}.
 * @method WlModelRequest post() Applies existing purchase options for appointments pay and generates a link for payment in the store.  Applies purchase options and session passes already owned by the client to the selected  visits. Redirects to the store cart or checkout page so the client can complete payment for  any remaining unpaid addons or newly purchased purchase options.
 */
class PaymentMultipleModel extends WlModelAbstract
{
  /**
   * List of appointment keys for which to load unpaid data.
   *
   * When specified, appointments are looked up directly by these keys, instead of by all unpaid
   *  appointments booked for {@link PaymentMultipleModel::$uid} on the day specified in
   *  {@link PaymentMultipleModel::$dtl_date}.
   *
   * @get get
   * @var string[]
   */
  public $a_appointment = [];

  /**
   * Clients' data.
   * Clients with unpaid appointments data, each element has next structure:
   *
   * <dl>
   *   <dt>array|null `a_relation`</dt>
   *   <dd>
   *     Information about relation. `null` if there is no relation, in particular when appointments
   *  are loaded by {@link PaymentMultipleModel::$a_appointment}.
   *     <dl>
   *       <dt>int `id_family_relation`</dt>
   *       <dd>Family relation ID. One of {@link WlFamilyRelationSid} constants.</dd>
   * 
   *       <dt>string `uid_payer`</dt>
   *       <dd>Payer UID.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_service`</dt>
   *   <dd>
   *     Unpaid appointments data. 
   *     <dl>
   *       <dt>array `a_addon`</dt>
   *       <dd>
   *         List of add-ons:
   *         <dl>
   *           <dt>int `i_count`</dt>
   *           <dd>Number of the product.</dd>
   * 
   *           <dt>bool `is_paid`</dt>
   *           <dd>`true` if the product is paid, otherwise `false`.</dd>
   * 
   *           <dt>string `html_price`</dt>
   *           <dd>Formatted product price</dd>
   * 
   *           <dt>string `m_price`</dt>
   *           <dd>Product price.</dd>
   * 
   *           <dt>string `text_title`</dt>
   *           <dd>Product title.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array `a_promotion_applicable`</dt>
   *       <dd>
   *         Promotions that can be used to pay for appointment:
   *         <dl>
   *           <dt>string `m_price`</dt>
   *           <dd>Promotion price.</dd>
   * 
   *           <dt>int `i_order`</dt>
   *           <dd>Sort order.</dd>
   * 
   *           <dt>string `text_key`</dt>
   *           <dd>Promotion key.</dd>
   * 
   *           <dt>string `text_price`</dt>
   *           <dd>Promotion price.</dd>
   * 
   *           <dt>string `text_title`</dt>
   *           <dd>Promotion title.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>array `a_promotion_owned`</dt>
   *       <dd>
   *         Promotions owned by the client, which can be used to pay for appointment:
   *         <dl>
   *           <dt>int `i_limit`</dt>
   *           <dd>Limit of visits.</dd>
   * 
   *           <dt>int `i_order`</dt>
   *           <dd>Sort order.</dd>
   * 
   *           <dt>int `i_remain`</dt>
   *           <dd>The number of the remaining visits.</dd>
   * 
   *           <dt>string `text_key`</dt>
   *           <dd>Promotion key.</dd>
   * 
   *           <dt>string `text_price`</dt>
   *           <dd>Promotion price.</dd>
   * 
   *           <dt>string `text_title`</dt>
   *           <dd>Promotion title.</dd>
   * 
   *           <dt>string `text_title_remain`</dt>
   *           <dd>Promotion title with number of remaining sessions.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>bool `has_unpaid_addon`</dt>
   *       <dd>`true` if appointment has unpaid add-ons, otherwise `false`.</dd>
   * 
   *       <dt>bool `is_pay_need`</dt>
   *       <dd>`true` if the appointment is not free and not paid, otherwise `false`.</dd>
   * 
   *       <dt>bool `is_required`</dt>
   *       <dd>`true` if the payment is required, otherwise `false`.</dd>
   * 
   *       <dt>string `k_appointment`</dt>
   *       <dd>Appointment key. </dd>
   * 
   *       <dt>string `text_date`</dt>
   *       <dd>Appointment date.</dd>
   * 
   *       <dt>string `text_service`</dt>
   *       <dd>Appointment title.</dd>
   * 
   *       <dt>string|null `text_staff`</dt>
   *       <dd>Name of the staff leading the appointment. `null` for asset.</dd>
   * 
   *       <dt>string `text_time`</dt>
   *       <dd>Appointment time.</dd>
   * 
   *       <dt>string `text_timezone_abbr`</dt>
   *       <dd>Appointment timezone abbreviation.</dd>
   * 
   *       <dt>string `uid_staff`</dt>
   *       <dd>Appointment user key. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The user for whom the appointment is booked. </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_client = [];

  /**
   * List of available staff members for tips.
   *
   * <dl>
   *   <dt>string `k_staff`</dt>
   *   <dd>Staff key. </dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Name of the staff.</dd>
   * </dl>
   * 
   * <dl>
   *   <dt>string `text_name`</dt>
   *   <dd>Staff full name.</dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>Staff user key. </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_staff_list = [];

  /**
   * Visits payment data.
   *
   * Visits payment data to apply: 
   *
   * <dl>
   *   <dt>string[] `a_shop_product_option`</dt>
   *   <dd>Selected for payment products options keys. </dd>
   * 
   *   <dt>string `k_visit`</dt>
   *   <dd>The visit key. </dd>
   * 
   *   <dt>string `text_key`</dt>
   *   <dd>Selected pay option to apply.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The user key. </dd>
   * </dl>
   * @post get
   * @var array[]
   */
  public $a_visit_pay = [];

  /**
   * Local date and time for which visit is booked in MySQL format.
   *
   * @get get
   * @var string
   */
  public $dtl_date = '';

  /**
   * Total number of unpaid appointments.
   *
   * @get result
   * @var int
   */
  public $i_unpaid_number = 0;

  /**
   * Determines for which store page the redirection url should be generated.
   * `true` if to the checkout page.
   * `false` if to the cart page.
   *
   * @post get
   * @var bool
   */
  public $is_checkout = false;

  /**
   * When set to `true` it's mean that need load full information about unpaid visits:
   *  * List of available/existing POs.
   *  * List of unpaid addons.
   *  When set to `false` loaded only general information about visits on passed day.
   *
   * @get get
   * @var bool
   */
  public $is_simple = false;

  /**
   * Whether tips are accepted.
   *
   * @get result
   * @var bool
   */
  public $is_tip = false;

  /**
   * The business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * Last booked visit key.
   *
   * @get get
   * @var string
   */
  public $k_visit = '';

  /**
   * The user's key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';

  /**
   * Url for redirect after applying existing purchase options.
   *
   * @post result
   * @var string
   */
  public $url_redirect = '';
}

?>