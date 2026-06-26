<?php

namespace WellnessLiving\Wl\Schedule\ScheduleDesign;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Schedule design data.
 *
 * This API is not located in Wl\Schedule\Design because in this case core does not recognize URL correctly.
 *
 * @method WlModelRequest get() This method is called to process GET query.
 * @method WlModelRequest post() Saves schedule design settings including schedule config settings.
 */
class ScheduleDesignModel extends WlModelAbstract
{
  /**
   * Schedule time interval in minutes. 0 if not set yet.
   *
   * @get result
   * @post post
   * @var int
   */
  public $i_interval = 0;

  /**
   * Cell size. 0 if not set yet.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_cell = 0;

  /**
   * Option of appointments display. 0 if not set yet.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_option = 0;

  /**
   * Day ID of the start week.
   *
   * 0 if not set yet.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_start_week = 0;

  /**
   * Determines whether to show the first profile alert on the schedule.
   *
   * `true` - to show the first profile alert on the schedule.
   * `false` not to show. `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_appointment_alert = null;

  /**
   * `true` - If needed to show recurring canceled appointments on schedule. `false` - otherwise.
   * Current setting from business schedule design. `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_appointment_cancel_recurring = null;

  /**
   * `true` - If needed to show single canceled appointments on schedule. `false` - otherwise.
   * Current setting from business schedule design. `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_appointment_cancel_single = null;

  /**
   * `true` - If needed to show canceled classes on schedule. `false` - otherwise.
   * Current setting from business schedule design. `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_class_cancel = null;

  /**
   * `true` If needed to show staff unavailable times with diagonal lines, `false` - otherwise.
   * `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_diagonal_staff_busy = null;

  /**
   * Whether sessions can be dragged and dropped on the schedule. `true` if sessions can be dragged and dropped,
   * `false` otherwise. `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_drag_and_drop = null;

  /**
   * Determines whether to show the forms icon on the schedule.
   *
   * `true` means to show the forms icon on the schedule, `false` not to show. `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_form_icon = null;

  /**
   * Determines whether to show icon in the corner.
   *
   * `true` means to show icon in the corner, `false` otherwise. `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_service_icon = null;

  /**
   * Determines whether to show QUICK and SOAP notes preview on the schedule.
   *
   * `true` means to show QUICK and SOAP notes preview on the schedule, `false` not to show. `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_visit_note = null;

  /**
   * `true` - if need to show work note, `false` - otherwise. `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_work_note = null;

  /**
   * Whether only business hours should be shown on schedule. `true` if only business hours should be shown
   * on schedule. `false` otherwise. `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_work_only = null;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Cell background color when staff member is available. `null` if not set.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $s_color_staff_available = null;

  /**
   * Cell background color when staff member is not available. `null` if not set.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $s_color_staff_busy = null;

  /**
   * Color of staff name when staff was substituted. `null` if not set.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $s_color_staff_substitute = null;

  /**
   * Whether to scroll schedule to last booked service. `true` to scroll, `false` otherwise. `null` if not set.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $show_booking_after_book = null;

  /**
   * User key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>