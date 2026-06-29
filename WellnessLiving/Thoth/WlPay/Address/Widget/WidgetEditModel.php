<?php

namespace WellnessLiving\Thoth\WlPay\Address\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to get data for "edit payment address" widget.
 *
 * @method WlModelRequest get() Gets data for "edit payment address" widget.  Returns the list of geographic regions and phone number format masks configured for the given business locale.  When no business key is provided, system-level defaults are returned.
 */
class WidgetEditModel extends WlModelAbstract
{
  /**
   * List of countries with their regions, keyed by country geo key. Each element: 
   *
   * <dl>
   *   <dt>array[] `a_region`</dt>
   *   <dd>
   *     List of geographic regions within the country. Each element:
   *     <dl>
   *       <dt>bool `is_select`</dt>
   *       <dd>`true` if this region is currently selected; `false` otherwise.</dd>
   * 
   *       <dt>string `k_geo`</dt>
   *       <dd>Region key.</dd>
   * 
   *       <dt>string `s_title`</dt>
   *       <dd>Region title.</dd>
   * 
   *       <dt>string `text_abbr`</dt>
   *       <dd>Region abbreviation.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `is_select`</dt>
   *   <dd>`true` if this country is currently selected; `false` otherwise.</dd>
   * 
   *   <dt>string `k_geo`</dt>
   *   <dd>Country key.</dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Country title.</dd>
   * 
   *   <dt>string `text_abbr`</dt>
   *   <dd>Country abbreviation.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_geo;

  /**
   * Mask for phone entering (ready for output to the page).
   *
   * @get result
   * @var string
   */
  public $html_phone_mask;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Mask for phone entering.
   *
   * @get result
   * @var string
   */
  public $text_phone_mask;
}

?>