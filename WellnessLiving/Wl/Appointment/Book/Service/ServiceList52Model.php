<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about services in the current service category.
 *
 * This is a new version of the API endpoint {@link ServiceListModel}.
 * It allows to filter list of services by multiple book now tabs.
 */
class ServiceList52Model extends WlModelAbstract
{
  /**
   * Class tab key to filter services. If empty, find on standard book tab.
   *
   * If multiple tabs are sent, appointment types, which are at least in one of them, will be in the result.
   *
   * @get get
   * @var string[]
   */
  public $a_class_tab = [];

  /**
   * A list of services with information about them.
   *
   * Key - Service key from {@link \RsServiceSql} table
   * Value - an array, every element has next keys:
   * <dl>
   *   <dt>
   *     array <var>a_class_tab</var>
   *   </dt>
   *   <dd>
   *     The list of tab keys for service.
   *   </dd>
   *   <dt>
   *     array[] <var>a_direct_link</var>
   *   </dt>
   *   <dd>
   *     List of links to start booking from a direct link.
   *     It cannot be one link, because the same appointment can be available in several booking tabs.
   *     So, each booking tab has own direct booking link.
   *     Each element has two values:
   *     <dl>
   *       <dt>string <var>k_class_tab</var></dt>
   *       <dd>Key of the book now tab.</dd>
   *       <dt>string <var>url_tab</var></dt>
   *       <dd>Booking URL. Will open booking wizard under related booking tab.</dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     array <var>a_image</var>
   *   </dt>
   *   <dd>
   *     Appointment image. See {@link \RsServiceLogo::data()} for details.
   *   </dd>
   *   <dt>
   *     string <var>f_deposit</var>
   *   </dt>
   *   <dd>
   *     Amount of deposit required.
   *   </dd>
   *   <dt>
   *     string <var>f_offline_max</var>
   *   </dt>
   *   <dd>
   *     Maximal offline price.
   *   </dd>
   *   <dt>
   *     string <var>f_offline_min</var>
   *   </dt>
   *   <dd>
   *     Minimal offline price.
   *   </dd>
   *   <dt>
   *     string <var>f_online</var>
   *   </dt>
   *   <dd>
   *     Online price.
   *   </dd>
   *   <dt>
   *     bool <var>hide_application</var>
   *   </dt>
   *   <dd>
   *      Whether service will be hidden in the White Label mobile application.
   *      <tt>true</tt> means that service will not be displayed, <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     int <var>i_age_from</var>
   *   </dt>
   *   <dd>
   *     Required minimal client age to book an appointment.
   *   </dd>
   *   <dt>
   *     int <var>i_age_to</var>
   *   </dt>
   *   <dd>
   *     Required maximal client age to book an appointment.
   *   </dd>
   *   <dt>
   *     int <var>i_price</var>
   *   </dt>
   *   <dd>
   *     Price type. One of {@link \RsServicePriceSid} constants.
   *   </dd>
   *   <dt>
   *     int <var>i_duration</var>
   *   </dt>
   *   <dd>
   *     Appointment duration in minutes.
   *   </dd>
   *   <dt>
   *     int <var>id_book_flow</var>
   *   </dt>
   *   <dd>
   *     Type of client booking flow. One of {@link \Wl\Service\ServiceBookFlowSid} constants.
   *   </dd>
   *   <dt>
   *     int <var>id_service_require</var>
   *   </dt>
   *   <dd>
   *     Required payment type. One of {@link \RsServiceRequireSid} constants.
   *   </dd>
   *   <dt>
   *     bool <var>is_book_repeat_client</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if allow client to book classes and appointments recurrently, <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_deposit_percent</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if <var>f_deposit</var> is percents; <tt>false</tt> if <var>f_deposit</var> is amount of money.
   *   </dd>
   *   <dt>
   *     bool <var>is_gender_select</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if client can select staff`s gender; <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_online_sell</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if clients can buy this appointment; <tt>false</tt> if only staff members can sale it.
   *   </dd>
   *   <dt>
   *     bool <var>is_resource_type</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if service requires assets; <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_single_buy</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if appointment may be booked without purchase option; <tt>false</tt> if it is necessary to buy a purchase option.
   *   </dd>
   *   <dt>
   *     bool <var>is_staff_confirm</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if appointment bust be confirmed by staff member after booking; <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_staff_skip</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if client can select staff member for the appointment; <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>is_question</var>
   *   </dt>
   *   <dd>
   *     Whether the service will ask for questions or not.
   *   </dd>
   *   <dt>
   *     bool <var>is_virtual</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if service is virtual; <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     string <var>k_service</var>
   *   </dt>
   *   <dd>
   *     Appointment primary key in {@link \RsServiceSql} table.
   *   </dd>
   *   <dt>
   *     string <var>k_service_category</var>
   *   </dt>
   *   <dd>
   *     Service category primary key in {@link \RsServiceCategorySql} table.
   *   </dd>
   *   <dt>
   *     string <var>s_duration</var>
   *   </dt>
   *   <dd>
   *     Appointment duration in human readable format.
   *   </dd>
   *   <dt>
   *     string <var>s_service</var>
   *   </dt>
   *   <dd>
   *     Appointment title.
   *   </dd>
   *   <dt>
   *     string <var>xml_describe</var>
   *   </dt>
   *   <dd>
   *     Appointment description.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_service;

  /**
   * <tt>true</tt> - return all active services of certain location;
   * <tt>false</tt> - return only services which are bound to certain book tab.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * <tt>true</tt> - find in all tab;
   * <tt>false</tt> - find only on selected book tab.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * Location to show available appointment booking schedule.
   *
   * Primary key in {@link \RsLocationSql} table.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of a service category to show information for.
   *
   * @get get
   * @var string
   */
  public $k_service_category = '0';

  /**
   * User to get information for.
   *
   * Primary key in {@link \PassportLoginSql} table.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>