<?php

namespace WellnessLiving\Wl\Rank;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about belts in a business.
 *
 * This information can be used to figure out totals in the Belts Report.
 */
class RankModel extends WlModelAbstract
{
  /**
   * Rank category keys.
   * Used to filter belts by belt categories.
   *
   * @get get
   * @var array
   */
  public $a_rank_category = [];

  /**
   * A list of belts, keys, and information. Each element is an array with the following information:
   *
   * <dl>
   *   <dt>string <var>k_rank</var></dt>
   *   <dd>A belt key.</dd>
   *   <dt>string <var>k_rank_category</var></dt>
   *   <dd>A belt category key.</dd>
   *   <dt>string <var>text_rank</var></dt>
   *   <dd>Belt title.</dd>
   *   <dt>string <var>text_rank_category</var></dt>
   *   <dd>Belt category title.</dd>
   * </dl>
   *
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