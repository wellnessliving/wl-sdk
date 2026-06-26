<?php

namespace WellnessLiving\Studio\Schedule\Holiday;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit, and delete specific personnel's holidays.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class HolidayElementModel extends WlModelAbstract
{
  /**
   * End date of the holiday.
   *
   * @get result
   * @post post
   * @var string
   */
  public $dl_end = '';

  /**
   * Start date of the holiday.
   *
   * @get result
   * @post post
   * @var string
   */
  public $dl_start = '';

  /**
   * Whether schedule holiday is remove. Default value <tt>false</tt>.
   *
   * <tt>true</tt> - schedule holiday is remove, <tt>false</tt> - otherwise.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_remove = false;

  /**
   * Key of the studio personnel.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $k_personnel;

  /**
   * Schedule holiday key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_schedule_holiday;

  /**
   * Name of the holiday.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_holiday;

  /**
   * Link to logs for the current editable holiday.
   *
   * @get result
   * @var string
   */
  public $url_log = '';
}

?>