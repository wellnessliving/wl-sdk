<?php

namespace WellnessLiving\Studio\Task\Branch;

use WellnessLiving\Studio\Stand\StandStatusSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Runs a build for creation a new branch or delete an existing branch for the specified task.
 *
 * @method WlModelRequest delete() Changes a status of the branch for the specified task in the database and runs build for deleting a branch.  Sets branch status to deleting and starts the `BranchDelete` build on the deployment instance. Returns the build log URL on success.
 * @method WlModelRequest get() Returns branch status and data for a task.  Retrieves `id_branch_status`, `id_stand_status`, and additional branch data for the specified task.
 * @method WlModelRequest post() Registers a new branch for the specified task in the database and runs a build for creating a branch.  Validates the task, deployment instance, and microservice, then creates a branch record and starts the  `BranchCreate` build. Returns the build log URL on success.
 * @method WlModelRequest put() Updates branch data for a task.  Saves additional branch data (`a_branch_data`) for the branch of the specified task.
 */
class BranchModel extends WlModelAbstract
{
  /**
   * Addition information about branch and related entities.
   * Has an arbitrary structure.
   *
   * `string` if it needs to set an empty value.
   * `null` will not change.
   *
   * @get result
   * @post post
   * @put post
   * @var array|string|null
   */
  public $a_branch_data = null;

  /**
   * Branch status, one of {@link BranchStatusSid}.
   *
   * @get result
   * @var int|null
   */
  public $id_branch_status = null;

  /**
   * Mode of the <tt>BranchDelete</tt> build.
   *
   * @delete get
   * @var int
   * @see BranchDeleteModeSid
   */
  public $id_build_mode = 1;

  /**
   * Stand status, one of {@link StandStatusSid}.
   *
   * `null` if not initialized and will be ignored.
   *
   * @get result
   * @var int|null
   */
  public $id_stand_status = null;

  /**
   * Deployment instance key which creates/deletes a branch for the specified task.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $k_deploy_instance = '';

  /**
   * A microservice key.
   *
   * @post get
   * @var string
   */
  public $k_microservice = '';

  /**
   * Task key within which a branch should be created/deleted.
   *
   * @delete get
   * @get get,result
   * @post get
   * @put get
   * @var string
   */
  public $k_task = '';

  /**
   * A microservice environment for create branch.
   *
   * @max-length 128
   * @post get
   * @var string
   */
  public $s_environment = '';

  /**
   * Url to build page.
   *
   * Empty string means that build is not started.
   *
   * @delete result
   * @post result
   * @var string
   */
  public $url_build = '';
}

?>