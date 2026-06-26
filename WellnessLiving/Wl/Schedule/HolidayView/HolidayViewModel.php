<?php

namespace WellnessLiving\Wl\Schedule\HolidayView;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about holiday item.
 *
 * @method WlModelRequest get() Retrieves information about holiday.
 */
class HolidayViewModel extends WlModelAbstract
{
  /**
   * Holiday data.
   *
   * @get result
   * @var array
   */
  public $a_holiday_info = [];

  /**
   * List of request holiday data to get information for. Each element has next structure:
   *
   * <tt>null</tt> for get info about single holiday by {@link HolidayViewModel::$k_holiday}.
   *
   * <dl>
   *   <dt>string `dt_date`</dt>
   *   <dd>Holiday date.</dd>
   * 
   *   <dt>string `k_holiday`</dt>
   *
   * </dl>
   * @get get
   * @var array[]|null
   */
  public $a_holiday_request = null;

  /**
   * List of data for requested holidays.
   *
   * @get result
   * @var array[]
   */
  public $a_holiday_result = [];

  /**
   * Holiday date to show.
   *
   * <tt>null</tt> for get info about single holiday by {@link HolidayViewModel::$a_holiday_request}.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * Holiday key.
   *
   * <tt>null</tt> for get info about single holiday by {@link HolidayViewModel::$a_holiday_request}.
   *
   * @get get
   * @var string|null
   */
  public $k_holiday = null;

  /**
   * Client timezone name to show.
   *
   * <tt>null</tt> when client not selected timezone in the profile.
   *
   * @get get
   * @var string|null
   */
  public $text_timezone = null;
}

?>