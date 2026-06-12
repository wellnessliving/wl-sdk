<?php

namespace WellnessLiving\Wl\Insurance\Catalog;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of programs' information.
 */
class ProgramListModel extends WlModelAbstract
{
  /**
   * A List of active programs.
   * Every element has next keys:
   *
   * @get result
   * @var array[]
   */
<dl>
  <dt>string `k_wellness_program`</dt>
  <dd>The insurance key.</dd>

  <dt>string `m_price`</dt>
  <dd>The Purchase Option price.</dd>

  <dt>string `text_insurance_organization`</dt>
  <dd>The insurance organization name.</dd>

  <dt>string `text_partner`</dt>
  <dd>The insurance partner name.</dd>

  <dt>string `text_program`</dt>
  <dd>The insurance name.</dd>

  <dt>string `url_insurance_detail`</dt>
  <dd>The insurance organization URL.</dd>
</dl>
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