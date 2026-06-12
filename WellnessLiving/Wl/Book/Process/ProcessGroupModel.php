<?php

namespace WellnessLiving\Wl\Book\Process;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * API for group booking process.
 *
 * This API allows to book a class/event for multiple clients at once.
 */
class ProcessGroupModel extends WlModelAbstract
{
  /**
   * List of errors that occurred during booking.
   *
   * Keys are user keys. * Each value has the next structure: 
   *
   * @post result
   * @var array[]
   */
  public $a_book_error = [];

  /**
   * List of clients to book.
   * Each value is an array with next keys:
   *
   * @post post
   * @var array[]
   */
  public $a_client = [];

  /**
   * Primary keys of users' activity that correspond to bookings made.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity_book;

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
   * Primary keys of bookings made.
   *
   * @post result
   * @var string[]
   */
  public $a_visit;

  /**
   * Date/time to which session is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date_gmt = '';

  /**
   * The mode type. One of the {@link ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * `true` if action is performed as a staff member; `false` otherwise.
   *
   * If `true` is sent, access to the business and to the client will be checked.
   * If `false` is sent, user can book only for himself or for relatives if this is allowed in business settings.
   *
   * @get get
   * @post get
   *
   * @var bool
   */
  public $is_backend = false;

  /**
   * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag is set to `false`.
   *
   * Use this field with caution.
   * The final booking will not use this flag, and the check will still be performed.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_credit_card_check = true;

  /**
   * `true` if user pressed 'Pay later'.
   * `false` if user pressed 'Pay now'.
   *
   * @post post
   * @var bool
   */
  public $is_force_pay_later = false;

  /**
   * Key of session which is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The key of the user's activity corresponding to the purchase made.
   * `null` if no purchase was made.
   *
   * @post result
   * @var string|null
   */
  public $k_login_activity_purchase;

  /**
   * The installment template primary key.
   * `null` to not use installment template.
   *
   * @post post
   * @var string|null
   */
  public $k_pay_installment_template = null;

  /**
   * The discount code to be applied to the purchase.
   *
   * @post post
   * @var string
   */
  public $text_discount_code = '';
}

?>