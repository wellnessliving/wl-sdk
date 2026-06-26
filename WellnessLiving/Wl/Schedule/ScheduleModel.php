<?php

namespace WellnessLiving\Wl\Schedule;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to get schedule.
 *
 * <b>Note.</b>
 * List of the properties is temporary.
 * This is a temporary version which returns a completed template.
 *
 * <b>Important.</b>
 * When this API will be completed - delete TODO 'Schedule Api' in the project and code for them.
 *
 * @method WlModelRequest get() Returns parsed template for the schedule page.
 */
class ScheduleModel extends WlModelAbstract
{
  /**
   * Schedule info. Prepares only in the backend mode.
   *
   * @get result
   * @var array[]|null
   */
  public $a_result;

  /**
   * Schedule session data.
   *
   * @get result
   * @var array
   */
  public $a_schedule;

  /**
   * Parsed template of the schedule.
   *
   * @get result
   * @var string
   */
  public $html_template;

  /**
   * Whether API is called in the backend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend;

  /**
   * Whether the schedule is shown in the widget.
   *
   * @get get
   * @var bool
   */
  public $is_widget;

  /**
   * Business key for which schedule should be got.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * @get get
   * @var string|null
   */
  public $s_data = null;

  /**
   * User key who get the schedule.
   *
   * @get get
   * @var string
   */
  public $uid;

  /**
   * URL to the controller which were used before API to show the schedule. Used to create URL for printing schedule.
   *
   * @get get
   * @var string
   * @deprecated Should be deleted.
   */
  public $url_page;
}

?>