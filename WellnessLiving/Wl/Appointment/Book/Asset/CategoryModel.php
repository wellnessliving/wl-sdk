<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about asset categories.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * A list of information about asset categories.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var array|null
   */
  public $a_category = null;

  /**
   * If `true`, asset categories are loaded for backend mode. Otherwise, this will be `false` if asset categories
   * are loaded for frontend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The class tab ID to use for filtering services.
   *
   * This will be `null` if not set yet or if elements without a specified class tab have only been selected.
   *
   * @get get
   * @var string|null
   */
  public $k_class_tab = null;

  /**
   * The ID of the location to show information for.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;
}

?>