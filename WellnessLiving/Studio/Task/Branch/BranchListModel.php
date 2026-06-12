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
   * @get result
   * @var array
   */
  public $a_data = [];
}

?>