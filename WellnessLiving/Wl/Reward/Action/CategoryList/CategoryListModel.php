<?php

namespace WellnessLiving\Wl\Reward\Action\CategoryList;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list with reward action categories.
 */
class CategoryListModel extends WlModelAbstract
{
  /**
   *
   * @get result
   * @var array
   */
  public $a_category;

  /**
   * ID of a business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>