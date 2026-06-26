<?php

namespace WellnessLiving\Studio\Task\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Edits task on studio.
 *
 * @method WlModelRequest post() Edits studio task.
 */
class EditModel extends WlModelAbstract
{
  /**
   * Studio environment key that should be edited.
   *
   * `null` if value should not be changed.
   * zero - reset manually set environment or if an incorrect value was set.
   *
   * @post result,post
   * @var string|null
   */
  public $k_environment = null;

  /**
   * Studio task key that should be edited.
   *
   * @post post
   * @var string
   */
  public $k_studio_task;

  /**
   * Studio task priority key that should be edited.
   *
   * <tt>null</tt> if value should not be changed.
   *
   * @post post
   * @var string|null
   */
  public $k_task_priority = null;

  /**
   * Studio task type key that should be edited.
   *
   * <tt>null</tt> if value should not be changed.
   *
   * @post post
   * @var string|null
   */
  public $k_task_type = null;

  /**
   * Acceptance test of the studio task.
   *
   * <tt>null</tt> if value should not be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_acceptance;

  /**
   * Description of the studio task.
   *
   * <tt>null</tt> if value should not be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_description;

  /**
   * Title of the studio task.
   *
   * <tt>null</tt> if value should not be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_title;
}

?>