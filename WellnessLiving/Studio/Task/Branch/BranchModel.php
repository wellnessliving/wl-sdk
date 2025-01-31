<?php

namespace WellnessLiving\Studio\Task\Branch;

use WellnessLiving\WlModelAbstract;

/**
 * Runs a build for creation a new branch or delete an existing branch for the specified task.
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
   * Information about entities necessary for the functioning of the stand.
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
  public $a_stand_data = null;

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
   */
  public $id_build_mode = 1;

  /**
   * Stand status, one of {@link StandStatusSid}.
   *
   * `null` if not initialized and will be ignored.
   *
   * @get get,result
   * @put get
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