<?php

namespace WellnessLiving\Wl\Rank\Category;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about belts categories in a business.
 *
 * This information can be used to filter by belts categories in the Belts Report.
 *
 * @method WlModelRequest get() Gets belts categories list of a business.
 */
class RankCategoryModel extends WlModelAbstract
{
  /**
   * A list of belts categories, keys, and information. Each element is an array with the following information:
   *
   * <dl>
   *   <dt>string `k_rank_category`</dt>
   *   <dd>A belt category key.</dd>
   * 
   *   <dt>string `text_rank_category`</dt>
   *   <dd>Belt category title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_rank_category_list = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>