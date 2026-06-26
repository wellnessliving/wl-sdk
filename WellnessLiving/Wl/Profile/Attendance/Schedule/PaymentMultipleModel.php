<?php

namespace WellnessLiving\Wl\Profile\Attendance\Schedule;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Visit\Pay\PayChangeModel;

/**
 * Manages multiple payments for unpaid appointments on the same calendar date.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post() Applies existing purchase options for appointments pay and generates a link for payment in the store.
 */
class PaymentMultipleModel extends WlModelAbstract
{
  /**
   * Clients' data.
   * Clients with unpaid appointments data, each element has next structure:
   *
   * <dl>
   *   <dt>array `a_relation`</dt>
   *   <dd>
   *     Information about relation.
   *     <dl>
   *       <dt>int `id_family_relation`</dt>
   *       <dd>Family relation ID.</dd>
   * 
   *       <dt>string `uid_payer`</dt>
   *       <dd>Payer UID.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_service`</dt>
   *   <dd>
   *     Unpaid appointments data.
   *   </dd>
   * 
   *   <dt>string `uid`</dt>
   *
   * </dl>
   * @get result
   * @var array
   */
  public $a_client = [];

  /**
   * List of available staff members for tips.
   *
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
   *
   * 
   *   <dt>string `k_visit`</dt>
   *
   * 
   *   <dt>string `text_key`</dt>
   *   <dd>Selected pay option to apply. The key has structure {@link PayChangeModel::$text_key}.</dd>
   * 
   *   <dt>string `uid`</dt>
   *
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
   * `false` if to the card page.
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