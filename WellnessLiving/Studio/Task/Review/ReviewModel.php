<?php

namespace WellnessLiving\Studio\Task\Review;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves information about review of the task.
 *
 * @method WlModelRequest delete() Removes fisheye review from studio.
 * @method WlModelRequest get() Gets fisheye review information.
 * @method WlModelRequest post() Updates fisheye review information.
 */
class ReviewModel extends WlModelAbstract
{
  /**
   * List of personnel of the revision which has some activity in review.
   *
   * @get result
   * @post result
   * @var array
   */
  public $a_reviewer;

  /**
   * Whether revision lock status can be changed.
   *
   * @get result
   * @post result
   * @var bool
   */
  public $can_lock;

  /**
   * Whether revision is locked for future commits.
   *
   * @get result
   * @post result
   * @var bool
   */
  public $is_lock;

  /**
   * Studio task ID. Obligatory field.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_task;

  /**
   * Studio task revision key.
   *
   * `null` in a case of adding new revision.
   *
   * @delete get
   * @get get,result
   * @post get,result
   * @var string|null
   */
  public $k_task_review;

  /**
   * Status of the revision.
   *
   * @get result
   * @post result
   * @var string
   */
  public $sid_status;

  /**
   * Studio revision comment.
   *
   * @get result
   * @post result
   * @var string
   */
  public $text_comment;

  /**
   * Fisheye revision key.
   *
   * @get result
   * @post post,result
   * @var string|null
   */
  public $text_review;

  /**
   * Task title to copy to clipboard.
   *
   * @get result
   * @post result
   * @var string
   */
  public $text_task_title;

  /**
   * Url link to the revision.
   *
   * @get result
   * @post result
   * @var string
   */
  public $url_review;
}

?>