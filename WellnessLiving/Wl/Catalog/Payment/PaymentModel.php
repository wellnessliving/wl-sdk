<?php

namespace WellnessLiving\Wl\Catalog\Payment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Purchases an item and performs the payment in the store.
 *
 * This endpoint uses a CAPTCHA check. To pass the CAPTCHA, consult the CAPTCHA API documentation.
 * The documentation specifies that a captcha must be sent for a specific action.
 *
 * For this API an action is {@link BusinessPaymentCaptcha::CID}.
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * The staff commission earned for this purchase. If this isn't empty, it has the next fields: 
   *
   * @post get
   * @var array
   */
  public $a_commission = [];

  /**
   * The list of items in the cart.
   *
   * This parameter is required.
   *
   * Every element must have the following keys:
   *
   * @post post
   * @var array[]
   */
  public $a_item = [];

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
   * The list of quiz response keys.
   * Keys refer to quiz keys.  And values refer to responses.
   *
   * @post post
   * @var string[]
   */
  public $a_quiz_response = [];

  /**
   * The percentage discount (optional).
   *
   * @post post
   * @var float
   */
  public $f_discount_percent = 0;

  /**
   * The WellnessLiving mode type (required). One of the {@link ModeSid} constants.
   *
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * Determines if the payment owner is an anonymous user (optional).
   *
   * @post get
   * @var bool
   */
  public $is_guest = false;

  /**
   * Specify this if operations are performed by the staff member (optional).
   *
   * @post get
   * @var bool
   */
  public $is_staff = false;

  /**
   * The business key (required).
   *
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The location key (required).
   *
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of login activity.
   *
   * This will be `null` if not set yet.
   *
   * @post result
   * @var string|null
   */
  public $k_login_activity = null;

  /**
   * The installment template key (optional).
   * This will be `null` if the installment plan doesn't exist or isn't set for the purchased item.
   *
   * @post post
   * @var string
   */
  public $k_pay_installment_template;

  /**
   * The purchase key created during payment.
   *
   * @post result
   * @var string
   */
  public $k_purchase;

  /**
   * The visit key to be paid (optional).
   *
   * @post post
   * @var string
   */
  public $k_visit = '0';

  /**
   * The amount to discount (optional).
   *
   * @post post
   * @var string
   */
  public $m_discount_flat = '0';

  /**
   * The manual surcharge amount.
   *
   * An empty string represents an automatic surcharge amount.
   *
   * @post post
   * @var string
   */
  public $m_surcharge;

  /**
   * The tip amount (optional).
   *
   * @post post
   * @var string
   */
  public $m_tip = '0';

  /**
   * The discount code (optional).
   *
   * @post post
   * @var string
   */
  public $text_discount_code = '';

  /**
   * The custom receipt note.
   *
   * @post post
   * @var string
   */
  public $text_receipt_note = '';

  /**
   * The user's key (required).
   *
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>