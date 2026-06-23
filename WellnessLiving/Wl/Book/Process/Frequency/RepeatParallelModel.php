<?php

namespace WellnessLiving\Wl\Book\Process\Frequency;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;

/**
 * Extension of {@link RepeatModel} that adds control over whether parallel class period series
 * (other sessions running at the same time and location) are included in the returned visit list.
 *
 * When `is_include_parallel` is `false` (default), only the originally selected class period's
 * series (parent and its reschedules) is returned. When `true`, all parallel series are also
 * included and can be reviewed or individually ignored by the client.
 */
class RepeatParallelModel extends WlModelAbstract
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
   * <dl>
   *   <dt>string `dt_date`</dt>
   *   <dd>Visit date and time in UTC.</dd>
   * 
   *   <dt>string `dt_local`</dt>
   *   <dd>Visit date and time in location's time zone.</dd>
   * 
   *   <dt>string `html_short_name_list`</dt>
   *   <dd>List of names of the staff who provide this class.</dd>
   * 
   *   <dt>string `html_timezone`</dt>
   *   <dd>Location's time zone abbreviation.</dd>
   * 
   *   <dt>int `i_spot`</dt>
   *   <dd>Number of open spots remaining for this session. `0` if the session is full.</dd>
   * 
   *   <dt>bool `is_disable`</dt>
   *   <dd>Whether booking is not available for this day.</dd>
   * 
   *   <dt>bool `is_free`</dt>
   *   <dd>Whether booking is free for this day.</dd>
   * 
   *   <dt>bool `is_ignore`</dt>
   *   <dd>Whether visit is from ignore list.</dd>
   * 
   *   <dt>bool `is_selected_series`</dt>
   *   <dd>
   *     `true` if this visit belongs to the originally selected class period's series (parent and its
   *    reschedules). `false` if it belongs to a parallel series running at the same time and location.
   *   </dd>
   * 
   *   <dt>bool `is_wait`</dt>
   *   <dd>Whether booking can be only to wait list.</dd>
   * 
   *   <dt>string `k_class_period`</dt>
   *   <dd>Class period key.</dd>
   * 
   *   <dt>string `s_alert`</dt>
   *   <dd>Staff name if booking available, warning about wait list or disabled booking otherwise.</dd>
   * 
   *   <dt>string `s_date`</dt>
   *   <dd>Visit date and time in location's time zone in human-readable format.</dd>
   * </dl>
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
   * `true` to also include sessions running in parallel at the same time and location
   *  (other class period series); `false` to return only the selected series (parent
   *  period and its reschedules).
   *
   * Controlled by the "Also include other sessions happening at the same time" toggle on the form.
   * Defaults to `false`.
   *
   * @get get
   * @var bool
   */
  public $is_include_parallel = false;

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