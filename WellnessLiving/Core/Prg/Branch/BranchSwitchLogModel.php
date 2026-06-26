<?php

namespace WellnessLiving\Core\Prg\Branch;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Switching repositories in local directories.
 *
 * @method WlModelRequest get()
 */
class BranchSwitchLogModel extends WlModelAbstract
{
  /**
   * Error logs on branch switching.
   *
   * @get result
   * @var string[]
   */
  public $a_error_log = [];

  /**
   * Logs on branch switching.
   *
   * @get result
   * @var string[]
   */
  public $a_log = [];

  /**
   * List of repositories that failed the last switch and could not be auto-repaired.
   * Each element has the same structure as a {@link BranchRepairTool::statusRead()} entry
   *
   * Empty array if all repositories are healthy.
   *
   * @get result
   * @var string[][]
   */
  public $a_repair_status = [];

  /**
   * Whether the branch switching operation is complete and no more logs are generated.
   * `true` - switch done, `false` - the replacement of branches is still ongoing.
   *
   * @get result
   * @var bool
   */
  public $is_logging_done = true;

  /**
   * Whether branch switching is currently blocked due to unresolved repair errors from a previous switch.
   * `true` - blocked (at least one repository requires manual repair),
   * `false` - all repositories are healthy.
   *
   * @get result
   * @var bool
   */
  public $is_switch_blocked = false;
}

?>