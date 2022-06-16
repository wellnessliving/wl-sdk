<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset\Service;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint for assets which are required for a service booking.
 */
class ServiceModel extends WlModelAbstract
{
  /**
   * A list of reserved assets.
   *
   * 1st level keys - asset keys.
   * 2nd level keys - asset numbers.
   * Values - keys of appointment bookings that reserves the asset(s).
   *
   * For example, if you want to check if the 10th asset with the key of '15' is reserved,
   * you can check if <tt>a_resource_busy['15']['10']</tt> is not empty.
   *
   * If you're rebooking an appointment, check the value of <tt>a_resource_busy['15']['10']</tt>.
   * If it's equal to the key of your current appointment booking, then consider the asset as available.
   *
   * @get result
   * @var array
   */
  public $a_resource_busy = [];

  /**
   * A list of assets which are required for the service booking.
   * Keys - the asset category key(s).
   * Values - sub arrays with next key(s).
   * <dl>
   *   <dt>
   *     array[] <var>a_resource</var>
   *   </dt>
   *   <dd>
   *     A list of resources. Every element has the keys:
   *     <dl>
   *       <dt>
   *         array <var>a_image</var>
   *       </dt>
   *       <dd>
   *         The asset's image data.
   *       </dd>
   *       <dt>
   *         bool <var>is_available</var>
   *       </dt>
   *       <dd>
   *         If <tt>true</tt>, then this asset has at least one free unit.
   *         If <tt>false</tt>, then this asset has no free units.
   *       </dd>
   *       <dt>
   *         string <var>k_resource</var>
   *       </dt>
   *       <dd>
   *         The asset key.
   *       </dd>
   *       <dt>
   *         string <var>s_resource</var>
   *       </dt>
   *       <dd>
   *         The asset title.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string|null <var>k_resource_layout</var>
   *   </dt>
   *   <dd>
   *     The asset's layout key. <tt>null</tt> if the asset category has no layout.
   *   </dd>
   *   <dt>
   *     string <var>s_resource_type</var>
   *   </dt>
   *   <dd>
   *     The title of asset category.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_resource_type = [];

  /**
   * Can the staff members book reserved assets.
   *
   * <tt>null</tt> if not loaded yet.
   *
   * @get result
   * @var bool
   */
  public $can_book_unavailable_assets = null;

  /**
   * The appointment booking date selected by the user.
   *
   * @get get
   * @var string
   */
  public $dt_start = '';

  /**
   * <tt>true</tt> for a case of backend mode.
   * In this mode, the list of asset categories must be returned even if asset selection is disabled for clients.
   *
   * <tt>false</tt> for a case of frontend mode.
   * In this mode, the list of asset categories must not be returned if asset selection is disabled for clients.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The selected location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The selected service's key.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';
}

?>