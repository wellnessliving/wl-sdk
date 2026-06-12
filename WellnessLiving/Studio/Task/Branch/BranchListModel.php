<?php

namespace WellnessLiving\Studio\Task\Branch;

use WellnessLiving\WlModelAbstract;

/**
 * Runs a build for creation a new branch or delete an existing branch for the specified task.
 */
class BranchListModel extends WlModelAbstract
{
  /**
   * List of branch. One element contains: 
   *
   * <dl>
   *   <dt>string[] `a_path`</dt>
   *   <dd>
   *     Information about paths into which catalogs are cloned/copied.
   *
   *   </dd>
   * 
   *   <dt>string `dtu_create`</dt>
   *   <dd>Date when branch was created.</dd>
   * 
   *   <dt>string `k_deploy_instance`</dt>
   *   <dd>Key of deployment instance.</dd>
   * 
   *   <dt>string `k_task`</dt>
   *   <dd>Task key.</dd>
   * 
   *   <dt>string `text_create`</dt>
   *   <dd>Formatted time interval when branch was created.</dd>
   * 
   *   <dt>string `text_fio`</dt>
   *   <dd>Task author name.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the task.</dd>
   * 
   *   <dt>string `url_task`</dt>
   *   <dd>URL of the task.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_data = [];
}

?>