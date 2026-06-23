<?php

namespace WellnessLiving\Studio\Task\Branch;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Changes branch information during build.
 *
 * This API is designed to use only from builds (`BranchCreate`, `BranchDelete`) and is not expected that this API is
 *   called from other places.
 *
 * @method WlModelRequest delete() Deletes a branch from the database.  <tt>BranchDelete</tt> build calls at the end of the executing.
 * @method WlModelRequest post() Sets build that creates a branch and information about paths into which catalogs are cloned.  <tt>BranchCreate</tt> build calls at the start of the executing.
 * @method WlModelRequest put() Changes branch status as {@link \Studio\Task\Branch\BranchStatusSid::READY}.  <tt>BranchCreate</tt>&gt; build calls at the end of the executing.
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