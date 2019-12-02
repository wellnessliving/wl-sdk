<?php

namespace WellnessLiving\Wl\Book\Process;

use WellnessLiving\WlModelAbstract;

/**
 * Booking Wizard.
 */
class ProcessModel extends WlModelAbstract
{
  /**
   * All steps to be done to make book. Every element has next keys:
   * <dl>
   *   <dt>int <var>id_book_process</var></dt>
   *   <dd>Step ID. One of {@link \RsBookProcessSid} constants.</dd>
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
   * Date of the session that user is booking now.
   * In MySQL format. In GMT.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * Mode type. One of {@link \WellnessLiving\Wl\Book\WlBookModeSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_mode = 0;

  /**
   * Purchase rule ID.
   *
   * One of {@link \WellnessLiving\Wl\Classes\RequirePaySid} constants.
   *
   * @get result
   * @var int
   */
  public $id_pay_require = false;

  /**
   * <tt>true</tt> - session which is being booked is event, <tt>false</tt> - is not event.
   *
   * @get result
   * @var bool
   */
  public $is_event = false;

  /**
   * <tt>true</tt> - client can select several session per booking, <tt>false</tt> - can not select.
   *
   * @get result
   * @var bool
   */
  public $is_session = false;

  /**
   * <tt>true</tt> - user can be placed to wait list, <tt>false</tt> - can not be.
   *
   * @get result
   * @var bool
   */
  public $is_wait = false;

  /**
   * Key of session which is booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * Key of location where session is booked.
   *
   * @get result
   * @var string
   */
  public $k_location = '';

  /**
   * Key of a user who is making a book.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>