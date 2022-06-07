<?php

namespace WellnessLiving\Studio\Task\Branch;

use WellnessLiving\WlModelAbstract;

/**
 * Changes branch information during build.
 *
 * This API is designed to use only from builds ('BranchCreate', 'BranchDelete') and is not expected that this API is
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
   * Set this property when a new branch is created. In other cases, an exception will be thrown.
   *
   * @post get
   * @var string[]
   */
  public $a_path = [];

  /**
   * Build key that creates a branch for the specified task.
   *
   * Primary key in the {@link \StudioBuildSql} table.
   *
   * @post get
   * @put get
   * @var string
   */
  public $k_build = '';

  /**
   * Task link of the branch.
   *
   * Copy of the {@link \StudioTaskSql}.<var>s_link</var> field.
   *
   * @delete get
   * @post get
   * @put get
   * @var string
   */
  public $s_task_link = '';
}

?>