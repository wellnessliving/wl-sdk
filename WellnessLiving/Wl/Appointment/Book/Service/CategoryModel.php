<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves an information about service categories.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * A list of information about service categories.
   *
   * <tt>null</tt> if not initialized yet.
   *
   * @get result
   * @var array|null
   */
  public $a_category = null;

  /**
   * <tt>true</tt> - return all service categories for a certain location.
   * <tt>false</tt> - return only service categories which have staff members able to conduct them and are associated
   * to a certain book tab.
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
   * The class tab ID to filter services.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * The ID of a location for which to show information.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The ID of a user for whom to get information.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>