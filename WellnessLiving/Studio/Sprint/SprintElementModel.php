<?php

namespace WellnessLiving\Studio\Sprint;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete studio sprints.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class SprintElementModel extends WlModelAbstract
{
  /**
   * State of the sprint.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_state = 0;

  /**
   * Project key.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $k_project = null;

  /**
   * Sprint key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_sprint = null;

  /**
   * Name of the sprint.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';
}

?>