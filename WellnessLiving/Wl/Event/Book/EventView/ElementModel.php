<?php

namespace WellnessLiving\Wl\Event\Book\EventView;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about event element.
 */
class ElementModel extends WlModelAbstract
{
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
   * List of event sessions.
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
   * <tt>true</tt> - event is already booked; <tt>false</tt> - event is not booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var bool|null
   */
  public $is_book = null;

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