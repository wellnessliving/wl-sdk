<?php

namespace WellnessLiving\Thoth\Report\SalesReport\Transaction\TaxListReportFilterField;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Tax\TaxListModel;
use WellnessLiving\Wl\Tax\WlTaxSid;

/**
 * Retrieves a list of taxes for a business.
 *
 * TODO: move this changes to {@link TaxListModel} before release 62 sprint.
 *
 * @method WlModelRequest get() Returns taxes of the specified business.
 */
class TaxListReportModel extends WlModelAbstract
{
  /**
   * A list of taxes.
   *
   * Each element has the following structure:
   *
   * <dl>
   *   <dt>string[] `a_location`</dt>
   *   <dd>The locations where the tax is applicable.</dd>
   * 
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
  public $a_list = null;

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
  public $k_business = null;
}

?>