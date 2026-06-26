<?php

namespace WellnessLiving\Studio\Task\View\Granular;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Edit a task granular errors.
 *
 * @method WlModelRequest post() Update granular error task key.
 */
class EditModel extends WlModelAbstract
{
  /**
   * Granular error task key.
   *
   * @post post
   * @var string
   */
  public $k_task = '';

  /**
   * Test file key.
   *
   * @post post
   * @var string
   */
  public $k_test_file = '';

  /**
   * Key of error message. Contains binary <tt>md5(text_message)</tt>.
   *
   * @post post
   * @var string
   */
  public $s_key = '';
}

?>