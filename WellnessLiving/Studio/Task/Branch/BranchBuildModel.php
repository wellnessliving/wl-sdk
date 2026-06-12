<?php

namespace WellnessLiving\Studio\Task\Branch;

use WellnessLiving\WlModelAbstract;

/**
 * Changes branch information during build.
 *
 * This API is designed to use only from builds (`BranchCreate`, `BranchDelete`) and is not expected that this API is
 *   called from other places.
 */
class BranchBuildModel extends WlModelAbstract
{
  /**
   * Information about paths into which catalogs are cloned.
   *
   * Keys are aliases of the original repository catalogs.
   * Values are paths into which original catalogs are cloned.
   *
   * Each element has the following structure:
   *
   * Set this property when a new branch is created. In other cases, an exception will be thrown.
   *
   * <dl>
   *   <dt>int `id_repository_server_type`</dt>
   *   <dd>Repository service type ID.</dd>
   * 
   *   <dt>string `s_destination`</dt>
   *   <dd>Path into which original catalog is cloned/copied.</dd>
   * 
   *   <dt>string `s_repository`</dt>
   *   <dd>Repository name.</dd>
   * 
   *   <dt>string `s_source`</dt>
   *   <dd>Path of the original catalog.</dd>
   * </dl>
   * @post get
   * @var array
   */
  public $a_path = [];

  /**
   * Build key that creates a branch for the specified task.
   *
   * @post get
   * @put get
   * @var string
   */
  public $k_build = '';

  /**
   * Task link of the branch.
   *
   * @delete get
   * @post get
   * @put get
   * @var string
   */
  public $s_task_link = '';
}

?>