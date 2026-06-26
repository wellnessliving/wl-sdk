<?php

namespace WellnessLiving\Wl\Appointment\Wizard\Recurring;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns list of local dates without time, when recurring sessions are going to be booked.
 * Added possibility to skip availability check of each session.
 *
 * @method WlModelRequest get()
 */
class RecurringList68Model extends WlModelAbstract
{
  /**
   * List of dates, when sessions will be booked.
   *
   * <dl>
   *   <dt>string `dt_date`</dt>
   *   <dd>Session date in MySQL format.</dd>
   * 
   *   <dt>bool `is_disable`</dt>
   *   <dd>
   *     Whether booking is not available for session. Not set if {@link RecurringList68Model::$is_check_availability} set to false.
   *   </dd>
   * 
   *   <dt>bool `is_waitlist`</dt>
   *   <dd>
   *     Whether booking for session available only into wait list. Not set if {@link RecurringList68Model::$is_check_availability} set to false.
   *   </dd>
   * </dl>
   * @get result
   * @var array{'dt_date': string, 'is_disable'?: bool, 'is_waitlist'?: bool}[]
   */
  public $a_date;

  /**
   * Days, when sessions should be booked.
   *
   * @get get
   * @var int[]
   */
  public $a_day = null;

  /**
   * Date when recurring period ends.
   *
   * @get get
   * @var string
   */
  public $dt_end = null;

  /**
   * Date when recurring period starts.
   *
   * @get get
   * @var string
   */
  public $dt_start = null;

  /**
   * Time in mysql format, when each session should be started.
   *
   * @get get
   * @var string
   */
  public $dt_time = null;

  /**
   * Fixed count of sessions to be booked.
   *
   * @get get
   * @var int
   */
  public $i_count = null;

  /**
   * Count of period between booked sessions.
   *
   * @get get
   * @var int
   */
  public $i_period = null;

  /**
   * Duration of the periods between sessions from {@link ADurationSid}.
   *
   * @get get
   * @var int
   */
  public $id_duration = null;

  /**
   * @get get
   * @var int
   */
  public $id_end = null;

  /**
   * Whether booking availability should be checked for each session.
   *
   * @get get
   * @var bool
   */
  public $is_check_availability = true;

  /**
   * Whether sessions should be connected to the day of month or day of week.
   *
   * `true` means to book the same day of month, `false` - the same day of week.
   *
   * @get get
   * @var bool
   */
  public $is_month = null;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Location key.
   * If not set, location will be taken from booking wizard data.
   *
   * @get get
   * @var string
   * @see RecurringListModel::$s_id
   */
  public $k_location = '';

  /**
   * Unique ID that defines appointment booking wizard.
   *
   * @get get
   * @var string
   */
  public $s_id = null;
}

?>