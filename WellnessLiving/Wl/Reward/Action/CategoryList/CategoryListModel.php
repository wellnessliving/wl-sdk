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
<dl>
  <dt>int|null `id_reward_action_category`</dt>
  <dd>
    ID of reward actions category type. <tt>null</tt> for custom reward actions categories.
  </dd>

  <dt>string `k_reward_action_category`</dt>
  <dd>ID of reward actions category in database. 

  <dt>string `s_title`</dt>
  <dd>Title of the reward action.</dd>
</dl>
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