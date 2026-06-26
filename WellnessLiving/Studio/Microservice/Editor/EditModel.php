<?php

namespace WellnessLiving\Studio\Microservice\Editor;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to create, edit and delete microservices.
 *
 * @method WlModelRequest delete() Deletes a microservice.
 * @method WlModelRequest get() Loads information about a microservice.
 * @method WlModelRequest post() Saves a microservice (create or update).
 */
class EditModel extends WlModelAbstract
{
  /**
   * Project role keys.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_project_role = [];

  /**
   * Whether the microservice has been deleted. `true` is the microservice is removed, `false` otherwise.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_remove = false;

  /**
   * A list of repositories and paths of this microservice.
   *
   * @get result
   * @post post
   * @var string
   */
  public $json_path = '';

  /**
   * If a microservice is edited, its key is stored here.
   *
   * `null` if a new microservice should be created.
   * This value is required for create and delete operations.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string|null
   */
  public $k_microservice = null;

  /**
   * Project key.
   *
   * @get result
   * @post post
   * @var string
   */
  public $k_project = '';

  /**
   * File name.
   *
   * @get result
   * @post post
   * @var string
   */
  public $s_file = '';

  /**
   * The group to which the microservice belongs.
   * See details in the <var>s_group</var>
   *
   * @get result
   * @post post
   * @var string
   */
  public $s_group = '';

  /**
   * Microservice-specific variables.
   *
   * @get result
   * @post post
   * @var string
   */
  public $s_variable = '';

  /**
   * Name of the microservice.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';
}

?>