<?php

namespace WellnessLiving\Wl\Member\Group\GroupList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Member groups list.
 *
 * @method WlModelRequest delete() Removes groups.  Deletes specified groups and associated search templates.
 * @method WlModelRequest get() Returns all member groups list in the business if <var>$a_member_group_select</var> is empty, otherwise filters result according to <var>$a_member_group_select</var>.  If <var>is_return_members</var> is `true` includes in the result list of members of each groups.
 * @method WlModelRequest put() Updates the order of groups in a list.  Saves the display order of member groups for the business using the positions supplied in `$a_member_group_order`, verifying that all specified group keys belong to the business before writing.
 */
class ListModel extends WlModelAbstract
{
  /**
   * Member groups list:
   *
   * <dl>
   *   <dt>string `k_member_group`</dt>
   *   <dd>The key of the member group. </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The name of the member group.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_member_group;

  /**
   * List of groups to be deleted.
   *
   * @delete post
   * @var string[]
   */
  public $a_member_group_delete = [];

  /**
   * List of groups in the order in which they will be saved.
   *
   * @put post
   * @var string[]
   */
  public $a_member_group_order = [];

  /**
   * List of groups for filtering groups of business.
   *
   * `null` in the case when need to return all groups of business.
   *
   * @get get
   * @var string[]|null
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