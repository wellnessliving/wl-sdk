<?php

namespace WellnessLiving\Wl\Member\Group\GroupList;

use WellnessLiving\WlModelAbstract;

/**
 * Member groups list.
 */
class ListModel extends WlModelAbstract
{
  /**
   * Member groups list:
   * <dl>
   *   <dt>
   *     string <var>k_member_group</var>
   *   </dt>
   *   <dd>
   *     The key of the member group.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     The name of the member group.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_member_group;

  /**
   * List of groups to be deleted.
   *
   * @delete post
   * @var array
   */
  public $a_member_group_delete = [];

  /**
   * List of groups in the order in which they will be saved.
   *
   * @put post
   * @var array
   */
  public $a_member_group_order = [];

  /**
   * List of groups for filtering groups of business.
   *
   * `null` in the case when need to return all groups of business.
   *
   * @get get
   * @var array|null
   */
  public $a_member_group_select = null;

  /**
   * Whether include "Isaac Churn Risk" group.
   *
   * @get get
   * @var bool
   */
  public $is_churn_risk = false;

  /**
   * Whether include a list of members of groups.
   *
   * @get get
   * @var bool
   */
  public $is_return_members = false;

  /**
   * The business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;
}

?>