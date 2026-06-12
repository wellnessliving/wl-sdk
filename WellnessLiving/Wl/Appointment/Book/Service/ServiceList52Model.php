<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Service\ServiceBookFlowSid;
use WellnessLiving\Wl\Service\ServicePriceSid;
use WellnessLiving\Wl\Service\ServiceRequireSid;

/**
 * Retrieves information about services in the current service category.
 *
 * This is a new version of the {@link ServiceListModel} endpoint.
 * It allows for filtering a list of services by multiple book now tabs.
 */
class ServiceList52Model extends WlModelAbstract
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
   *
   * @get result
   * @var array
   */
<dl>
  <dt>string[] `a_class_tab`</dt>
  <dd>The list of tab keys for the service.</dd>

  <dt>array[] `a_direct_link`</dt>
  <dd>
    A list of links to start booking from a direct link.
This can't be one link, as the same appointment can be available in several booking tabs.
Therefore, each booking tab has its own direct booking link.
Each element has two values:
<dl>
  <dt>string <var>k_class_tab</var></dt>
  <dd>The key of the book now tab.</dd>
  <dt>string <var>url_tab</var></dt>
  <dd>The booking URL. This will open the booking wizard under the related booking tab.</dd>
</dl> <dl>
      <dt>string `k_class_tab`</dt>
      <dd>The key of the book now tab.</dd>

      <dt>string `url_tab`</dt>
      <dd>The booking URL. This will open the booking wizard under the related booking tab.</dd>
    </dl>
  </dd>

  <dt>array|null `a_config`</dt>
  <dd>
    Appointment-specific business policy overrides. `null` when the service uses the general business policy.
When not `null`, contains a subset of business config fields, including: <dl>
  <dt>bool `is_back_to_back`</dt>
  <dd>`true` if this service supports back-to-back booking.</dd>
  <dt>bool `is_book_repeat_client`</dt>
  <dd>`true` if clients can book this service on a recurring basis.</dd>
  <dt>bool `is_book_repeat_no_end_date_appointment`</dt>
  <dd>`true` if appointment bookings for this service default to weekly recurring with no end date.</dd>
  <dt>bool `is_multiple_booking`</dt>
  <dd>`true` if multiple bookings are allowed for this service.</dd>
  <dt>bool `is_wait_list_unpaid`</dt>
  <dd>`true` if clients on the wait list do not have to pay upfront.</dd>
</dl> <dl>
      <dt>bool `is_back_to_back`</dt>
      <dd>`true` if this service supports back-to-back booking.</dd>

      <dt>bool `is_book_repeat_client`</dt>
      <dd>`true` if clients can book this service on a recurring basis.</dd>

      <dt>bool `is_book_repeat_no_end_date_appointment`</dt>
      <dd>`true` if appointment bookings for this service default to weekly recurring with no end date.</dd>

      <dt>bool `is_multiple_booking`</dt>
      <dd>`true` if multiple bookings are allowed for this service.</dd>

      <dt>bool `is_wait_list_unpaid`</dt>
      <dd>`true` if clients on the wait list do not have to pay upfront.</dd>
    </dl>
  </dd>

  <dt>array `a_image`</dt>
  <dd>
    Information about the appointment image. An array with the following values:
<dl>
  <dt>int <var>i_height</var></dt>
  <dd>The height of the image.</dd>
  <dt>int <var>i_width</var></dt>
  <dd>The width of the image.</dd>
  <dt>bool <var>is_empty</var></dt>
  <dd>This will be `true` if the image is not set.</dd>
  <dt>string <var>k_service</var></dt>
  <dd>The service key.</dd>
  <dt>string <var>s_service</var></dt>
  <dd>The name of the service.</dd>
  <dt>string <var>s_url</var></dt>
  <dd>The URL to the image.</dd>
