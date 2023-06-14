<?php

namespace WellnessLiving\Wl\Book\Process\Payment;

use WellnessLiving\Wl\Book\WlBookModeSid;
use WellnessLiving\Wl\Pay\Form\EnvironmentModel;
use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that acts as the booking wizard for the "Pay/Billing info" page.
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * A list of items to be bought. Every element has the next fields:
   * <dl>
   *   <dt>int <var>id_purchase_item</var></dt><dd>The ID of purchase item type. One of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid} constants.</dd>
   *   <dt>boolean [<var>is_renew</var>]</dt><dd><tt>true</tt> if the item should be set to auto-renew; <tt>false</tt> if otherwise.
   *   If not set yet, use the default option for this item.</dd>
   *   <dt>string <var>k_id</var></dt><dd>The ID of the purchase item in the database.</dd>
   *   <dt>string [<var>s_signature</var>]</dt><dd>The signature of the Purchase Option contract. This won't be set if the
   *   Purchase Option doesn't require a contract assignment.</dd>
   * </dl>
   *
   * @post post
   * @var array
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
   * A list of assets being booked. Every element has the next keys:
   * <dl>
   *   <dt>int <var>i_index</var></dt><dd>The number of asset(s). The actual number is returned for assets with a quantity greater than <tt>1</tt>.</dd>
   *   <dt>string <var>k_resource</var></dt><dd>The ID of the asset.</dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_resource = [];

  /**
   * A list of sessions being booked.
   * Keys refer to IDs of sessions in the database, while values refer to lists of session dates/times.
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
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * The WellnessLiving mode type. One of the {@link WlBookModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = WlBookModeSid::APP_FRONTEND;

  /**
   * The ID of the session.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = null;

  /**
   * The ID of the user's activity corresponding to the purchase made. This won't be empty when the booking process is finished.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase = '0';

  /**
   * The installment template key.
   * This property is optional and it will be `null` if an installment plan doesn't exist for the purchased item.
   * This will be `0` if an installment plan isn't selected for the purchased item from the list of installment plans.
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
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = null;
}

?>