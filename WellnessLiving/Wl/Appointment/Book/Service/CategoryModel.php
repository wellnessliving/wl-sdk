<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about service categories.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * A list of information about service categories.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_category = null;

  /**
   * <b>true</b> - return all service categories for a certain location.
   *
   * <b>false</b> - return only service categories that are associated with a book tab and with staff members
   * able to conduct them.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * <b>true</b> - search in all tabs.
   *
   * <b>false</b> - search only for the selected book tab.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * The class tab ID used to filter services.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * The ID of a location to show information for.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The ID of a user to get information for.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>