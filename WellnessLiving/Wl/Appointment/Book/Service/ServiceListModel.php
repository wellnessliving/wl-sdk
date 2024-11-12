<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Service\ServicePriceSid;
use WellnessLiving\Wl\Service\ServiceRequireSid;

/**
 * Retrieves information about services in the current service category.
 *
 * @deprecated New version {@link ServiceList52Model} should be used instead.
 */
class ServiceListModel extends WlModelAbstract
{
  /**
   * The class tab key to use to filter services. If empty, this can be found on the standard book tab.
   *
   * If multiple tabs are sent, appointment types, which are in at least in one of the tabs, will be in the result.
   *
   * @get get
   * @var string[]
   */
  public $a_class_tab = [];

  /**
   * A list of services with information about them.
   *
   * <b>Key</b> - the service key.
   * <b>Value</b> - an array, with every element consisting of the next keys:
   * <dl>
   *   <dt>
   *     array <var>a_class_tab</var>
   *   </dt>
   *   <dd>
   *     The list of tab keys for the service.
   *   </dd>
   *   <dt>
   *     array[] <var>a_direct_link</var>
   *   </dt>
   *   <dd>
   *     A list of links to start booking from a direct link.
   *     This can't be one link, as the same appointment can be available in several booking tabs.
   *     Therefore, each booking tab has its own direct booking link.
   *     Each element has two values:
   *     <dl>
   *       <dt>string <var>k_class_tab</var></dt>
   *       <dd>The key of the book now tab.</dd>
   *       <dt>string <var>url_tab</var></dt>
   *       <dd>The booking URL. This will open the booking wizard under the related booking tab.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array <var>a_config</var>
   *   </dt>
   *   <dd>
   *     Appointment-specific business policies. This will be `null` when using the general business policy.
   *   </dd>
   *   <dt>
   *     array <var>a_image</var>
   *   </dt>
   *   <dd>
   *     Information about the appointment image. An array with the following values:
   *     <dl>
   *       <dt>int <var>i_height</var></dt>
   *       <dd>The height of the image.</dd>
   *       <dt>int <var>i_width</var></dt>
   *       <dd>The width of the image.</dd>
   *       <dt>bool <var>is_empty</var></dt>
   *       <dd>This will be `true` if the image is not set.</dd>
   *       <dt>string <var>k_service</var></dt>
   *       <dd>The service key.</dd>
   *       <dt>string <var>s_service</var></dt>
   *       <dd>The name of the service.</dd>
   *       <dt>string <var>s_url</var></dt>
   *       <dd>The URL to the image.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array <var>a_login_type_restriction</var>
   *   </dt>
   *   <dd>
   *     Keys are login type keys, primary keys in {@link \Wl\Login\Type\Sql}, values - List of login types' titles for
   *     current service. Clients that have one of these types can book service.
   *   </dd>
   *   <dt>
   *     string[] <var>a_member_group_restriction</var>
   *   </dt>
   *   <dd>
   *     Keys are member group keys, primary keys in {@link \Wl\Member\Group\Sql}, values - list of member groups' titles
   *     for current service. Clients that belongs to these groups can book service.
   *   </dd>
   *   <dt>
   *     string <var>f_deposit</var>
   *   </dt>
   *   <dd>
   *     The amount of deposit required.
   *   </dd>
   *   <dt>
   *     string <var>f_offline_max</var>
   *   </dt>
   *   <dd>
   *     The maximum offline price.
   *   </dd>
   *   <dt>
   *     string <var>f_offline_min</var>
   *   </dt>
   *   <dd>
   *     The minimum offline price.
   *   </dd>
   *   <dt>
   *     string <var>f_online</var>
   *   </dt>
   *   <dd>
   *     The online price.
   *   </dd>
   *   <dt>
   *     bool <var>hide_application</var>
   *   </dt>
   *   <dd>
   *      Determines whether the service will be hidden in the White Label mobile application.
   *      `true` means that service won't be displayed. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     int <var>i_age_from</var>
   *   </dt>
   *   <dd>
   *     The required minimum client age to book an appointment.
   *   </dd>
   *   <dt>
   *     int <var>i_age_to</var>
   *   </dt>
   *   <dd>
   *     The required maximum client age to book an appointment.
   *   </dd>
   *   <dt>
   *     int <var>i_price</var>
   *   </dt>
   *   <dd>
   *     The price type ID. One of {@link ServicePriceSid} constants.
   *   </dd>
   *   <dt>
   *     int <var>i_duration</var>
   *   </dt>
   *   <dd>
   *     The appointment duration in minutes.
   *   </dd>
   *   <dt>
   *     int <var>id_book_flow</var>
   *   </dt>
   *   <dd>
   *     The type of client booking flow.
   *   </dd>
   *   <dt>
   *     int <var>id_service_require</var>
   *   </dt>
   *   <dd>
   *     The required payment type ID. One of {@link ServiceRequireSid} constants.
   *   </dd>
   *   <dt>
   *     bool <var>is_age_public</var>
   *   </dt>
   *   <dd>
   *     `true` if age restrictions are public. Otherwise, `false` if they should be hidden from clients.
   *   </dd>
   *   <dt>
   *     bool <var>is_age_restricted</var>
   *   </dt>
   *   <dd>
   *     Determines whether this service can't be booked due to age restrictions.
   *   </dd>
   *   <dt>
   *     bool <var>is_back_to_back</var>
   *   </dt>
   *   <dd>
   *      Determines whether this service supports back-to-back booking.
   *   </dd>
   *   <dt>
   *     bool <var>is_bookable</var>
   *   </dt>
   *   <dd>
   *     Whether this appointment can be booked online.
   *   </dd>
   *   <dt>
   *     bool <var>is_book_repeat_client</var>
   *   </dt>
   *   <dd>
   *     `true` if clients can book classes and appointments on a recurring basis. Otherwise, this `false`.
   *   </dd>
   *   <dt>
   *     bool <var>is_book_repeat_no_end_date_appointment</var>
   *   </dt>
   *   <dd>
   *    `true` if appointment bookings default to weekly recurring with no end date, `false` otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_deposit_percent</var>
   *   </dt>
   *   <dd>
   *     `true` if <var>f_deposit</var> is a percentage. Otherwise, this will be `false` if <var>f_deposit</var> is an amount of
   *     money.
   *   </dd>
   *   <dt>
   *     bool <var>is_gender_select</var>
   *   </dt>
   *   <dd>
   *     `true` if clients can select the staff member's gender. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     bool <var>is_online_sell</var>
   *   </dt>
   *   <dd>
   *     `true` if clients can buy this appointment. Otherwise, this will be `false` if only staff members can sell it.
   *   </dd>
   *   <dt>
   *     bool <var>is_resource_type</var>
   *   </dt>
   *   <dd>
   *     `true` if the service requires assets. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     bool <var>is_single_buy</var>
   *   </dt>
   *   <dd>
   *     `true` if the appointment can be booked without a Purchase Option. Otherwise, this will be `false` if it's necessary to
   *     buy a Purchase Option.
   *   </dd>
   *   <dt>
   *     bool <var>is_staff_confirm</var>
   *   </dt>
   *   <dd>
   *     `true` if the appointment must be confirmed by a staff member after booking. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     bool <var>is_staff_skip</var>
   *   </dt>
   *   <dd>
   *     `true` if clients can select a staff member for the appointment. Otherwise, this will be `false` if otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_question</var>
   *   </dt>
   *   <dd>
   *     Determines whether the service will ask for questions or not.
   *   </dd>
   *   <dt>
   *     bool <var>is_virtual</var>
   *   </dt>
   *   <dd>
   *     `true` if the service is virtual. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     string <var>k_service</var>
   *   </dt>
   *   <dd>
   *     The appointment primary key.
   *   </dd>
   *   <dt>
   *     string <var>k_service_category</var>
   *   </dt>
   *   <dd>
   *     The service category primary key.
   *   </dd>
   *   <dt>
   *     string <var>s_duration</var>
   *   </dt>
   *   <dd>
   *     The appointment duration in a human-readable format.
   *   </dd>
   *   <dt>
   *     string <var>s_service</var>
   *   </dt>
   *   <dd>
   *     The appointment title.
   *   </dd>
   *   <dt>
   *     string <var>text_age_restriction</var>
   *   </dt>
   *   <dd>
   *     Age restriction header.
   *   </dd>
   *   <dt>
   *     string <var>xml_description</var>
   *   </dt>
   *   <dd>
   *     Appointment description (deprecated, use `html_description`).
   *   </dd>
   *   <dt>
   *     string <var>xml_description_short</var>
   *   </dt>
   *   <dd>
   *     Appointment short description (deprecated, use `html_description_short`).
   *   </dd>
   *   <dt>
   *     string <var>xml_special</var>
   *   </dt>
   *   <dd>
   *      Special instructions (deprecated, use `html_special`).
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_service = null;

  /**
   * List of user keys to book appointments.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int|null
   */
  public $i_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int|null
   */
  public $i_width = 0;

  /**
   * `true` - return all active services for a certain location.
   * `false` - return only services that are associated with a book now tab.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Whether services allow multiple appointment booking.
   *
   * @get result
   * @var bool
   */
  public $is_multiple_booking;

  /**
   * `true` - search in all tabs.
   * `false` - search only on the selected book now tab.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * The class tab key to filter services. If empty or `0`, this can be found on the standard book now tab.
   *
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of a service category to show information for.
   *
   * @get get
   * @var string
   */
  public $k_service_category = '0';

  /**
   * The user key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>