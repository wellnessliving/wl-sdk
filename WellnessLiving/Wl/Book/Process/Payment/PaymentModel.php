<?php

namespace WellnessLiving\Wl\Book\Process\Payment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Book\WlBookModeSid;

/**
 * Booking wizard for page "Pay / Billing info".
 */
class PaymentModel extends WlModelAbstract
{
  /**
   * List of items to be bought. Every element has next fields:
   * <ul>
   *   <li>Number <tt>id_purchase_item</tt> ID of purchase item type. One of {@link RsPurchaseItemSid} constants.</li>
   *   <li>Boolean [<tt>is_renew</tt>] <tt>true</tt> - item should be "auto-renew"; <tt>false</tt> - otherwise. If is not set - use default option for this item.</li>
   *   <li>String <tt>k_id</tt> ID of purchase item in database.</li>
   *   <li>String [<tt>s_signature</tt>] Signature of purchase option contract. Not set if purchase option does not require assignment of contract.</li>
   * </ul>
   *
   * @post post
   * @var array
   * @see RsPurchaseItemSid
   */
  public $a_item = [];
  
  /**
   * IDs of user's activity which correspond to books are made. Not empty when booking process is finished.
   *
   * @post result
   * @var array
   */
  public $a_login_activity_book = [];
  
  /**
   * A list of payment sources.
   *
   * See description of <tt>\Wl\Pay\Form\FormApiTrait::$a_pay_form</tt> at PHP side for structure of this array.
   *
   * Value of this field is gathered from payment form with {@link Wl_Pay_FormModelMixin.paySet()}.
   *
   * @post post
   * @var array
   */
  public $a_pay_form = [];

  /**
   * List of assets which are being booked. Every element has next keys:
   * <ul><li>Number <tt>i_index</tt> Number of asset. Actual for assets with quantity greater <tt>1</tt>.</li>
   * <li>String <tt>k_resource</tt> ID of asset.</li></ul>
   *
   * @post post
   * @var array
   */
  public $a_resource = [];

  /**
   * List of session which are being booked.
   * Keys - IDs of sessions in database; values - lists of session date/time.
   *
   * @post post
   * @var array
   */
  public $a_session = [];

  /**
   * IDs of books are made.
   *
   * @post result
   * @var array
   */
  public $a_visit = [];

  /**
   * Date/time of session is booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * WellnessLiving mode type, one of the{@link WlBookModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = WlBookModeSid::APP_FRONTEND;

  /**
   * ID of session.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = null;

  /**
   * ID of user's activity which corresponds to purchase is made. Not empty when booking process is finished.
   *
   * @post result
   * @var string
   */
  public $k_login_activity_purchase = '0';

  /**
   * User ID.
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