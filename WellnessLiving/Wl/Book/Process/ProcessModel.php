<?php

namespace WellnessLiving\Wl\Book\Process;

use WellnessLiving\WlModelAbstract;

/**
 * The Booking Wizard.
 */
class ProcessModel extends WlModelAbstract
{
  /**
   * All steps to be done to make a booking. Every element has the next keys:
   * <dl>
   *   <dt>int <var>id_book_process</var></dt>
   *   <dd>Step ID. One of {@link \WellnessLiving\Wl\Book\Process\ProcessSpaSid} constants.</dd>
   *   <dt>bool [<var>is_current</var>]</dt>
   *   <dd>
   *     <tt>true</tt> - this item is current;
   *     <tt>false</tt> or is not set - is not current.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_path = [];

  /**
   * The date of the session that the user is booking now, in MySQL format and in GMT.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * The mode type. One of {@link \WellnessLiving\Wl\Book\WlBookModeSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_mode = 0;

  /**
   * The purchase rule ID.
   *
   * One of {@link \WellnessLiving\Wl\Classes\RequirePaySid} constants.
   *
   * @get result
   * @var int
   */
  public $id_pay_require = false;

  /**
   * <tt>true</tt> - the session which is being booked is an event, <tt>false</tt> - if not an event.
   *
   * @get result
   * @var bool
   */
  public $is_event = false;

  /**
   * <tt>true</tt> - the client can select several sessions per booking, <tt>false</tt> - the client can't select several sessions.
   *
   * @get result
   * @var bool
   */
  public $is_session = false;

  /**
   * <tt>true</tt> - the user can be placed on a wait list, <tt>false</tt> - the user can't be placed on a wait list.
   *
   * @get result
   * @var bool
   */
  public $is_wait = false;

  /**
   * The key of session which is booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * The key of the location where the session is booked.
   *
   * @get result
   * @var string
   */
  public $k_location = '';

  /**
   * The key of the user who is making the booking.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>