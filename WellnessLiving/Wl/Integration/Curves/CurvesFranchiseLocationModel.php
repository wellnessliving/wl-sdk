<?php

namespace WellnessLiving\Wl\Integration\Curves;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Report\WlReportSid;

/**
 * Gets information for enterprise locations.
 */
class CurvesFranchiseLocationModel extends WlModelAbstract
{
  /**
   * The city list. Each element has next structure:
   * <dl>
   *   <dt>
   *     string <var>k_city</var>
   *   </dt>
   *   <dd>
   *     City key.
   *   </dd>
   *   <dt>
   *     string <var>k_country</var>
   *   </dt>
   *   <dd>
   *     Country key.
   *   </dd>
   *   <dt>
   *     string <var>k_state</var>
   *   </dt>
   *   <dd>
   *     State key.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     City title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_city_list = null;

  /**
   * The country list. Each element has next structure:
   * <dl>
   *   <dt>
   *     string <var>k_country</var>
   *   </dt>
   *   <dd>
   *     Country key.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     Country title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_country_list = null;

  /**
   * The location list. Each element has the next structure:
   * <dl>
   *   <dt>
   *     int <var>id_currency</var>
   *   </dt>
   *   <dd>
   *     Currency ID.
   *   </dd>
   *   <dt>
   *     string <var>k_country</var>
   *   </dt>
   *   <dt>
   *     string <var>k_city</var>
   *   </dt>
   *   <dd>
   *     City key.
   *   </dd>
   *   <dt>
   *     string <var>k_country</var>
   *   </dt>
   *   <dd>
   *     Country key.
   *   </dd>
   *   <dt>
   *     string <var>k_location</var>
   *   </dt>
   *   <dd>
   *     Location key.
   *   </dd>
   *   <dt>
   *     string <var>k_region</var>
   *   </dt>
   *   <dd>
   *     Franchise region key.
   *   </dd>
   *   <dt>
   *     string <var>k_state</var>
   *   </dt>
   *   <dd>
   *     State key.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     Location title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_location_list = null;

  /**
   * The region list. Each element has the next structure:
   * <dl>
   *   <dt>
   *     string <var>k_region</var>
   *   </dt>
   *   <dd>
   *     Franchise region key.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     Franchise region title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_region_list = null;

  /**
   * The state list. Each element has the next structure:
   * <dl>
   *   <dt>
   *     string <var>k_country</var>
   *   </dt>
   *   <dd>
   *     Country key.
   *   </dd>
   *   <dt>
   *     string <var>k_state</var>
   *   </dt>
   *   <dd>
   *     State key.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     State title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_state_list = null;

  /**
   * Determines which locations should be returned.
   *
   * @get get
   * @var int
   */
  public $id_business_franchise_location = null;

  /**
   * Determines the report for which data should be returned.
   *
   * One of the {@link WlReportSid} constants.
   *
   * If `null`, the report isn't set.
   *
   * @get get
   * @var int
   */
  public $id_report = null;

  /**
   * Determines whether to include churned/removed locations.
   *
   * If `true`, all locations are listed (regardless of their status).
   *
   * @get get
   * @var bool
   */
  public $is_include_churn = false;

  /**
   * Determines whether to include locations marked to not be displayed on franchisor website.
   *
   * If `true`, all locations are listed (regardless of this setting).
   *
   * @get get
   * @var bool
   */
  public $is_include_non_api = false;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = null;
}

?>