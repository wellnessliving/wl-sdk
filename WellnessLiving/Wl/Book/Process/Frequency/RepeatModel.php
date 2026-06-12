<?php

namespace WellnessLiving\Wl\Book\Process\Frequency;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * For recurrent class booking returns list of visits to be created for the given settings.
 */
class RepeatModel extends WlModelAbstract
{
  /**
   * List of days of the week to create visits. Each value is a {@link ADateWeekSid} constant.
   *
   * @get get
   * @var int[]
   */
  public $a_day = [];

  /**
   * List of visits to be created for the given settings:
   *
   * @get result
   * @var array[]
   */
  public $a_visit = [];

  /**
   * List of visits to be ignored. Each value is a string consisting of a class period key
   * and a visit date and time in location's timezone, concatenated by two colons. Empty array if no visits
   * should be ignored. Example: ['70::2024-11-05 18:00:00'].
   *
   * @get get
   * @var string[]
   */
  public $a_visit_ignore = [];

  /**
   * Date and time of the class, when recurring booking was called, in UTC timezone.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * Date to start recurring booking. Not empty only when {@link RepeatModel::$id_repeat_end} == {@link \RsRepeatEndSid::DATE}.
   *
   * @get get,result
   * @var string
   */
  public $dt_from = '';

  /**
   * Date to finish recurring booking. Not empty only when {@link RepeatModel::$id_repeat_end} == {@link \RsRepeatEndSid::DATE}.
   *
   * @get get,result
   * @var string
   */
  public $dt_to = '';

  /**
   * Count of the visits to be created. Not empty only when {@link RepeatModel::$id_repeat_end} == {@link \RsRepeatEndSid::COUNT}.
   *
   * @get get,result
   * @var int
   */
  public $i_count = 0;

  /**
   * Count of days\weeks\months between recurring bookings.
   *
   * @get get
   * @var int
   */
  public $i_duration = 0;

  /**
   * Recurring booking interval, one of {@link ADurationSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_duration = 0;

  /**
   * WellnessLiving mode, one of {@link ModeSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_mode = 0;

  /**
   * @get get
   * @var int
   */
  public $id_repeat_end = 0;

  /**
   * `true` when cancelling booking, `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_cancel = false;

  /**
   * `true` if current user is not created yet, `false` otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_new_user = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Class period key.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '';

  /**
   * Encoded list of user keys, who will attend visits.
   *
   * @get get
   * @var string
   */
  public $s_uid = '';

  /**
   * Start date of repeatable period in human-readable format.
   *
   * @get result
   * @var string
   */
  public $text_date_from = '';

  /**
   * End date of repeatable period in human-readable format.
   *
   * @get result
   * @var string
   */
  public $text_date_to = '';

  /**
   * Key of user, who will attend visits.
   *
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * Key of user, who perform booking.
   *
   * @get get
   * @var string
   * @deprecated Current login user used instead.
   */
  public $uid_actor = '';
}

?>