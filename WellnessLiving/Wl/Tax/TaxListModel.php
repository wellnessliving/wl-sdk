<?php

namespace WellnessLiving\Wl\Tax;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of taxes for a business.
 */
class TaxListModel extends WlModelAbstract
{
  /**
   * A list of taxes.
   *
   * Each element has the following structure:
   *
   * <dl>
   *   <dt>float `f_value`</dt>
   *   <dd>The amount of the tax.</dd>
   * 
   *   <dt>string `k_tax`</dt>
   *   <dd>The type of the tax, one of the {@link WlTaxSid} constants.</dd>
   * 
   *   <dt>string `k_tax`</dt>
   *   <dd>The tax key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The name of the tax.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list;

  /**
   * The key of the business for which to get a list of taxes.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>