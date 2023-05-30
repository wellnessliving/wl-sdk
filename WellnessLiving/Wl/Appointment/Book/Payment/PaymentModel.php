<?php

namespace WellnessLiving\Wl\Appointment\Book\Payment;

use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that displays information about payments for an appointment.
 * The POST method for this endpoint is implemented as a separate endpoint (see
 * {@link \WellnessLiving\Wl\Appointment\Book\Payment\PaymentPostModel}).
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * Information detailing an appointment booking.
   *
   * @get get
   * @post get
   * @var array
   */
  public $a_book_data = [];

  /**
   * A list of payment sources.
   *
   * The value of this field is gathered from the payment form.
   *
   * See {@link \WellnessLiving\Wl\Catalog\Payment\PaymentModel::$a_pay_form} for a detailed description.
   *
   * @post post
   * @var array
   */
  public $a_pay_form = [];

  /**
   * Information about any prepaid Purchase Options.
   *
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
   * @var array
   */
  public $a_promotion_data = [];

  /**
   * Information about selected purchase items.
   *
   * Indexes are strings in the format `id_purchase_item-k_id`.
   *
   * Values are an array with the following structure:
   *
   * <dl>
   *   <dt>array <var>a_tax</var></dt>
   *   <dd>Contains information about taxes in the following format. A list of taxes to apply.
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
   * @var array
   */
  public $a_purchase = [];

  /**
   * The purchase item IDs from the database.
   *
   * This will be `null` if not set yet.
   *
   * @post result
   * @var array|null
   */
  public $a_purchase_item = null;

  /**
   * The key of source mode. A constant of {@link \WellnessLiving\Wl\Book\WlBookModeSid}.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode;

  /**
   * The payment type for the appointment. A constant of {@link WlAppointmentPaySid}.
   *
   * This will be `null` if not set yet.
   *
   * @post result
   * @var int
   */
  public $id_pay = null;

  /**
   * The purchase item ID. A constant of {@link WlPurchaseItemSid}.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var int|null
   */
  public $id_purchase_item = null;

  /**
   * The item ID.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_id = null;

  /**
   * The location ID.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The ID of activity of the purchase made. Empty if no purchase has been made.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase = '0';

  /**
   * The login promotion ID.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_login_promotion = null;

  /**
   * The total cost of the purchase.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $m_total = null;

  /**
   * The discount code to be applied to the purchase.
   *
   * @get get
   * @post get
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
   * @var string|null
   */
  public $uid = null;
}

?>