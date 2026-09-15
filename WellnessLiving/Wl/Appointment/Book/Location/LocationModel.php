<?php

namespace WellnessLiving\Wl\Appointment\Book\Location;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Classes\Tab\TabSid;

/**
 * Retrieves a list of information about locations on the appointment booking page.
 *
 * @method WlModelRequest get() Retrieves a list of information about locations on the appointment booking page.  Validates the business, class tab, and specified user, then loads the business locations  that are available for booking. Locations where the user is blocked, or that expose no  bookable service categories, are excluded. The result is written to  {@link \Wl\Appointment\Book\Location\LocationApi::$a_location}.
 */
class LocationModel extends WlModelAbstract
{
  /**
   * A list of business locations with information about them.
   *
   * Each element: 
   *
   * <dl>
   *   <dt>string `k_location`</dt>
   *   <dd>Location key.</dd>
   * 
   *   <dt>string `s_address`</dt>
   *   <dd>Full address of the location, including city, region, and country. Empty if the address is unknown.</dd>
   * 
   *   <dt>string `s_map`</dt>
   *   <dd>URL of the map image for the location address. Empty if the address is unknown.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Location title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_location;

  /**
   * ID of class tab type.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   * @see TabSid
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