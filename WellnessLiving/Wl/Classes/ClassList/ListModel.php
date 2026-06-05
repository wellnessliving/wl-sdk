<?php

namespace WellnessLiving\Wl\Classes\ClassList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Classes\Tab\TabSid;

/**
 * List of classes and events.
 */
class ListModel extends WlModelAbstract
{
  /**
   * List of classes and events.
   *
   * The result may depend on the following flags:
   * * {@link ListModel::$is_enrollment_block_all}
   * * {@link ListModel::$is_enrollment_block_empty}
   *
   * Each element has the following structure:
   * <dl>
   *
   *   <dt>string[] <var>a_class_tab</var></dt>
   *   <dd>
   *     List of class book now tabs, where this class is presented. Each element is       or `null` if class is presented in default system tab Classes. Events can also be added in class tabs.
   *   </dd>
   *   <dt>string[] <var>a_event_tab</var></dt>
   *   <dd>
   *     List of event book now tabs, where this event is presented. Each element is        or `null` if event is presented in default system tab Enrollments. Classes cannot be added in event tabs.
   *   </dd>`
   *   <dt>string <var>dl_end</var></dt>
   *   <dd>
   *     The ending date of the class/event.
   *     Maybe a zero date if the class is ongoing (has no end date).
   *   </dd>
   *   <dt>string <var>dl_start</var></dt>
   *   <dd>
   *     The starting date of the class/event.
   *   </dd>
   *   <dt>
   *     bool <var>is_active</var>
   *   </dt>
   *   <dd>
   *     Whether class/event is active.
   *   </dd>
   *   <dt>
   *     bool <var>is_event</var>
   *   </dt>
   *   <dd>
   *     Define if current element is event.<tt>true</tt> - event, <tt>false</tt> - class.
   *   </dd>
   *   <dt>
   *     bool <var>is_remove</var>
   *   </dt>
   *   <dd>
   *     Whether class/event is removed.
   *   </dd>
   *   <dt>
   *     string <var>k_class</var>
   *   </dt>
   *   <dd>
   *     Class/event identifier.    </dd>
   *   <dt>
   *     string <var>k_enrollment_block</var>
   *   </dt>
   *   <dd>
   *     Event Block ID.    </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     Class/event name.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_class;

  /**
   * List of tabs keys.
   * Filtering by Book Now Tab is not supported if {@link ListModel::$is_franchise} is `true`.
   *
   * `null` if no filtering by Book Now Tab is required.
   *
   * @get get
   * @var string[]|null
   */
  public $a_class_tab = null;

  /**
   * ID of book now tab. One of {@link TabSid} constants.
   * Only {@link TabSid::TRAINING} and {@link TabSid::ENROLLMENT} book now tab are supported.
   * Filtering by Book Now Tab is not supported if {@link ListModel::$is_franchise} is `true`.
   *
   * `null` if no filtering by Book Now Tab is required.
   *
   * @get get
   * @var int|null
   */
  public $id_class_tab = null;

  /**
   * Whether all events should be returned from same enrollment block.
   *
   * * <tt>true</tt> to return all events from same enrollment block.
   * * <tt>false</tt> to return only one event from each enrollment block.
   *
   * Only published and non-empty events will be returned for the client.
   * To return empty events, use {@link ListModel::$is_enrollment_block_empty}.
   *
   * For the staff, filtering by publication or emptiness is not applied.
   *
   * @get get
   * @var bool
   */
  public $is_enrollment_block_all = false;

  /**
   * Whether to include events without sessions.
   * An empty event is neither published nor unpublished. It simply has no sessions.
   * Such events can be useful for list filters.
   *
   * Affects clients only.
   * Does not affect staff. Staff always see empty events.
   *
   * Makes sense in conjunction with the flag {@link ListModel::$is_enrollment_block_all}.
   *
   * * <tt>true</tt> to include events without sessions.
   * * <tt>false</tt> to exclude events without sessions.
   *
   * @get get
   * @var bool
   */
  public $is_enrollment_block_empty = false;

  /**
   * Whether to include events in the result.
   *
   * true` to include both classes and events.
   * false` to include only classes.
   *
   * @get get
   * @var bool
   */
  public $is_event_include = true;

  /**
   * Whether to return franchisee-created classes (if business is franchisor).
   * <tt>true</tt> to include franchisee-created classes.
   *
   * @get get
   * @var bool
   */
  public $is_franchise = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>