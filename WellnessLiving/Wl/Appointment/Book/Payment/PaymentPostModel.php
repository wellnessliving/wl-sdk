<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;
use WellnessLiving\Wl\Mode\ModeSid;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\Service\ServicePriceSid;

/**
 * Sends payments for an appointment booking.
 *
 * This endpoint using captcha check.
 * To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for a specific action.
 * For this API an action is {@link BusinessPaymentCaptcha::CID}.
 */
class PaymentPostModel extends WlModelAbstract
{
  /**
   * Information detailing an appointment booking.
   * Has the same structure as {@link PaymentModel::$a_book_data}.
   *
   * @post post
   * @var array
   */
  public $a_book_data = [];

  /**
   * A list of payment sources to pay with.
   *
   * Each element has next keys:
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * Information about selected Purchase Options.
   *
   * @get result
   * @var array[]
   */
  public $a_promotion_data;

  /**
   * Information about selected purchase items.
   *
   * Indexes are strings in the format `id_purchase_item-k_id`.
   *
   * Values are an array with the following structure:
   *
   * @get result
   * @var array[]
   */
  public $a_purchase;

  /**
   * The purchase item keys from the database.
   *
   * This will be `null` if not set yet.
   *
   * @post result
   * @var string[]|null
   */
  public $a_purchase_item;

  /**
   * List of quiz response keys.
   * Keys are quiz keys.  Values are quiz response keys. 
   * @post post
   * @var string[]
   */
  public $a_quiz_response = [];

  /**
   * List of user keys to book appointments.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * The key of source mode. A constant of {@link ModeSid}.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * The payment type for the appointment. A constant of {@link WlAppointmentPaySid}.
   *
   * @post result
   * @var int
   */
  public $id_pay;

  /**
   * The purchase item ID. A constant of {@link WlPurchaseItemSid}.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * The business key. Currently used only with {@link PaymentModel::$k_session_pass} variable.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The item key. Depends on {@link PaymentModel::$id_purchase_item} property.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_id = '0';

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of activity of the purchase made.
   * Empty if no purchase has been made.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase;

  /**
   * Login prize key. In case when appointment paid by reward prize, there is the key of redeemed login prize. Empty otherwise.
   *
   * @post result
   * @var string
   */
  public $k_login_prize = '0';

  /**
   * The login promotion key.
   *
   * @get get
   * @var string
   */
  public $k_login_promotion = '0';

  /**
   * Session pass key.
   *
   * @get get
   * @var string
   */
  public $k_session_pass = '0';

  /**
   * Gift card amount.
   *
   * @get result
   * @var string
   */
  public $m_coupon = '0.00';

  /**
   * Discount amount.
   *
   * @get result
   * @var string
   */
  public $m_discount = '0.00';

  /**
   * Surcharge amount calculated for credit cards (Virtual Terminal and Card Swiper).
   *
   * @get result
   * @var string
   */
  public $m_surcharge = '0.00';

  /**
   * Surcharge amount calculated for money transfers from account: ACH, Direct Entry.
   *
   * @get result
   * @var string
   */
  public $m_surcharge_ach = '0.00';

  /**
   * The tax of service.
   *
   * @get result
   * @var string
   */
  public $m_tax = '0.00';

  /**
   * The total cost of the purchase.
   *
   * @get result
   * @var string
   */
  public $m_total;

  /**
   * Variable price. Is set only during booking an appointment with variable type of the price
   *   {@link ServicePriceSid::VARIES} from spa backend {@link ModeSid::SPA_BACKEND}.
   *
   * @get get
   * @var string
   */
  public $m_variable_price = '';

  /**
   * Service unique key.
   * Used for model cache.
   *
   * @get get
   * @var string
   */
  public $s_unique_key = '';

  /**
   * Gift card code.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_coupon_code = '';

  /**
   * The discount code to be applied to the purchase.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_discount_code = '';

  /**
   * The user key.
   *
   * This field is used if the client books for himself or for the relative.
   *
   * This field is incorrect to use for guest booking since in this case the client will be checked as a relative.
   *
   * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>