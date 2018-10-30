<?php

namespace WellnessLiving\Wl\Book\Process;

use WellnessLiving\WlModelAbstract;

/**
 * Booking Wizard.
 */
class ProcessModel extends WlModelAbstract
{
  /**
   * Full wizard data from all steps.
   *
   * @var array
   */
  public $a_data = [];

  /**
   * IDs of user's activity which correspond to books are made. Not empty when booking process is finished.
   *
   * @var array
   */
  public $a_login_activity_book = [];

  /**
   * All steps to be done to make book. Depends on many factors. Initialized in constructor.
   *
   * @get result
   * @var array
   */
  public $a_path = [];

  /**
   * List of purchases which are available for session(s) which is(are) being booked.
   *
   * @var array
   * @see Wl_Book_Process_Purchase_PurchaseModel.a_purchase
   */
  public $a_purchase = [];

  /**
   * IDs of books which are made. Not empty when booking process is finished.
   *
   * @var array
   */
  public $a_visit = [];

  /**
   * Date of the session that user is booking now.
   * In MySQL format. In GMT.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * Purchase rule ID.
   *
   * One of {@link Wl_Classes_RequirePaySid} constants.
   *
   * @get result
   * @var int
   */
  public $id_pay_require = false;

  /**
   * Does booked session is event.
   *
   * @get result
   * @var bool
   */
  public $is_event = false;

  /**
   * Does client can select several session per booking.
   *
   * @get result
   * @var bool
   */
  public $is_session = false;

  /**
   * Whether to skip form validation.
   * <tt>true</tt> if user pressed 'Pay later'.
   * <tt>false</tt> if user pressed 'Pay now'.
   *
   * @var bool
   */
  public $is_force_pay_later = false;

  /**
   * Does user can be placed to waitlist.
   *
   * @get result
   * @var bool
   */
  public $is_wait = false;

  /**
   * ID of session which is booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
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
   * ID of location where session is booked.
   *
   * @get result
   * @var string
   */
  public $k_location = '';

  /**
   * ID of a user who is making a book.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid=null;
}

?>