<?php

namespace WellnessLiving\Wl\Staff\Schedule\Add;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Model to add available/unavailable working time for staff.
 *
 * @method WlModelRequest post() Saves new time interval.  Validates the business, location, and staff identifiers, resolving the deprecated `k_staff`  input to `uid_staff` when needed. Checks that the current staff member has access to edit  the target staff schedule, validates the submitted schedule data, and saves the new working  or unavailable time interval.
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
 * Services list key.
 *
 * Empty list means all services.
 * <tt>null</tt> means not set.
 *
 * @post post
 * @var string[]
 */
  public $a_service = [];

  /**
 * Staff period key.
 *
 * @post result
 * @var string[]
 */
  public $a_staff_period;

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
 * Whether all services selected on form.
 *
 * @post post
 * @var bool
 */
  public $is_service_all = false;

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
 * Deprecated staff key.
 *
 * @post post
 * @var string
 * @deprecated Use {@link AddModel::$uid_staff}.
 */
  public $k_staff = '';

  /**
 * Note to working interval.
 *
 * @post post
 * @var string
 */
  public $text_note = '';

  /**
 * Staff user key.
 *
 * @post post
 * @var string
 */
  public $uid_staff = '';
}

?>