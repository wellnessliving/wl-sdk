<?php

namespace WellnessLiving\Core\Geo\Region;

use WellnessLiving\WlModelAbstract;

/**
 * Gets a list of regions for a specified country or all countries.
 * A region refers to a jurisdiction like a state, province, or territory.
 */
class RegionModel extends WlModelAbstract
{
  /**
   * A list of regions grouped by their country.
   * <dl>
   *   <dt>
   *     string[] <var>a_region</var>
   *   </dt>
   *   <dd>
   *     A list of regions in the country. Every element has the next keys: <dl>
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
   *     The name of the country.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_region;

  /**
   * The locale ID to find regions for. One of the {@link \WellnessLiving\Core\Locale\LocaleSid} constants.
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