<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Appointment\WlAppointmentPaySid;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Completes the payment for an appointment or appointment Purchase Option for a client.
 *
 * The only difference between this endpoint and {@link PaymentModel} is
 * that this endpoint is capable of paying for multiple appointments at the same time.
 *
 * This endpoint uses a CAPTCHA check.
 * To pass the CAPTCHA, you'll need to study the documentation of the CAPTCHA base class. In the documentation, you'll
 * find that you need to send a CAPTCHA for a specific action. For this API, the action is {@link BusinessPaymentCaptcha::CID}.
 */
class PaymentMultipleModel extends WlModelAbstract
{
  /**
   * The booking process information:
   *
   * Set this field value for GET requests.
   *
   * @get get
   * @var array
   */
  public $a_book_data = [];

  /**
   * A copy of {@link PaymentMultipleModel::$a_book_data}. Has the same structure.
   * Set this field value for POST requests.
   *
   * @post post
   * @var array
   */
  public $a_book_data_post = [];

  /**
   * The list of redeemed prizes.
   *
   * @post result
   * @var string[]
   */
  public $a_login_prize = [];

  /**
   * The payment type for the appointment. One of the {@link WlAppointmentPaySid} constants.
   *
   * @post result
   * @var int[]
   */
  public $a_pay;

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
   * Information about the selected login promotion.
   *
   * @get result
   * @var array
   */
  public $a_promotion_data;

  /**
   * Fields refer to strings in the format <tt>id_purchase_item-k_id</tt>. Values refer to an array with the next stricture:
   *
   * @get result
   * @var array
   */
  public $a_purchase;

  /**
   * The keys of purchased items.
   *
   * The first level of the array is the list of appointments from the batch.
   * The second level of the array is the list of items purchased for this appointment.
   *
   * @post result
   * @var string[][]|null
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
   * The list of amounts to pay for appointments from the batch, with taxes and without surcharges.
   *
   * @get result
   * @var string[]
   */
  public $a_total;

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
   * The ID of the source mode. One of the {@link ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of the activity for the purchase made. This will be empty if no purchase has been made.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase = '0';

  /**
   * The gift card amount.
   *
   * @get result
   * @var string
   */
  public $m_coupon = '0.00';

  /**
   * The discount amount.
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
   * The amount of tax to pay.
   *
   * @get result
   * @var string
   */
  public $m_tax = '0.00';

  /**
   * The price of the service, with taxes and without surcharges.
   *
   * @get result
   * @var string
   */
  public $m_total = '0.00';

  /**
   * The gift card code.
   *
   * @get get
   * @post get
   * @var string
   */
  public $text_coupon_code = '';

  /**
   * The discount code.
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