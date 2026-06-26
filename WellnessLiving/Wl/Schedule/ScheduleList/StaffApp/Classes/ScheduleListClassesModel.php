<?php

namespace WellnessLiving\Wl\Schedule\ScheduleList\StaffApp\Classes;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information about classes/events which must be represented on schedule.
 *
 * @method WlModelRequest get() Gets a list of classes/events which must be represented on schedule.
 */
class ScheduleListClassesModel extends WlModelAbstract
{
  /**
   * List of classes/events. Keys - class/event IDs; Values - class/event titles.
   *
   * @get result
   * @var array[]
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