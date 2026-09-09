<?php

namespace WellnessLiving\Wl\Reward\Action\CategoryList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list with reward action categories.
 *
 * @method WlModelRequest get() Retrieves all reward action categories for business specified in {@link \Wl\Reward\Action\CategoryList\CategoryListApi::$k_business}.  Returns the list of reward action categories including category type ID, database key, and title for the given business.
 */
class CategoryListModel extends WlModelAbstract
{
  /**
   *
   * <dl>
   *   <dt>int|null `id_reward_action_category`</dt>
   *   <dd>
   *     ID of reward actions category type. <tt>null</tt> for custom reward actions categories.
   *   </dd>
   * 
   *   <dt>string `k_reward_action_category`</dt>
   *   <dd>ID of reward actions category in database. </dd>
   * 
   *   <dt>string `s_title`</dt>
   *   <dd>Title of the reward action.</dd>
   * </dl>
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