<?php

namespace WellnessLiving\Studio\Task\Review;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about unfinished reviews with information about reviewers of the task.
 *
 * @method WlModelRequest get() Retrieves information about unfinished reviews for reviewers of the task.
 */
class UnfinishedModel extends WlModelAbstract
{
  /**
   * List of unfinished reviews with information about reviewers.
   *
   * @get result
   * @var array
   */
  public $a_review;

  /**
   * Studio task ID.
   *
   * @get get
   * @var string
   */
  public $k_task;
}

?>