<?php

namespace WellnessLiving\Wl\Event\Book\EventView;

use WellnessLiving\Wl\Business\Config\BusinessConfigModel;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about event element.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Retrieves information about event item.
   *
   * Received only if {@link ElementModel::$k_event} has been specified. In this case other fields are not receiver.
   *
   * Keys of this array - event keys.
   * Values of this array - sub arrays with keys that corresponds to all fields in this table that may be received.
   *
   * <tt>null</tt> until received from server.
   *
   * @get result
   * @var array|null
   */
  public $a_book_available = null;

  /**
   * All business policies connected to clients and bookings.
   *
   * Has the same structure as this property {@link BusinessConfigModel::$a_business_policy}.
   *
   * If policies are overwritten for the certain event, then this event policies will be in the result.
   * Business policies will be otherwise.
   *
   * @get result
   * @var array
   */
  public $a_business_policy = [];

  /**
   * Logo of event.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_class_logo = null;

  /**
   * Information for a bulk of events.
   *
   * Received only if {@link ElementModel::$s_event} has been specified. In this case other fields are not receiver.
   *
   * Keys of this array - event keys.
   * Values of this array - sub arrays with keys that corresponds to all fields in this table that may be received.
   *
   * <tt>null</tt> until received from server.
   *
   * @get result
   * @var array|null
   */
  public $a_event = null;

  /**
   * List of event sessions. Every element has next keys:
   * <dl>
   *   <dt>
   *     array <var>a_day</var>
   *   </dt>
   *   <dd>
   *     List of week days when session is occurred.
   *     Keys - a number corresponding to a week day (0 - Sunday, 6 - Saturday). The value is always <tt>true</tt>.
   *   </dd>
   *   <dt>
   *     array[] <var>a_staff</var>
   *   </dt>
   *   <dd>
   *     List of staff who conduct session. Every element has next keys:
   *     <dl>
   *       <dt>string <var>k_staff</var></dt>
   *       <dd>Staff key.</dd>
   *       <dt>string <var>s_name</var></dt>
   *       <dd>Staff name.</dd>
   *       <dt>string <var>s_surname</var></dt>
   *       <dd>First letter of staff surname.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>dt_end</var>
   *   </dt>
   *   <dd>
   *     End date of session.
   *     Local date without time.
   *   </dd>
   *   <dt>
   *     string <var>dt_start</var>
   *   </dt>
   *   <dd>
   *     Start date of session.
   *     Local date without time.
   *   </dd>
   *   <dt>
   *     int <var>i_capacity</var>
   *   </dt>
   *   <dd>
   *     Class capacity.
   *   </dd>
   *   <dt>
   *     int <var>i_duration</var>
   *   </dt>
   *   <dd>
   *     Duration of class in seconds.
   *   </dd>
   *   <dt>
   *     string <var>s_location</var>
   *   </dt>
   *   <dd>
   *     Location title.
   *   </dd>
   *   <dt>
   *     string <var>s_time</var>
   *   </dt>
   *   <dd>
   *     Time when session is occurred.
   *     A textual representation of the start and end time of a session. Example: <tt>10:00 am - 11:00 am<tt>
   *   </dd>
   * </dl>
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_schedule = null;

  /**
   * Photos of staff. Keys - IDs of staff; values - {@link Wl_Event_Book_EventView_ElementModel_a_staff_logo} objects.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_staff_logo = null;

  /**
   * List of classes and events, which client should visit before this one.
   *
   * <dl>
   *   <dt>int <var>i_count</var></dt>
   *   <dd>Number of visits.</dd>
   *   <dt>bool <var>is_event</var></dt>
   *   <dd>`true` if this is an event, `false` if this is a class.</dd>
   *   <dt>string <var>k_class</var></dt>
   *   <dd>Key of the class or event.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Name of the class or event.</dd>
   * </dl>
   *
   * @get get
   * @var array[]
   */
  public $a_visits_required;

  /**
   * Book available end date.
   * If is set and {@link \WellnessLiving\Wl\Event\Book\EventView\ElementModel::$dl_book_available_start} is set list of
   *   sessions available for booking {@link \WellnessLiving\Wl\Event\Book\EventView\ElementModel::$a_book_available}
   *   should match given date range.
   *
   * @get get
   * @var string|null
   */
  public $dl_book_available_end = null;

  /**
   * Book available start date.
   * If is set and {@link \WellnessLiving\Wl\Event\Book\EventView\ElementModel::$dl_book_available_end} is set list of
   *   sessions available for booking {@link \WellnessLiving\Wl\Event\Book\EventView\ElementModel::$a_book_available}
   *   should match given date range.
   *
   * @get get
   * @var string|null
   */
  public $dl_book_available_start = null;

  /**
   * Date which should be used to go to booking wizard.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_book_date = null;

  /**
   * Early date of the event.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_early = null;

  /**
   * End date of the event.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_end = null;

  /**
   * Start date of the event.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $dt_start = null;

  /**
   * Special instruction for event.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $html_special = null;

  /**
   * Session count.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var int|null
   */
  public $i_session = null;

  /**
   * Virtual provider ID. One of {@link \Wl\Virtual\VirtualProviderSid} constants.
   *
   * <tt>null</tt> for not virtual events.
   *
   * @get result
   * @var int|null
   */
  public $id_virtual_provider=null;

  /**
   * <tt>true</tt> - event is already booked; <tt>false</tt> - event is not booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var bool|null
   */
  public $is_book = null;

  /**
   * <tt>true</tt> if there are no free spots in the event; booking is available only into wait list.
   * <tt>false</tt> otherwise.
   *
   * <tt>null</tt> until got from server.
   *
   * @get result
   * @var bool|null
   */
  public $is_full = null;

  /**
   * `true` if event can be paid with pricing option only.
   * `false` if full event purchase or single session purchase are allowed.
   *
   * @get result
   * @var bool
   */
  public $is_promotion_only;

  /**
   * Whether this event allows paying for single session.
   *
   * @get result
   * @var bool
   */
  public $is_single_session_buy;

  /**
   * ID of session which should be used to go to booking wizard.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $k_book_class_period = null;

  /**
   * Event identifier.
   * You can specify {@Link ElementModel::$s_event} instead to get information for a bulk of events.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_event = null;

  /**
   * Price of the single session of the event.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $m_price = null;

  /**
   * Price of the all sessions of the event.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $m_price_total = null;

  /**
   * Early price of the all sessions of the event.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $m_price_total_early = null;

  /**
   * Reason why event can not be booked.
   * Empty if {@link Wl_Event_Book_EventView_ElementModel.k_class_period} is not empty.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $s_deny_reason = null;

  /**
   * List of events keys serialized with JSON.
   * Specify instead of {@link ElementModel::$k_event} to get information for a bulk of events.
   *
   * @get get
   * @var string
   */
  public $s_event = '';

  /**
   * Title of the event.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $s_title = null;

  /**
   * User ID.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;

  /**
   * Description of the event.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $xml_description = null;
}

?>