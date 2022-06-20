<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about assets in the current asset category.
 */
class AssetListModel extends WlModelAbstract
{
  /**
   * A list of information about assets.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @get result
   * @var array|null
   */
  public $a_asset = null;

  /**
   * The selected date and time of the asset booking.
   *   The date and time you have selected. This value is only used when the business booking policy allows clients to
   *   select a date and time first, then the available asset second.
   *
   * @get get
   * @var string
   */
  public $dtl_date = false;

  /**
   * <tt>true</tt> - load asset categories for backend mode; <tt>false</tt> - for frontend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The class tab ID to filter assets.
   *
   * <tt>null</tt> if not set yet or select only elements with no specified class tab.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * The ID of a location.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The ID of an asset category to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource_category = null;

  /**
   * The ID of an asset's layout.
   *
   * <tt>null</tt> if it is not loaded yet.
   *
   * @get result
   * @var string|null
   */
  public $k_resource_layout = null;
}

?>