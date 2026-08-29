<?php

namespace WellnessLiving\Wl\Schedule\Page;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Resource\Image\ImageIconSid;
use WellnessLiving\Wl\Resource\Image\ImageShapeSid;
use WellnessLiving\Wl\Resource\Image\ImageSid;
use WellnessLiving\Wl\Virtual\VirtualProviderSid;
use WellnessLiving\Wl\Visit\WlVisitSid;

/**
 * Returns information about a specified visit.
 *
 * @method WlModelRequest get() Retrieves information about one element of schedule.  Returns full details for a single visit, including staff, location, timing, assigned assets, virtual join URL, and class-specific or appointment-specific information. Used to render the visit detail page in the client's schedule view.
 */
class PageElementModel extends WlModelAbstract
{
  /**
   * Additional visit information about this appointment. Empty array if it's not an appointment. 
   *
   * <dl>
   *   <dt>int `id_visit`</dt>
   *   <dd>Visit status. One of {@link WlVisitSid} constants.</dd>
   * 
   *   <dt>bool `is_confirmed`</dt>
   *   <dd>`true` means that appointment was requested and confirmed by the staff.</dd>
   * 
   *   <dt>bool `is_deny`</dt>
   *   <dd>`true` means that appointment was requested and denied by the staff.</dd>
   * 
   *   <dt>bool `is_notify_request_accept`</dt>
   *   <dd>`true` means that the client will receive a notification, if appointment will be confirmed by the staff.</dd>
   * 
   *   <dt>bool `is_notify_request_deny`</dt>
   *   <dd>`true` means that the client will receive a notification, if appointment will be denied by the staff.</dd>
   * 
   *   <dt>bool `is_request`</dt>
   *   <dd>`true` means that appointment was requested, but not confirmed by the staff.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_appointment_visit_info = [];

  /**
   * List of assets: .
   *
   * <dl>
   *   <dt>string `s_name`</dt>
   *   <dd>
   *     Asset title that consists of the asset title itself concatenated with its index (in case of multiple assets) by '#'.
   *   </dd>
   * 
   *   <dt>int `i_count`</dt>
   *   <dd>Number of sessions.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_asset;

  /**
   * Class data:
   *
   * <tt>null</tt> if it isn't class visit.
   *
   * <dl>
   *   <dt>int `i_book_active`</dt>
   *   <dd>A total number of booked visits in the class, including all lists: active and waitlist.</dd>
   * 
   *   <dt>int `i_capacity`</dt>
   *   <dd>Class capacity.</dd>
   * 
   *   <dt>int `i_wait`</dt>
   *   <dd>A total number of booked visits in the waitlist.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_class_info = null;

  /**
   * Resource image data.
   *
   * `null` for all services except resources.
   *
   * <dl>
   *   <dt>array `a_image`</dt>
   *   <dd>
   *     Image data. 
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>Actual height of thumbnail image.</dd>
   * 
   *       <dt>int `i_height_src`</dt>
   *       <dd>Height of original image.</dd>
   * 
   *       <dt>int `i_rotate`</dt>
   *       <dd>Angle on which image was rotated compared to the original.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>Actual width of thumbnail image.</dd>
   * 
   *       <dt>int `i_width_src`</dt>
   *       <dd>Width of original image.</dd>
   * 
   *       <dt>bool `is-resize`</dt>
   *       <dd>Whether thumbnail is a resized variant of original image. If `false`, `url-thumbnail`
   * equals `url-view`.</dd>
   * 
   *       <dt>string `url-view`</dt>
   *       <dd>URL to original image in file storage.</dd>
   * 
   *       <dt>string `url-thumbnail`</dt>
   *       <dd>
   *         URL to resized and rotated image in file storage. If the original is larger than
   * the specified dimensions, a thumbnail is created and its link is returned. Otherwise,
   * the link to the original image is returned here.
   *       </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_angle`</dt>
   *   <dd>Angle of shape rotation. Is set only if `sid_image` equals to `shape`.</dd>
   * 
   *   <dt>int `i_height`</dt>
   *   <dd>Height of image.</dd>
   * 
   *   <dt>int `i_width`</dt>
   *   <dd>Width of image.</dd>
   * 
   *   <dt>bool `is_empty`</dt>
   *   <dd>Whether is empty.</dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>Resource key.</dd>
   * 
   *   <dt>string `sid_image`</dt>
   *   <dd>Image kind. String representation of one of {@link ImageSid} constants.</dd>
   * 
   *   <dt>string `sid_image_icon`</dt>
   *   <dd>
   *     Icon name. String representation of one of {@link ImageIconSid} constants.
   * Is set only if `sid_image` equals to `image`.
   *   </dd>
   * 
   *   <dt>string `sid_image_shape`</dt>
   *   <dd>
   *     Shape name. String representation of one of {@link ImageShapeSid} constants.
   * Is set only if `sid_image` equals to `shape`.
   *   </dd>
   * 
   *   <dt>string `url`</dt>
   *   <dd>Path to image. </dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_resource_image = null;

  /**
   * A list of staff members involved in the visit.
   * Each element is an array with the following elements:
   *
   * <dl>
   *   <dt>string `uid_staff`</dt>
   *   <dd>The staff user key. </dd>
   * 
   *   <dt>string `k_staff`</dt>
   *   <dd>
   *     Deprecated staff key.
   *   </dd>
   * 
   *   <dt>string `s_family`</dt>
   *   <dd>The surname of the staff member.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>The first name of the staff member.</dd>
   * 
   *   <dt>string `s_name_full`</dt>
   *   <dd>The full name of the staff member.</dd>
   * </dl>
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
   * Capacity of the service.
   * <tt>null</tt> indicates that the capacity is not set.
   *
   * @get result
   * @var int|null
   */
  public $i_capacity = null;

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
   * This will be set only if the visit is an appointment.
   *
   * If the visit is a class or event, this will be `null`.
   *
   * @get result
   * @var string|null
   */
  public $k_appointment;

  /**
   * Key of the business to which the visit belongs.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The class key. This will be set only if the visit is a class or an event.
   * If the visit is an appointment, this will be `null`.
   *
   * @get result
   * @var string|null
   */
  public $k_class = null;

  /**
   * The class period key. This will be set only if the visit is a class or an event.
   *
   * If the visit is an appointment, this will be `null`.
   *
   * @get result
   * @var string|null
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
   * Resource key.
   *
   * @get result
   * @var string|null
   */
  public $k_resource;

  /**
   * Session key.
   *
   * @get result
   * @var string|null
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
   * Location title. If the visit is assigned a resource whose category is {@link ResourceCategoryEnum::LOCATION},
   * this is that resource's title instead of the actual location's title.
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
   * URL of the image representing the service or resource.
   *
   * @get result
   * @var string
   */
  public $url_image = '';

  /**
   * Url to wait page is the beginning of an online service.
   *
   * @get result
   * @var string
   */
  public $url_virtual_join;
}

?>