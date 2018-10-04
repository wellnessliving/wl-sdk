<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves an information about services in the current service category.
 */
class ServiceListModel extends WlModelAbstract
{
  /**
   * A list of information about services.
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