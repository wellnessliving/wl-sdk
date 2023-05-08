<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about services in the current service category.
 *
 * This is a new version of the {@link \WellnessLiving\WL\Appointment\Book\Service\ServiceListModel} endpoint.
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
   *     The appointment image.
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
   *     The price type. One of {@link \WellnessLiving\Wl\Service\ServicePriceSid} constants.
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
   *     The type of client booking flow. One of {@link \WellnessLiving\Wl\Service\ServiceBookFlowSid} constants.
   *   </dd>
   *   <dt>
   *     int <var>id_service_require</var>
   *   </dt>
   *   <dd>
   *     The required payment type. One of {@link \WellnessLiving\Wl\Service\ServiceRequireSid} constants.
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
   *     bool <var>is_book_repeat_client</var>
   *   </dt>
   *   <dd>
   *     `true` if clients can book classes and appointments on a recurring basis. Otherwise, this `false`.
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
   *     string <var>xml_describe</var>
   *   </dt>
   *   <dd>
   *     The appointment description.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_service;

  /**
   * <b>true</b> - return all active services for a certain location.
   *
   * <b>false</b> - return only services that are associated with a book now tab.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * <b>true</b> - search in all tabs.
   *
   * <b>false</b> - search only on the selected book now tab.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * The location to show the available appointments' booking schedule for.
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
   * The user to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>