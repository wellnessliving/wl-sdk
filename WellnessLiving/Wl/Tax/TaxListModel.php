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
   * Each element has the following structure:<dl>
   * <dt>float <var>f_value</var> </dt>
   * <dd>The amount of the tax.</dd>
   * <dt>string <var>k_tax</var> </dt>
   * <dd>The type of the tax, one of the {@link WlTaxSid} constants.</dd>
   * <dt>string <var>k_tax</var> </dt>
   * <dd>The tax key.</dd>
   * <dt>string <var>text_title</var></dt>
   * <dd>The name of the tax.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_list;

  /**
   * Whether a business has hidden.
   * `true` if business franchisor has franchisee with taxes.
   *
   * @get result
   * @var bool
   */
  public $is_hidden_tax = false;

  /**
   * Whether a business has removed taxes.
   * `true` if business has removed tax.
   *
   * @get result
   * @var bool
   */
  public $is_removed_tax = false;

  /**
   * The key of the business for which to get a list of taxes.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>