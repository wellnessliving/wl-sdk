<?php

namespace WellnessLiving\Studio\Project\Role;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for getting studio project roles.
 *
 * @method WlModelRequest get()
 */
class RoleListModel extends WlModelAbstract
{
  /**
   * A list of project roles. Each element of the array has a next structure: 
   *
   * <dl>
   *   <dt>string `k_project_role`</dt>
   *   <dd>Project role key.</dd>
   * 
   *   <dt>string `s_project_role`</dt>
   *   <dd>Project role title.</dd>
   * </dl>
   * @get result
   * @var string[][]
   */
  public $a_list;
}

?>