<?php

namespace WellnessLiving\Wl\Event;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of events.
 */
class EventListModel extends WlModelAbstract
{
  /**
   * List of events correspond to requested parameters.
   *
   * @get result
   * @var array
   */
  public $a_event_list = [];

  /**
   * End date of the range from which list of events should be retrieved.
   *
   * <tt>null</tt> if range has no end date.
   *
   * @get get
   * @var string
   */
  public $dl_end;

  /**
   * Start date of the range from which list of events should be retrieved.
   *
   * <tt>null</tt> if range has no start date.
   *
   * @get get
   * @var string
   */
  public $dl_start;

  /**
   * Defines how event availability flag filter should be applied.
   *
   * One of {@link \WellnessLiving\Core\a\AFlagSid} constants.
   *
   * * {@link \WellnessLiving\Core\a\AFlagSid::ON} to show only available events.
   * * {@link \WellnessLiving\Core\a\AFlagSid::OFF} to show only not available events.
   * * {@link \WellnessLiving\Core\a\AFlagSid::ALL} to show all events (available and not available).
   *
   * @get get
   * @var int
   */
  public $id_flag = \WellnessLiving\Core\a\AFlagSid::ON;

  /**
   * Whether api endpoint used for backend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend;

  /**
   * Whether need to retrieve list of event sessions regardless tab specified in {@link EventListApi::$k_class_tab}.
   *
   * * <tt>true</tt> - retrieve list regardless specified tab.
   * * <tt>false</tt> - retrieve list only for specific tab.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * Event business key to retrieve list of all event sessions in business.
   *
   * ## Required if {@link EventListApi::$k_location} is not specified.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Event class key to retrieve list of all event sessions of specific class.
   *
   * @get get
   * @var string
   */
  public $k_class;

  /**
   * Class tab key to retrieve list of event sessions from specific tab only.
   * Empty value to retrieve list of event sessions that do not belongs to any tab.
   *
   * ## Will be ignored in next cases:
   * * {@link EventListApi::$k_skin} specified.
   * * {@link EventListApi::$is_tab_all} is <tt>true</tt>.
   *
   * @get get
   * @var string
   */
  public $k_class_tab;

  /**
   * Event location key to retrieve list of all event sessions in specific location.
   *
   * ## Required if {@link EventListApi::$k_business} is not specified.
   *
   * @get get
   * @var string
   */
  public $k_location;

  /**
   * Skin key if event list used for widget mode.
   *
   * {@link EventListApi::$k_class_tab} will be ignored for widget mode.
   *
   * @get get
   * @var string
   */
  public $k_skin;

  /**
   * User key.
   * Required to apply rules based on specific user, for example age restrictions.
   *
   * @get get
   * @var string
   */
  public $uid;
}

?>