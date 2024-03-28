<?php

namespace WellnessLiving\Studio\Task\Branch;

use WellnessLiving\WlModelAbstract;

/**
 * Changes branch information during build.
 *
 * This API is designed to use only from builds (<tt>BranchCreate</tt>, <tt>BranchDelete</tt>) and is not expected that this API is
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
   * Each element has the following structure:<dl>
   * <dt>int <var>id_repository_server_type</var></dt>
   * <dd>Repository service type ID.</dd>
   * <dt>string <var>s_destination</var></dt>
   * <dd>Path into which original catalog is cloned/copied.</dd>
   * <dt>string <var>s_repository</var></dt>
   * <dd>Repository name.</dd>
   * <dt>string <var>s_source</var></dt>
   * <dd>Path of the original catalog.</dd>
   * </dl>
   *
   * Set this property when a new branch is created. In other cases, an exception will be thrown.
   *
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