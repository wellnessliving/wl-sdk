<?php

namespace WellnessLiving\Wl\Schedule;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to get schedule for printing via POST request.
 *
 * Accepts POST requests to avoid 414 (Request-URI Too Large) error when {@link SchedulePostBasedModel::$s_data}
 * is too large to fit in a GET URL
 * The large fields ({@link SchedulePostBasedModel::$s_data} and {@link SchedulePostBasedModel::$url_page})
 * are sent in the POST body while short identifier fields remain as URL query parameters.
 *
 * @see ScheduleModel
 *
 * @method WlModelRequest get() Returns parsed template for the schedule page.
 * @method WlModelRequest post() Processes POST request to get the schedule for printing.  Delegates to {@link \Wl\Schedule\ScheduleApi::get()} to avoid code duplication. Using POST avoids 414 (Request-URI Too Large) errors when {@link \Wl\Schedule\SchedulePostBasedApi::$s_data} is large.
 */
class SchedulePostBasedModel extends WlModelAbstract
{
  /**
   * Schedule info. Prepares only in the backend mode.
   *
   * @post result
   * @var array[]|null
   */
  public $a_result;

  /**
   * Schedule session data.
   *
   * @post result
   * @var array
   */
  public $a_schedule;

  /**
   * Parsed template of the schedule.
   *
   * @post result
   * @var string
   */
  public $html_template;

  /**
   * Whether API is called in the backend mode.
   *
   * @post get
   * @var bool
   */
  public $is_backend;

  /**
   * Whether the schedule is shown in the widget.
   *
   * @post get
   * @var bool
   */
  public $is_widget;

  /**
   * Business key for which schedule should be got.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Sent in the POST body to avoid 414 errors with large filter sets.
   *
   * @post post
   * @var string|null
   */
  public $s_data = null;

  /**
   * User key who get the schedule.
   *
   * @post get
   * @var string
   */
  public $uid;

  /**
   * URL to the controller which were used before API to show the schedule. Used to create URL for printing schedule.
   *
   * Sent in the POST body to avoid 414 errors because this URL includes {@link SchedulePostBasedModel::$s_data}.
   *
   * @post post
   * @var string
   * @deprecated Should be deleted.
   */
  public $url_page;
}

?>