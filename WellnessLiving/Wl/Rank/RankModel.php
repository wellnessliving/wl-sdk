<?php

namespace WellnessLiving\Wl\Rank;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about belts in a business.
 *
 * This information can be used to figure out totals in the Belts Report.
 *
 * @method WlModelRequest get() Gets belts list of a business.  Returns all belts for the specified business, optionally filtered by belt category keys, including each belt's title and its parent category title.
 */
class RankModel extends WlModelAbstract
{
  /**
   * Rank category keys. Used to filter belts by belt categories.
   *
   * @get get
   * @var string[]
   */
  public $a_rank_category = [];

  /**
   * A list of belts, keys, and information. Each element is an array with the following information:
   *
   * <dl>
   *   <dt>string `k_rank`</dt>
   *   <dd>A belt key. </dd>
   * 
   *   <dt>string `k_rank_category`</dt>
   *   <dd>A belt category key. </dd>
   * 
   *   <dt>string `text_rank`</dt>
   *   <dd>Belt title.</dd>
   * 
   *   <dt>string `text_rank_category`</dt>
   *   <dd>Belt category title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_rank_list = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>