<?php

namespace WellnessLiving\Wl\Integration\Curves;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that gets information for enterprise locations.
 */
class CurvesFranchiseLocationModel extends WlModelAbstract
{
  /**
   * A list of cities containing enterprise locations. Each element has the following structure:
   * <dl>
   *   <dt>string <var>k_city</var></dt><dd>The city ID.</dd>
   *   <dt>string <var>k_country</var></dt><dd>The country ID, this is different from the LocaleSid constants.</dd>
   *   <dt>string <var>k_state</var></dt><dd>The state ID.</dd>
   *   <dt>string <var>text_title</var></dt><dd>The name of the city.</dd>
   * </dl>
   *
   * @get result
   * @var array|null
   */
  public $a_city_list = null;

  /**
   * A list of countries containing enterprise locations. Each element has the following structure:
   * <dl>
   *   <dt>string <var>k_country</var></dt><dd>The country ID, which is different from the LocaleSid constants.</dd>
   *   <dt>string <var>text_title</var></dt><dd>The name of the country.</dd>
   * </dl>
   *
   * @get result
   * @var array|null
   */
  public $a_country_list = null;

  /**
   * A list of enterprise locations. Each element has the following structure:
   * <dl>
   *   <dt>string <var>k_business</var></dt><dd>The business ID of the enterprise location.</dd>
   *   <dt>string <var>k_city</var></dt><dd>The city ID.</dd>
   *   <dt>string <var>k_country</var></dt><dd>The country ID, which is different from the LocaleSid constants.</dd>
   *   <dt>string <var>k_location</var></dt><dd>The location ID.</dd>
   *   <dt>string <var>k_region</var></dt><dd>The enterprise region ID.</dd>
   *   <dt>string <var>k_state</var></dt><dd>The state ID.</dd>
   *   <dt>string <var>k_territory_id</var></dt><dd>The Curves territory ID. Sometimes also referred to as enterprise ID.</dd>
   *   <dt>string <var>text_address</var></dt><dd>The street address.</dd>
   *   <dt>string <var>text_city_title</var></dt><dd>The name of the city containing the location.</dd>
   *   <dt>string <var>text_country_title</var></dt><dd>The name of the country containing the location.</dd>
   *   <dt>string <var>text_region_title</var></dt><dd>The name of the enterprise region, if set.</dd>
   *   <dt>string <var>text_state_title</var></dt><dd>The name of the state containing the location.</dd>
   *   <dt>string <var>text_title</var></dt><dd>The location name.</dd>
   * </dl>
   *
   * @get result
   * @var array|null
   */
  public $a_location_list = null;

  /**
   * A list of regions containing enterprise locations.
   * If regions are set, then each element will have the following structure:
   * <dl>
   *   <dt>string <var>k_region</var></dt><dd>The enterprise region ID.</dd>
   *   <dt>string <var>text_title</var></dt><dd>The enterprise region name.</dd>
   * </dl>
   *
   * @get result
   * @var array|null
   */
  public $a_region_list = null;

  /**
   * A list of states containing enterprise locations. Each element has the following structure:
   * <dl>
   *   <dt>string <var>k_country</var></dt><dd>The country ID, which is different from the LocaleSid constants.</dd>
   *   <dt>string <var>k_state</var></dt><dd>The state ID.</dd>
   *   <dt>string <var>text_title</var></dt><dd>The state name.</dd>
   * </dl>
   *
   * @get result
   * @var array|null
   */
  public $a_state_list = null;

  /**
   * Determines which locations should be returned.
   *
   * One of the {@link \WellnessLiving\Wl\Business\Franchise\Location\BusinessFranchiseLocationFormSid} constants.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $id_business_franchise_location = null;

  /**
   * The business ID for the enterprise headquarters.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;
}

?>