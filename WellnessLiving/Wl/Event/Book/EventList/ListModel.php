<?php

namespace WellnessLiving\Wl\Event\Book\EventList;

use WellnessLiving\Core\a\AFlagSid;
use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves a list of events for a given class tab.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of event identifiers.
   *
   * The order of items in this array matches the order in which elements should be displayed.
   *
   * @get result
   * @var string[]
   */
  public $a_event;

  /**
   * Event availability value.
   *
   * Unavailable events are those that cannot be booked,
   *  but they can be shown to the client (for example, under the "not available" filter).
   *
   * The array contains:
   * * Key - Class (event) key.
   * * Value - Event availability value: `true` - available, `false` - not available.
   *
   * @get result
   * @var array
   */
  public $a_event_available = [];

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
  public $id_status = AFlagSid::ON;

  /**
   * <tt>true</tt> if exist at least one virtual event
   * by specific {@link \WellnessLiving\Wl\Event\Book\EventList\ListModel::$k_business} and
   * {@link \WellnessLiving\Wl\Event\Book\EventList\ListModel::$k_class_tab},
   * <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_virtual_service;

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the category tab.
   * If empty, select only elements with not specified book tab.
   *
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * The user's key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>