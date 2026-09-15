<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp\Classes;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information about classes/events which must be represented on schedule.
 *
 * @method WlModelRequest get() Gets a list of classes/events which must be represented on schedule.  Validates the business and checks the current user's schedule access, then loads the classes  or events (depending on {@link \Wl\Schedule\ScheduleList\StaffApp\Classes\ScheduleListClassesApi::$is_event}) that should be selectable  in the staff schedule filter, keyed by their key with the title as value.
 */
class ScheduleListClassesModel extends WlModelAbstract
{
  /**
   * List of classes/events.
   * Keys - class/event IDs. 
   * Values - class/event titles.
   *
   * @get result
   * @var string[]
   */
  public $a_class;

  /**
   * <tt>true</tt> - to return events; <tt>false</tt> - to return classes.
   *
   * @get get
   * @var bool
   */
  public $is_event;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * User key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid = null;
}

?>