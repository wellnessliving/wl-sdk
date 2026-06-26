<?php

namespace WellnessLiving\Studio\Schedule\Holiday;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for get information about schedule holiday.
 *
 * @method WlModelRequest get()
 */
class HolidayTotalModel extends WlModelAbstract
{
  /**
   * A List of vacations for personnel. Each element has structure: 
   *
   * <dl>
   *   <dt>string `dl_end`</dt>
   *   <dd>Date when vacation is end.</dd>
   * 
   *   <dt>string `dl_start`</dt>
   *   <dd>Date when vacation is start.</dd>
   * 
   *   <dt>int `i_available`</dt>
   *   <dd>Available vacation days. Calculated <tt><var>i_day</var>-<var>i_use</var></tt>.</dd>
   * 
   *   <dt>int `i_day`</dt>
   *   <dd>Count of vacation days.</dd>
   * 
   *   <dt>int `i_use`</dt>
   *   <dd>Count of used days in this vacation.</dd>
   * 
   *   <dt>string `k_personnel_vacation`</dt>
   *   <dd>Personnel vacation key.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_vacation = [];

  /**
   * The number of remaining vacation days available this year.
   *
   * @get result
   * @var int
   */
  public $i_available = 0;

  /**
   * The number of vacation days available this year.
   *
   * @get result
   * @var int
   */
  public $i_holiday = 0;

  /**
   * Key of the personnel.
   *
   * @get get
   * @var string
   */
  public $k_personnel;
}

?>