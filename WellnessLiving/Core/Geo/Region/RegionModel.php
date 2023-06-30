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
   * <dl>
   *   <dt>
   *     string[] <var>a_region</var>
   *   </dt>
   *   <dd>
   *     List of region in country. Every element has keys: <dl>
   *       <dt>
   *         string <var>k_geo</var>
   *       </dt>
   *       <dd>
   *         The region key.
   *       </dd>
   *       <dt>
   *         string <var>s_title</var>
   *       </dt>
   *       <dd>
   *         The name of the region.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>k_geo_country</var>
   *   </dt>
   *   <dd>
   *     The country key.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     The name of the country
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_region;

  /**
   * The ID of the locale to find regions for. One of the {@link \WellnessLiving\Core\Locale\LocaleSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_locale = 0;

  /**
   * Whether to get the regions for all locales.
   *
   * If `true` then get regions for all locales, `false` - otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_locale_all = false;
}

?>