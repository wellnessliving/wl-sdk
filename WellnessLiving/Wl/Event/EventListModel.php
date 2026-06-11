<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\Core\Sid\YesNoSid;
use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlScheduleTimeSid;

/**
 * Retrieves a list of events that fit the given filter parameters.
 */
class EventListModel extends WlModelAbstract
{
  /**
   * List of class keys applied by filter.
   *
   * @get get
   * @var string[]|null
   */
  public $a_class_filter = null;

  /**
   * List of day the week applied by filter {@link ADateWeekSid}.
   *
   * @get get
   * @var string[]|null
   */
  public $a_day = null;

  /**
   * List of enrollment blocks keys applied by filter.
   *
   * @get get
   * @var string[]|null
   */
  public $a_enrollment_block_filter = null;

  /**
   * List of available enrollment blocks matching the requested parameters.
   *
   * Key is the enrollment block key.  Value is the title of the first event found in that enrollment block.
   *
   * @get result
   * @var string[]
   */
  public $a_enrollment_block_list = [];

  /**
   * A list of events corresponding to requested parameters.
   *
   * @get result
   * @var array[]
   */
  public $a_event_list = [];

  /**
   * List of location keys applied by filter.
   *
   * @get get
   * @var string[]|null
   */
  public $a_location = null;

  /**
   * List of staff keys applied by filter.
   *
   * @get get
   * @var string[]|null
   */
  public $a_staff = null;

  /**
   * List of time day applied by filter {@link WlScheduleTimeSid}.
   *
   * @get get
   * @var string[]|null
   */
  public $a_time = null;

  /**
   * List of IDs to include/exclude virtual events.
   * If the only ID is {@link YesNoSid::YES}, only virtual events are included.
   * If the only ID is {@link YesNoSid::NO}, only in-person events are included.
   * Otherwise, no filtering is done.
   *
   * @get get
   * @var string[]|null
   */
  public $a_virtual = null;

  /**
   * The end date of the range from which a list of events should be retrieved.
   *
   * <tt>null</tt> if the range has no end date.
   *
   * @get get
   * @var string|null
   */
  public $dl_end = null;

  /**
   * The start date of the range from which a list of events should be retrieved.
   *
   * <tt>null</tt> if the range has no start date.
   *
   * @get get
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Defines how the event availability flag filter should be applied.
   *
   * One of {@link AFlagSid} constants.
   *
   * * {@link AFlagSid::ON} to show only available events.
   * * {@link AFlagSid::OFF} to show only unavailable events.
   * * {@link AFlagSid::ALL} to show all events (available and unavailable).
   *
   * @get get
   * @var int
   */
  public $id_flag = 3;

  /**
   * Determines whether the endpoint is used for backend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Model cache reset flag.
   *
   * @put post
   * @var bool
   */
  public $is_cache_reset = false;

  /**
   * `true` to show even event restricted by booking policies; `false` to show available events only.
   *
   * @get get
   * @var bool
   */
  public $is_ignore_requirement = false;

  /**
   * Determines whether you need to retrieve a list of event sessions regardless of the tab specified in {@link EventListModel::$k_class_tab}.
   *
   * * <tt>true</tt> - retrieves a list regardless of the specified tab.
   * * <tt>false</tt> - retrieves a list only for the specific tab.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * The event business key to retrieve a list of all event sessions in business.
   *
   * `null` to retrieve events from {@link EventListModel::$k_location}.
   *
   * @get get
   * @put get
   * @var string|null
   */
  public $k_business = null;

  /**
   * The event class key to retrieve a list of all event sessions of a specific class.
   * `null` to retrieve a list of event sessions of all classes.
   *
   * @get get
   * @var string|null
   */
  public $k_class = null;

  /**
   * The class tab key to retrieve a list of event sessions from a specific tab only.
   * An empty value to retrieve a list of event sessions that don't belong to any tab.
   *
   * Will be ignored in next cases:
   * * {@link EventListModel::$k_skin} specified.
   * * {@link EventListModel::$is_tab_all} is <tt>true</tt>.
   *
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * The event location key to retrieve a list of all event sessions in a specific location.
   *
   * Required if {@link EventListModel::$k_business} isn't specified.
   * `null` if you need to retrieve a list of event sessions in all locations of {@link EventListModel::$k_business}.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The skin key if an event list is used for widget mode.
   *
   * {@link EventListModel::$k_class_tab} will be ignored for widget mode.
   *
   * @get get
   * @var string
   */
  public $k_skin = '0';

  /**
   * Search string to filter events by name.
   *
   * @get get
   * @var string
   */
  public $text_search = '';

  /**
   * The user key.
   * Required to apply specific user rules such as age restrictions.
   *
   * @get get
   * @put get
   * @var string|null
   */
  public $uid = '0';
}

?>