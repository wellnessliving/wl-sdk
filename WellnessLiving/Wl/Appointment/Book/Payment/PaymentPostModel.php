<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that sends payments for an appointment booking.
 */
class PaymentPostModel extends WlModelAbstract
{
  /**
   * Information detailing an appointment booking.
   * Same as {@link \Wellnessliving\Wl\Appointment\Book\Payment\PaymentModel::$a_book_data}.
   *
   * @post post
   * @var array
   */
  public $a_book_data = [];

  /**
   * A list of payment sources to pay with.
   *
   * Structure of this array corresponds structure of {@link RsPayForm::$a_pay_source}.
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * Information about selected Purchase Options.
   * <dl>
   *   <dt>string <var>i_limit</var></dt>
   *   <dd>The limit of total visits.</dd>
   *
   *   <dt>int <var>i_remain</var></dt>
   *   <dd>The number of remaining visits.</dd>
   *
   *   <dt>string <var>s_expire</var></dt>
   *   <dd>The expiration date.</dd>
   *
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The title of the Purchase Option.</dd>
   * </dl>
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
   * <dl>
   *   <dt>array <var>a_tax</var></dt>
   *   <dd>
   *     Contains information about taxes in the following format. A list of taxes to apply.
   *     The array keys are `k_tax` keys. Each element contains the following fields: <dl>
   *       <dt>float <var>m_tax</var></dt>
   *       <dd>The tax rate.</dd>
   *
   *       <dt>string <var>text_title</var></dt>
   *       <dd>The name of the tax.</dd>
   *     </dl>
   *   </dd>
   *
   *   <dt>string <var>id_purchase_item</var></dt>
   *   <dd>The purchase item ID. A constant of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid}.</dd>
   *
   *   <dt>string <var>k_id</var></dt>
   *   <dd>The value of the discount used for the purchase.</dd>
   *
   *   <dt>string <var>m_discount</var></dt>
   *   <dd>The value of the discount used for the purchase.</dd>
   *
   *   <dt>string <var>m_pay</var></dt>
   *   <dd>The payment for the Purchase Option or single visit without taxes.</dd>
   *
   *   <dt>string <var>m_price</var></dt>
   *   <dd>The price of the Purchase Option or single visit.</dd>
   * </dl>
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
   * Key is quiz key from {@link \Core\Quiz\QuizSql} table.
   * Value is response key from {@link \Core\Quiz\Response\ResponseSql} table.
   *
   * @post post
   * @var array
   */
  public $a_quiz_response = [];

  /**
   * List of user keys to book appointments - primary keys in {@link \PassportLoginSql}.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * The key of source mode. A constant of {@link \Wellnessliving\Wl\Mode\ModeSid}.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * The payment type for the appointment. A constant of {@link \Wellnessliving\RsAppointmentPaySid}.
   *
   * @post result
   * @var int
   */
  public $id_pay;

  /**
   * The purchase item ID. A constant of {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid}.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * `true` if client is walk-in, otherwise `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * The item key. Depends of {@link \Wellnessliving\Wl\Appointment\Book\Payment\PaymentModel::$id_purchase_item} property.
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
   * Surcharge amount.
   *
   * @get result
   * @var string
   */
  public $m_surcharge = '0.00';

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
   *   {@link \Wellnessliving\RsServicePriceSid::VARIES} from spa backend {@link \Wellnessliving\Wl\Mode\ModeSid::SPA_BACKEND}.
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
   * User to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>