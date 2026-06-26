<?php

namespace WellnessLiving\Wl\Appointment\Book\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of information about locations on the appointment booking page.
 *
 * @method WlModelRequest get() Retrieves a list of information about locations on the appointment booking page.
 */
class LocationModel extends WlModelAbstract
{
  /**
   * A list of business locations with information about them.
   *
   * @get result
   * @var array
   */
  public $a_location;

  /**
   * ID of class tab type.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $id_class_tab = null;

  /**
   * <tt>true</tt> - return all service categories of certain location;
   * <tt>false</tt> - return only service categories which has staff members and are bound to certain book tab.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * ID of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * ID of class tab.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * ID of user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>