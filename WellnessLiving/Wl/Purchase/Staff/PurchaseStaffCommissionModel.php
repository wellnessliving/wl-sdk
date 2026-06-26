<?php

namespace WellnessLiving\Wl\Purchase\Staff;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Report\WlReportSid;

/**
 * Information about staff commission for purchase item in the specified business.
 *
 * @method WlModelRequest get() Gets information about staff commission for the purchase item.
 * @method WlModelRequest post() Saves staff commission for the purchase items.
 */
class PurchaseStaffCommissionModel extends WlModelAbstract
{
  /**
   * Information about all staff commission in the business which can be applied for purchase. Every element has next keys:
   *
   * <dl>
   *   <dt>array `a_staff_pay`</dt>
   *   <dd>
   *     List of staff pay rates. Every element has next information:
   *     <dl>
   *       <dt>bool `is_select`</dt>
   *       <dd><tt>true</tt> if pay rate is applied for purchase; <tt>false</tt> otherwise.</dd>
   * 
   *       <dt>string `k_staff_pay`</dt>
   *
   * 
   *       <dt>string `text_pay_title`</dt>
   *       <dd>Pay rate title.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `is_select`</dt>
   *   <dd><tt>true</tt> if staff pay rate is applied for purchase; <tt>false</tt> otherwise.</dd>
   * 
   *   <dt>string `text_staff_family`</dt>
   *   <dd>Staff surname.</dd>
   * 
   *   <dt>string `text_staff_name`</dt>
   *   <dd>Staff name.</dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *
   * </dl>
   * @get result
   * @var array
   */
  public $a_available_staff = [];

  /**
   * Information about applied staff commission for purchase. Each element has next structure:
   *
   * <dl>
   *   <dt>string `k_staff_pay`</dt>
   *
   * 
   *   <dt>string `text_staff_family`</dt>
   *   <dd>Staff surname.</dd>
   * 
   *   <dt>string `text_staff_name`</dt>
   *   <dd>Staff name.</dd>
   * 
   *   <dt>string `text_pay_title`</dt>
   *   <dd>Pay rate title.</dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *
   * </dl>
   * @get result
   * @post post
   * @var array[]
   */
  public $a_commission_purchase = [];

  /**
   * Settings of applied commission for future auto-payments: 
   *
   * <dl>
   *   <dt>int|null `i_future_payments`</dt>
   *   <dd>Limit of future auto-payments to apply commission. `null`  if not limit.</dd>
   * 
   *   <dt>int|null `i_future_payments_left`</dt>
   *   <dd>Count of left of future auto-payments to apply commission. `null`  if not limit.</dd>
   * 
   *   <dt>bool `is_future_payments`</dt>
   *   <dd>`true` if commission is applied for future auto-payments, `false` otherwise.</dd>
   * </dl>
   * @get result
   * @post post
   * @var array
   */
  public $a_future_payments = [];

  /**
   * Information about past auto-payments for which the commission has been applied: 
   *
   * <dl>
   *   <dt>int `i_payment`</dt>
   *   <dd>Number of auto-payments.</dd>
   * 
   *   <dt>string `url_report`</dt>
   *   <dd>Url to the staff commission report. See {@link WlReportSid::STAFF_PAY_DETAIL}.Empty string if no payments.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_past_payments = [];

  /**
   * Whether current user can override commission or not.
   *
   * @get result
   * @var bool
   */
  public $can_override = false;

  /**
   * Whether the promotion, that was paid by this purchase, is renewable.
   * This determines if the commission can be applied to future auto-payments.
   *
   * @get result
   * @var bool
   */
  public $is_recurring = false;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Purchase key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_purchase = '';

  /**
   * Purchase item key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_purchase_item = '';
}

?>