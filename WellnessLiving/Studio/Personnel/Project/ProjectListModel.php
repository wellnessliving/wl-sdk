<?php

namespace WellnessLiving\Studio\Personnel\Project;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for getting studio project for current personnel.
 *
 * @method WlModelRequest get()
 */
class ProjectListModel extends WlModelAbstract
{
  /**
   * A list of studio projects: 
   *
   * <dl>
   *   <dt>string `k_project`</dt>
   *   <dd>Project key.</dd>
   * 
   *   <dt>string `k_project_status`</dt>
   *   <dd>Project status key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Project title.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list;
}

?>