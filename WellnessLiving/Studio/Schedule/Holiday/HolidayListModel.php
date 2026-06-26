<?php

namespace WellnessLiving\Studio\Schedule\Holiday;

use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Loads a list with a schedule holiday of the personnel.
 *
 * @method WlModelRequest get()
 */
class HolidayListModel extends WlModelAbstract
{
  /**
   * A list with a schedule holiday of the personnel: 
   *
   * <dl>
   *   <dt>string `dl_end`</dt>
   *   <dd>End date of the by specific holiday.</dd>
   * 
   *   <dt>string `dl_start`</dt>
   *   <dd>Start date of the by specific holiday.</dd>
   * 
   *   <dt>int `i_row`</dt>
   *   <dd>A number row.</dd>
   * 
   *   <dt>int `i_use`</dt>
   *   <dd>A count of used vocation days.</dd>
   * 
   *   <dt>bool `is_remove`</dt>
   *   <dd><tt>true</tt> - schedule holiday is remove, <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>string `k_schedule_holiday`</dt>
   *   <dd>Schedule holiday key.</dd>
   * 
   *   <dt>string `text_holiday`</dt>
   *   <dd>Name of the specific holiday.</dd>
   * 
   *   <dt>string `text_personnel`</dt>
   *   <dd>Name of the personnel.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_list = [];

  /**
   * State of the schedule holiday.
   *
   * @get get
   * @var int
   * @see AFlagSid
   */
  public $id_flag = 3;

  /**
   * Key of the studio personnel.
   *
   * @get get
   * @var string
   */
  public $k_personnel;

  /**
   * Whether to show the create button. Default value <tt>true</tt>.
   *
   * <tt>true</tt> - is show, <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $show_create_button = true;

  /**
   * Whether to show the edit button. Default value <tt>true</tt>.
   *
   * <tt>true</tt> - is show, <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $show_filter = true;
}

?>