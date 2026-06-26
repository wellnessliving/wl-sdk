<?php

namespace WellnessLiving\Studio\Repository\Environment;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete studio environments.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest post() The method for create/update studio environment element.
 */
class EnvironmentElementModel extends WlModelAbstract
{
  /**
   * A list of sprint conditions relative to the selected environment.
   *
   * @get result
   * @post post
   * @var array
   */
  public $a_sprint_state = [];

  /**
   * Environment key.
   * <tt>null</tt> if a new studio environment should be created. This value is required for edit and delete operations.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_environment = null;

  /**
   * A list of allow/disallow environments.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_path = '';

  /**
   * A list of jira type task. The type separator is a comma.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_task_type = '';

  /**
   * Name of the environment.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';
}

?>