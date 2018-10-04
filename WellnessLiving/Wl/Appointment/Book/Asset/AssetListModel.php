<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves an information about assets in the current asset category.
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
   * A list of information about periods for the current asset category.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @get result
   * @var array|null
   */
  public $a_asset_period = null;

  /**
   * <tt>true</tt> - load asset categories for backend mode; <tt>false</tt> - for frontend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Class tab ID to filter assets.
   *
   * <tt>null</tt> if not set yet or select only elements with not specified class tab.
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
   * ID of an asset category to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource_category = null;

  /**
   * ID of assets' layout.
   *
   * <tt>null</tt> if is not initialized.
   *
   * @get result
   * @var string|null
   */
  public $k_resource_layout = null;
}

?>