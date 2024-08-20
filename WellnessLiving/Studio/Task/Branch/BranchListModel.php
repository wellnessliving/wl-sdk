<?php

namespace WellnessLiving\Studio\Task\Branch;

use WellnessLiving\WlModelAbstract;

/**
 * Runs a build for creation a new branch or delete an existing branch for the specified task.
 */
class BranchListModel extends WlModelAbstract
{
  /**
   * List of branch. One element contains: <dl>
   *  <dt>string[] <var>a_path</var></dt>
   *  <dd>
   *    Information about paths into which catalogs are cloned/copied.
   *
   *   </dd>
   *   <dt>string <var>dtu_create</var></dt>
   *   <dd>Date when branch was created.</dd>
   *   <dt>string <var>k_deploy_instance</var></dt>
   *   <dd>Key of deployment instance.</dd>
   *   <dt>string <var>k_task</var></dt>
   *   <dd>Task key.</dd>
   *   <dt>string <var>s_fio</var></dt>
   *   <dd>Task author name.</dd>
   *   <dt>string <var>text_create</var></dt>
   *   <dd>Formatted time interval when branch was created.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Title of the task.</dd>
   *   <dt>string <var>url_task</var></dt>
   *   <dd>URL of the task.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_data;
}

?>