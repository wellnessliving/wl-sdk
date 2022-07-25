<?php

namespace WellnessLiving\Wl\Book\Process\Payment;

use WellnessLiving\Wl\Book\WlBookModeSid;
use WellnessLiving\Wl\Pay\Form\EnvironmentModel;
use WellnessLiving\WlModelAbstract;

/**
 * The booking wizard for the "Pay/Billing info" page.
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * A list of items to be bought. Every element has the next fields:
   * <ul>
   *   <li>Number <tt>id_purchase_item</tt> The ID of purchase item type. One of {@link WlPurchaseItemSid} constants.</li>
   *   <li>Boolean [<tt>is_renew</tt>] <tt>true</tt> - item should be set to "auto-renew"; <tt>false</tt> - otherwise. If is not set - use default option for this item.</li>
   *   <li>String <tt>k_id</tt> ID of the purchase item in the database.</li>
   *   <li>String [<tt>s_signature</tt>] The signature of Purchase Option contract. Not set if the Purchase Option doesn't require a contract assignment.</li>
   * </ul>
   *
   * @post post
   * @var array
   * @see RsPurchaseItemSid
   */
  public $a_item = [];

  /**
   * IDs of the user's activity which correspond to bookings made. Not empty when the booking process is finished.
   *
   * @post result
   * @var array
   */
  public $a_login_activity_book = [];

  /**
   * A list of payment sources.
   *
   * The value of this field is gathered from the payment form.
   *
   * This is an indexed array where each element corresponds to a single selected payment method.
   *
   * Each source contains:<dl>
   * <dt>string <var>f_amount</var></dt><dd>The amount of money to withdraw with this payment source.</dd>
   * <dt>int <var>id_pay_method</var></dt><dd>The payment method ID. One of the {@link WlPayMethodSid} constants.</dd>
   * <dt>bool <var>is_hide</var></dt><dd> Whether this payment method is hidden.
   *   Payment methods will be hidden if they aren't enabled for the business.</dd>
   * <dt>bool [<var>is_success</var>=<tt>false</tt>]</dt><dd>Whether this source was successfully charged.</dd>
   * <dt>string [<var>m_surcharge]</dt><dd>Client-side calculated surcharge value. See {@link EnvironmentModel}</dd>
   * <dt>string <var>s_index</var></dt><dd>
   *   The index of this form. This corresponds to the key this item is written in this array with.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_pay_form = [];

  /**
   * A list of assets which are being booked. Every element has the next keys:
   * <ul><li>Number <tt>i_index</tt> The number of asset(s). Actual for assets with quantity greater <tt>1</tt>.</li>
   * <li>String <tt>k_resource</tt> The ID of asset.</li></ul>
   *
   * @post post
   * @var array
   */
  public $a_resource = [];

  /**
   * A list of sessions which are being booked.
   * Keys - IDs of sessions in the database; values - lists of session date/time.
   *
   * @post post
   * @var array
   */
  public $a_session = [];

  /**
   * The IDs of bookings made.
   *
   * @post result
   * @var array
   */
  public $a_visit = [];

  /**
   * The date/time of the session booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * The WellnessLiving mode type, one of the {@link WlBookModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = WlBookModeSid::APP_FRONTEND;

  /**
   * The ID of the session.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = null;

  /**
   * The ID of the user's activity corresponding to purchase made. Not empty when the booking process is finished.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase = '0';

  /**
   * The installment template key.
   * This property is optional. <tt>null</tt> if installment plan doesn't exist for the purchased item.
   * <tt>0</tt> if installment plan isn't selected for the purchased item from the list of installment plans.
   *
   * @post post
   * @var string
   */
  public $k_pay_installment_template;

  /**
   * The discount code to be applied to the purchase.
   *
   * @post post
   * @var string
   */
  public $text_discount_code = '';

  /**
   * The user ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = null;
}

?>