<?php

namespace WellnessLiving\Wl\Rank;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about belt rank categories.
 *
 * @method WlModelRequest get()
 */
class SearchDataModel extends WlModelAbstract
{
  /**
   * Belt rank categories.
   *
   * @get result
   * @var array[]
   */
  public $a_rank_category_list;

  /**
   * @get get
   * @var string
   */
  public $k_business;
}

?>