</dl> <dl>
      <dt>int `i_height`</dt>
      <dd>The height of the image.</dd>

      <dt>int `i_width`</dt>
      <dd>The width of the image.</dd>

      <dt>bool `is_empty`</dt>
      <dd>This will be `true` if the image is not set.</dd>

      <dt>string `k_service`</dt>
      <dd>The service key.</dd>

      <dt>string `s_service`</dt>
      <dd>The name of the service.</dd>

      <dt>string `s_url`</dt>
      <dd>The URL to the image.</dd>
    </dl>
  </dd>

  <dt>string[] `a_login_type_restriction`</dt>
  <dd>
    Keys are login type keys. ues - List of login types' titles for current service. Clients that have one of these types can book service.
  </dd>

  <dt>string[] `a_member_group_restriction`</dt>
  <dd>
    Keys are member group keys. ues - list of member groups' titles for current service. Clients that belongs to these groups can book service.
  </dd>

  <dt>string `f_deposit`</dt>
  <dd>The amount of deposit required.</dd>

  <dt>string `f_offline_max`</dt>
  <dd>The maximum offline price.</dd>

  <dt>string `f_offline_min`</dt>
  <dd>The minimum offline price.</dd>

  <dt>string `f_online`</dt>
  <dd>The online price.</dd>

  <dt>bool `hide_application`</dt>
  <dd>
    Determines whether the service will be hidden in the White Label mobile application.
 `true` means that service won't be displayed. Otherwise, this will be `false`.
  </dd>

  <dt>int `i_age_from`</dt>
  <dd>The required minimum client age to book an appointment.</dd>

  <dt>int `i_age_to`</dt>
  <dd>The required maximum client age to book an appointment.</dd>

  <dt>int `i_price`</dt>
  <dd>The price type ID. One of {@link ServicePriceSid} constants.</dd>

  <dt>int `i_duration`</dt>
  <dd>The appointment duration in minutes.</dd>

  <dt>int `id_book_flow`</dt>
  <dd>The type of client booking flow. One of {@link ServiceBookFlowSid} constants.</dd>

  <dt>int `id_service_require`</dt>
  <dd>The required payment type ID. One of {@link ServiceRequireSid} constants.</dd>

  <dt>bool `is_age_public`</dt>
  <dd>`true` if age restrictions are public. Otherwise, `false` if they should be hidden from clients.</dd>

  <dt>bool `is_age_restricted`</dt>
  <dd>Determines whether this service can't be booked due to age restrictions.</dd>

  <dt>bool `is_back_to_back`</dt>
  <dd>Determines whether this service supports back-to-back booking.</dd>

  <dt>bool `is_bookable`</dt>
  <dd>Whether this appointment can be booked online.</dd>

  <dt>bool `is_book_repeat_client`</dt>
  <dd>`true` if clients can book classes and appointments on a recurring basis. Otherwise, this `false`.</dd>

  <dt>bool `is_book_repeat_no_end_date_appointment`</dt>
  <dd>`true` if appointment bookings default to weekly recurring with no end date, `false` otherwise.</dd>

  <dt>bool `is_deposit_percent`</dt>
  <dd>
    `true` if <var>f_deposit</var> is a percentage. Otherwise, this will be `false` if <var>f_deposit</var> is an amount of
money.
  </dd>

  <dt>bool `is_gender_select`</dt>
  <dd>`true` if clients can select the staff member's gender. Otherwise, this will be `false`.</dd>

  <dt>bool `is_online_sell`</dt>
  <dd>
    `true` if clients can buy this appointment. Otherwise, this will be `false` if only staff members can sell it.
  </dd>

  <dt>bool `is_resource_type`</dt>
  <dd>`true` if the service requires assets. Otherwise, this will be `false`.</dd>

  <dt>bool `is_single_buy`</dt>
  <dd>
    `true` if the appointment can be booked without a Purchase Option. Otherwise, this will be `false` if it's necessary to
buy a Purchase Option.
  </dd>

  <dt>bool `is_staff_confirm`</dt>
  <dd>`true` if the appointment must be confirmed by a staff member after booking. Otherwise, this will be `false`.</dd>

  <dt>bool `is_staff_skip`</dt>
  <dd>
    `true` if clients can select a staff member for the appointment. Otherwise, this will be `false` if otherwise.
  </dd>

  <dt>bool `is_question`</dt>
  <dd>Determines whether the service will ask for questions or not.</dd>

  <dt>bool `is_virtual`</dt>
  <dd>`true` if the service is virtual. Otherwise, this will be `false`.</dd>

  <dt>string `k_service`</dt>
  <dd>The appointment primary key. 

  <dt>string `k_service_category`</dt>
  <dd>The service category primary key. 

  <dt>string `s_duration`</dt>
  <dd>The appointment duration in a human-readable format.</dd>

  <dt>string `s_service`</dt>
  <dd>The appointment title.</dd>

  <dt>string `text_age_restriction`</dt>
  <dd>Age restriction header.</dd>

  <dt>string `xml_description`</dt>
  <dd>Appointment description (deprecated, use `html_description`).</dd>

  <dt>string `xml_description_short`</dt>
  <dd>Appointment short description (deprecated, use `html_description_short`).</dd>

  <dt>string `xml_special`</dt>
  <dd>Special instructions (deprecated, use `html_special`).</dd>
</dl>
  public $a_service;

  /**
   * List of staff members to filter a result.
   *
   * Empty if the filtering is not necessary.
   *
   * @get get
   * @var string[]
   */
  public $a_staff = [];

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
   * `true` - return all active services for a certain location ignoring user age and other restrictions.
   * `false` - return only services that are allowed for the user.
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
   * This field is used if the client books for himself or for the relative.
   *
   * This field is incorrect to use for guest booking since in this case the client will be checked as a relative.
   *
   * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>