<?php

namespace WellnessLiving\Wl\Resource\Schedule\Add;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Model to add available/unavailable working time for resources.
 *
 * @method WlModelRequest post() Saves new time interval.  Validates the business, location, and resource, checks that the resource is active,  belongs to the given location, and that the current login has edit access, then creates  the working or non-working schedule for each selected day and returns the created  resource period keys.
 */
class AddModel extends WlModelAbstract
{
  /**
   * List of working days, constants from {@link ADateWeekSid}.
   *
   * @post post
   * @var int[]
   * @see ADateWeekSid
   */
  public $a_day = [];

  /**
   * Resource period key.
   * Primary key from the `rs_resource_period` table.
   *
   * @post result
   * @var string[]
   */
  public $a_resource_period;

  /**
   * End date of working period.
   *
   * @post post
   * @var string
   */
  public $dt_end_date = '';

  /**
   * End time.
   *
   * @post post
   * @var string
   */
  public $dt_end_time = '';

  /**
   * Start date of working period.
   *
   * @post post
   * @var string
   */
  public $dt_start_date = '';

  /**
   * Start time.
   *
   * @post post
   * @var string
   */
  public $dt_start_time = '';

  /**
   * Count of the periods which specified in {@link AddModel::$id_repeat}.
   *
   * If this field is absent default value  is used.
   *
   * @post post
   * @var int
   */
  public $i_repeat = 0;

  /**
   * Measuring unit of {@link AddModel::$i_repeat}. One of {@link ADurationSid} constants.
   *
   * If this field is absent default value  is used.
   *
   * @post post
   * @var int
   */
  public $id_repeat = 0;

  /**
   * Whether model works with available working time.
   *
   * <tt>false</tt> means available working time.
   * <tt>true</tt> means unavailable working time.
   *
   * @post post
   * @var bool
   */
  public $is_break = false;

  /**
   * Whether period is eternal.
   *
   * <tt>true</tt> means on going.
   * <tt>false</tt> means end date will be used.
   *
   * @post post
   * @var bool
   */
  public $is_eternal = false;

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Location key.
   *
   * @post post
   * @var string
   */
  public $k_location = '';

  /**
   * Resource key. Primary key in the `rs_resource` table.
   *
   * @post post
   * @var string
   */
  public $k_resource = '';

  /**
   * Note to working interval.
   *
   * @post post
   * @var string
   */
  public $text_note = '';
}

?>