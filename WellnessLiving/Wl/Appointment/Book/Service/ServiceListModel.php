<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves an information about services in the current service category.
 */
class ServiceListModel extends WlModelAbstract
{
  /**
   * A list of information about services. Each element contains structure: <dl>
   *       <dt>
   *         array <var>a_image</var>
   *       </dt>
   *       <dd>
   *         Service image.
   *       </dd>
   *       <dt>
   *         string <var>f_deposit</var>
   *       </dt>
   *       <dd>
   *         Amount of deposit required.
   *       </dd>
   *       <dt>
   *         string <var>f_offline_max</var>
   *       </dt>
   *       <dd>
   *         Maximal offline price.
   *       </dd>
   *       <dt>
   *         string <var>f_offline_min</var>
   *       </dt>
   *       <dd>
   *         Minimal offline price.
   *       </dd>
   *       <dt>
   *         string <var>f_online</var>
   *       </dt>
   *       <dd>
   *         Online price.
   *       </dd>
   *       <dt>
   *         int <var>i_price</var>
   *       </dt>
   *       <dd>
   *         Price type. One of {@link \WellnessLiving\Wl\Service\ServicePriceSid} constants.
   *       </dd>
   *       <dt>
   *         int <var>i_duration</var>
   *       </dt>
   *       <dd>
   *         Appointment duration in minutes.
   *       </dd>
   *       <dt>
   *         int <var>id_book_flow</var>
   *       </dt>
   *       <dd>
   *         Type of client booking flow. One of {@link \WellnessLiving\Wl\Service\ServiceBookFlowSid} constants.
   *       </dd>
   *       <dt>
   *         int <var>id_service_require</var>
   *       </dt>
   *       <dd>
   *         Required payment type. One of {@link \WellnessLiving\Wl\Service\ServiceRequireSid} constants.
   *       </dd>
   *       <dt>
   *         bool <var>is_deposit_percent</var>
   *       </dt>
   *       <dd>
   *         <tt>true</tt> if <var>f_deposit</var> is percents;
   *         <tt>false</tt> if <var>f_deposit</var> is amount of money.
   *       </dd>
   *       <dt>
   *         bool <var>is_online_sell</var>
   *       </dt>
   *       <dd>
   *         <tt>true</tt> if clients can buy this appointment;
   *         <tt>false</tt> if only staff members can sale it.
   *       </dd>
   *       <dt>
   *         bool <var>is_staff_confirm</var>
   *       </dt>
   *       <dd>
   *         <tt>true</tt> if appointment bust be confirmed by staff member after booking;
   *         <tt>false</tt> otherwise.
   *       </dd>
   *       <dt>
   *         string <var>k_service</var>
   *       </dt>
   *       <dd>
   *         Service key.
   *       </dd>
   *       <dt>
   *         string <var>s_duration</var>
   *       </dt>
   *       <dd>
   *         Appointment duration in human readable format.
   *       </dd>
   *       <dt>
   *         string <var>s_service</var>
   *       </dt>
   *       <dd>
   *         Appointment title.
   *       </dd>
   *       <dt>
   *         string <var>xml_describe</var>
   *       </dt>
   *       <dd>
   *         Appointment description.
   *       </dd>
   *     </dl>
   *   </dd>
   * </dl>
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @get result
   * @var array|null
   */
  public $a_service = null;

  /**
   * <tt>true</tt> - return all service categories of certain location;
   * <tt>false</tt> - return only service categories which has staff members and are bound to certain book tab.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Class tab ID to filter services.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * ID of a location.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * ID of a service category to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service_category = null;

  /**
   * ID of user to get information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>