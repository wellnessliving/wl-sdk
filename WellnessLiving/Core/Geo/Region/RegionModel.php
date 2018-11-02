<?php

namespace WellnessLiving\Core\Geo\Region;

use WellnessLiving\WlModelAbstract;

/**
 * Gets a list of regions.
 */
class RegionModel extends WlModelAbstract
{
  /**
   * List of regions.
   * Grouped by countries.
   * Every element has the keys:
   * <ul><li>array <b>a_region</b> List of region in country. Every element has keys:
   * <ul><li>int <b>k_geo</b> Region ID.</li>
   * <li>string <b>s_title</b> Name of region.</li></ul></li>
   * <li>string <b>s_title</b> Name of country.</li></ul>
   *
   * @get result
   * @var array
   */
  public $a_region = [];
  
  /**
   * ID of locale to get regions for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int
   */
  public $id_locale = null;
}

?>