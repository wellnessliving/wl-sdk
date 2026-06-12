<?php

namespace WellnessLiving\Core\Geo\Region;

use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;

/**
 * Gets a list of regions for a specified country or all countries.
 * A region refers to a jurisdiction like a state, province, or territory.
 */
class RegionModel extends WlModelAbstract
{
  /**
   * A list of regions grouped by their country.
   *
   * @get result
   * @var array[]
   */
  public $a_region;

  /**
   * The locale ID to find regions for. One of the {@link LocaleSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_locale = 0;

  /**
   * Determines whether to get regions for all locales.
   *
   * If `true`, this will get regions for all locales. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_locale_all = false;
}

?>