<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Entry point for cancellation of session book of whole event.
 *
 * @method WlModelRequest post() Cancels book of session {@link \Wl\Event\EventCancelApi::$k_visit}.  Validates the business and visit keys, checks that the visit is still in a cancellable  state, and verifies that the current user has access to cancel it. Loads the attendance  record for the visit and delegates the actual cancellation to the event service.
 */
class EventCancelModel extends WlModelAbstract
{
  /**
   * Visit source. One of {@link ModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * <tt>true</tt> is late cancel, <tt>false</tt> reservation is not late cancel.
   * This is required to enable late cancel even if the user is staff.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_late_cancel = false;

  /**
   * Key of the business to which the visit belongs.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Book ID.
   *
   * @post get
   * @var string
   */
  public $k_visit;
}

?>