<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves a list of events that fit the given filter parameters.
 */
class EventListModel extends WlModelAbstract
{
  /**
   * A list of events corresponding to requested parameters.
   *
   * @get result
   * @var array
   */
  public $a_event_list = [];

  /**
   * The end date of the range from which a list of events should be retrieved.
   *
   * <tt>null</tt> if the range has no end date.
   *
   * @get get
   * @var string
   */
  public $dl_end;

  /**
   * The start date of the range from which a list of events should be retrieved.
   *
   * <tt>null</tt> if the range has no start date.
   *
   * @get get
   * @var string
   */
  public $dl_start;

  /**
   * Defines how the event availability flag filter should be applied.
   *
   * One of {@link \WellnessLiving\Core\a\AFlagSid} constants.
   *
   * * {@link \WellnessLiving\Core\a\AFlagSid::ON} to show only available events.
   * * {@link \WellnessLiving\Core\a\AFlagSid::OFF} to show only unavailable events.
   * * {@link \WellnessLiving\Core\a\AFlagSid::ALL} to show all events (available and unavailable).
   *
   * @get get
   * @var int
   */
  public $id_flag = \WellnessLiving\Core\a\AFlagSid::ON;

  /**
   * Determines whether the endpoint is used for backend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend;

  /**
   * `true` to show even event restricted by booking policies; `false` to show available events only.
   *
   * @get get
   * @var bool
   */
  public $is_ignore_requirement = false;

  /**
   * Determines whether you need to retrieve a list of event sessions regardless of the tab specified in {@link EventListApi::$k_class_tab}.
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
   * Required if {@link EventListApi::$k_location} isn't specified.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The event class key to retrieve a list of all event sessions of a specific class.
   *
   * @get get
   * @var string
   */
  public $k_class;

  /**
   * The class tab key to retrieve a list of event sessions from a specific tab only.
   * An empty value to retrieve a list of event sessions that don't belong to any tab.
   *
   * Will be ignored in next cases:
   * * {@link EventListApi::$k_skin} specified.
   * * {@link EventListApi::$is_tab_all} is <tt>true</tt>.
   *
   * @get get
   * @var string
   */
  public $k_class_tab;

  /**
   * The event location key to retrieve a list of all event sessions in a specific location.
   *
   * Required if {@link EventListApi::$k_business} isn't specified.
   *
   * @get get
   * @var string
   */
  public $k_location;

  /**
   * The skin key if an event list is used for widget mode.
   *
   * {@link EventListApi::$k_class_tab} will be ignored for widget mode.
   *
   * @get get
   * @var string
   */
  public $k_skin;

  /**
   * The user key.
   * Required to apply specific user rules such as age restrictions.
   *
   * @get get
   * @var string
   */
  public $uid;
}

?>