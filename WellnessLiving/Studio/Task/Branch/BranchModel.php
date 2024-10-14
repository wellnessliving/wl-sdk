<?php

namespace WellnessLiving\Studio\Task\Branch;

use WellnessLiving\WlModelAbstract;

/**
 * Runs a build for creation a new branch or delete an existing branch for the specified task.
 */
class BranchModel extends WlModelAbstract
{
  /**
   * Information about entities necessary for the functioning of the stand.
   *
   * @get result
   * @put result
   * @var array|null
   */
  public $a_stand_data = null;

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
   * @get result
   * @put result
   * @var int|null
   */
  public $id_stand_status = null;

  /**
   * Branch status, one of {@link BranchStatusSid}.
   *
   * @get result
   * @var int|null
   */
  public $id_status = null;

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
   * @get result
   * @post get
   * @var string
   */
  public $k_task = '';

  /**
   * Actor user UID key.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $uid = '';

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