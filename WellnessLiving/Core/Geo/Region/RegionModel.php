<?php

namespace WellnessLiving\Core\Geo\Region;

use WellnessLiving\WlModelAbstract;

/**
 * Gets a list of regions for a specified country or a list of regions for all countries.
 * A region is a political subdivision like a state, province, or territory.
 */
class RegionModel extends WlModelAbstract
{
  /**
   * A list of regions, grouped by their countries.
   * Each key is a different country starting from zero.
   * Each element has the following keys:
   * <ul><li>array <b>a_region</b> List of region in country. Every element has keys:
   *   <ul><li>int <b>k_geo</b> The region ID.</li>
   *   <li>string <b>s_title</b> The name of the region.</li></ul></li>
   * <li>string <b>k_geo_country</b> The geo ID of the country, this is different than the LocaleSid constant.</li></ul>
   * <li>string <b>s_title</b> The name of the country.</li></ul>
   *
   * @get result
   * @var array
   */
  public $a_region = [];
  
  /**
   * The ID of the locale to find regions for. This is one of the {@link \WellnessLiving\Core\Locale\LocaleSid} constants.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var int
   */
  public $id_locale = null;

  /**
   * Whether to get the regions for all locales.
   *
   * If `true` then get regions for all locales, `false` - otherwise.
   * By default it is `false`.
   *
   * @get get
   * @var bool
   */
  public $is_locale_all = 0;
}

?>