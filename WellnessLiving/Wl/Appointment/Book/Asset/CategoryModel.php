<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves an information about asset categories.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * A list of information about asset categories.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @get result
   * @car array|null
   */
  public $a_category = null;

  /**
   * <tt>true</tt> - load asset categories for backend mode; <tt>false</tt> - for frontend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Class tab ID to filter services.
   *
   * <tt>null</tt> if not set yet or select only elements with not specified class tab.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * ID of a location to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;
}

?>