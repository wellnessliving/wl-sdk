<?php

namespace WellnessLiving\Wl\Schedule\Page;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Virtual\VirtualProviderSid;
use WellnessLiving\Wl\Visit\WlVisitSid;

/**
 * Returns information about a specified visit.
 */
class PageElementModel extends WlModelAbstract
{
  /**
   * Additional visit information about this appointment. Empty array if it's not an appointment. <dl>
   *   <dt>
   *     int <var>id_visit</var>
   *   </dt>
   *   <dd>
   *     Visit status. One of {@link WlVisitSid} constants.
   *   </dd>
   *   <dt>
   *     bool <var>is_confirmed</var>
   *   </dt>
   *   <dd>
   *     `true` means that appointment was requested and confirmed by the staff.
   *   </dd>
   *   <dt>
   *     bool <var>is_deny</var>
   *   </dt>
   *   <dd>
   *     `true` means that appointment was requested and denied by the staff.
   *   </dd>
   *   <dt>
   *     bool <var>is_notify_request_accept</var>
   *   </dt>
   *   <dd>
   *     `true` means that the client will receive a notification, if appointment will be confirmed by the staff.
   *   </dd>
   *   <dt>
   *     bool <var>is_notify_request_deny</var>
   *   </dt>
   *   <dd>
   *     `true` means that the client will receive a notification, if appointment will be denied by the staff.
   *   </dd>
   *   <dt>
   *     bool <var>is_request</var>
   *   </dt>
   *   <dd>
   *     `true` means that appointment was requested, but not confirmed by the staff.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_appointment_visit_info = [];

  /**
   * List of assets: <dl>
   *   <dt>string <var>s_name</var></dt>
   *   <dd>Asset title that consists of the asset title itself concatenated with its index (in case of multiple assets) by '#'.</dd>
   *   <dt>string <var>i_count</var></dt>
   *   <dd>Number of sessions.</dd>
   * </dl>.
   *
   * @get result
   * @var array[]
   */
  public $a_asset;

  /**
   * Class data:<dl>
   *   <dt>int <var>i_book_active</var></dt>
   *   <dd>A total number of booked visits in the class, including all lists: active and waitlist.</dd>
   *   <dt>int <var>i_capacity</var></dt>
   *   <dd>Class capacity.</dd>
   *   <dt>int <var>i_wait</var></dt>
   *   <dd>A total number of booked visits in the waitlist.</dd>
   * </dl>
   *
   * <tt>null</tt> if it isn't class visit.
   *
   * @get result
   * @var array|null
   */
  public $a_class_info;

  /**
   * A list of staff members involved in the visit.
   * Each element is an array with the following elements:
   * <dl>
   *   <dt>
   *     string <var>k_staff</var>
   *   </dt>
   *   <dd>
   *     The staff member key.
   *   </dd>
   *   <dt>
   *     string <var>s_family</var>
   *   </dt>
   *   <dd>
   *     The surname of the staff member.
   *   </dd>
   *   <dt>
   *     string <var>s_name</var>
   *   </dt>
   *   <dd>
   *     The first name of the staff member.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_staff;

  /**
   * The latest date and time for when the visit can be canceled without penalty.
   *
   * @get result
   * @var string
   */
  public $dt_cancel;

  /**
   * The date and time of the visit in UTC.
   *
   * @get result
   * @var string
   */
  public $dt_date_global;

  /**
   * The date and time of the visit in the local time zone.
   *
   * @get result
   * @var string
   */
  public $dt_date_local;

  /**
   * Session date/time in timezone of the location where it takes place.
   *
   * @get result
   * @var string
   */
  public $dtl_location;

  /**
   * The description of the service.
   *
   * @get result
   * @var string
   */
  public $html_description;

  /**
   * The special instructions for the service.
   *
   * @get result
   * @var string
   */
  public $html_special;

  /**
   * The scheduled duration of the visit.
   * <tt>0</tt> means that session duration is hidden.
   *
   * @get result
   * @var int
   */
  public $i_duration;

  /**
   * Estimated place of reservation on the waiting list.
   *
   * @get result
   * @var int
   */
  public $i_wait_spot;

  /**
   * The note type ID. This will be set to `null` if notes aren't allowed.
   * This is one of the {@link WlVisitNoteSid} constants.
   *
   * This will be `null` if notes aren't allowed.
   *
   * @get result
   * @var int|null
   */
  public $id_note;

  /**
   * The virtual provider ID. One of the {@link VirtualProviderSid} constants.
   *
   * This will be `null` for non-virtual services.
   *
   * @get result
   * @var int|null
   */
  public $id_virtual_provider;

  /**
   * The visit type ID. One of the {@link WlVisitSid} constants.
   *
   * This will be `null` if not loaded yet.
   *
   * @get result
   * @var int
   */
  public $id_visit;

  /**
   * If `true`, then this visit is ready to be checked in. If `false`, then this visit can't be checked in.
   *
   * @get result
   * @var bool
   */
  public $is_checkin;

  /**
   * This will be `true` if clients can cancel the session. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_enable_client_cancel;

  /**
   * If `true`, then this visit is a part of a larger event. If `false`, then this visit is an individual session.
   *
   * @get result
   * @var bool
   */
  public $is_event;

  /**
   * <tt>true</tt> - service is in progress; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_in_progress;

  /**
   * <tt>true</tt> - service is virtual; <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_virtual;

  /**
   * The appointment key.
   * This will be set only if the visit is an appointment. If the visit is a class or event, this will be `null`.
   *
   * @get result
   * @var string
   */
  public $k_appointment;

  /**
   * Key of the business to which the visit belongs.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The class key. This will be set only if the visit is a class or an event.
   * If the visit is an appointment, this will be `null`.
   *
   * @get result
   * @var ?string
   */
  public $k_class;

  /**
   * The class period key. This will be set only if the visit is a class or an event.
   * If the visit is an appointment, this will be `null`.
   *
   * @get result
   * @var string
   */
  public $k_class_period;

  /**
   * The location key.
   *
   * @get result
   * @var string
   */
  public $k_location;

  /**
   * Session key.
   *
   * @get result
   * @var ?string
   */
  public $k_service;

  /**
   * Visit key.
   *
   * @get get
   * @var string
   */
  public $k_visit = '0';

  /**
   * The name of class or service.
   *
   * @get result
   * @var string
   */
  public $s_title;

  /**
   * Location title.
   *
   * @get result
   * @var string
   */
  public $text_location;

  /**
   * Room where session takes place.
   *
   * @get result
   * @var string
   */
  public $text_room;

  /**
   * Timezone abbreviation.
   *
   * @get result
   * @var string
   */
  public $text_timezone;

  /**
   * The user key.
   *
   * @get result
   * @var string
   */
  public $uid;

  /**
   * Url to wait page is the beginning of an online service.
   *
   * @get result
   * @var string
   */
  public $url_virtual_join;
}

?>