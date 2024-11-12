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
   * @put get
   * @var array|string|null
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
   * @get get,result
   * @put get
   * @var int|null
   */
  public $id_stand_status = null;

  /**
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