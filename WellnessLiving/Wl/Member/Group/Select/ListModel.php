<?php

namespace WellnessLiving\Wl\Member\Group\Select;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets a member groups list.
 *
 * @method WlModelRequest get() Returns member groups list in the business.
 */
class ListModel extends WlModelAbstract
{
  /**
   * Member groups list:
   *
   * <dl>
   *   <dt>int `i_user`</dt>
   *   <dd>Quantity of users in a group.</dd>
   * 
   *   <dt>bool `is_selected`</dt>
   *   <dd>Whether a member group is selected. `true` if selected, `false` - otherwise.</dd>
   * 
   *   <dt>string `k_member_group`</dt>
   *   <dd>The key of the member group.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The name of the member group.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_member_group = [];

  /**
   * Whether include "Isaac Churn Risk" group.
   *
   * @get get
   * @var bool
   */
  public $is_churn_risk = false;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Whether to show the quantity of users which belong to a member group. `true` - to show, `false` - otherwise.
   *
   * @get get
   * @var bool
   */
  public $show_member_group_user = false;
}

?>