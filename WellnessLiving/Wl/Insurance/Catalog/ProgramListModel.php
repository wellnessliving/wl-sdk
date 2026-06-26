<?php

namespace WellnessLiving\Wl\Insurance\Catalog;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of programs' information.
 *
 * @method WlModelRequest get() Returns a list of active insurance programs for the specified promotion.  Requires backend access and an active Wellness Program feature for the business. Returns all available insurance programs with pricing, organization name, partner name, and a link to the insurance detail page.
 */
class ProgramListModel extends WlModelAbstract
{
  /**
   * A List of active programs.
   * Every element has next keys:
   *
   * <dl>
   *   <dt>string `k_wellness_program`</dt>
   *   <dd>The insurance key.</dd>
   * 
   *   <dt>string `m_price`</dt>
   *   <dd>The Purchase Option price.</dd>
   * 
   *   <dt>string `text_insurance_organization`</dt>
   *   <dd>The insurance organization name.</dd>
   * 
   *   <dt>string `text_partner`</dt>
   *   <dd>The insurance partner name.</dd>
   * 
   *   <dt>string `text_program`</dt>
   *   <dd>The insurance name.</dd>
   * 
   *   <dt>string `url_insurance_detail`</dt>
   *   <dd>The insurance organization URL.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_wellness_program;

  /**
   * The key of the franchisee business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the promotion.
   *
   * @get get
   * @var string
   */
  public $k_promotion = '';
}

?>