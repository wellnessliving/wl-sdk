<?php

namespace WellnessLiving\Core\Prg\Branch;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Verifies that a previously broken SVN working copy is now healthy and unblocks branch switching for it.
 *
 * Called from the PRG Branch page after the developer manually repairs a broken repository.
 * Runs `svn info` on the given path and, if successful, clears the error status so the next
 *  branch switch is no longer blocked for that path.
 *
 * @method WlModelRequest post()
 */
class BranchRepairVerifyModel extends WlModelAbstract
{
  /**
   * Whether the working copy at {@link BranchRepairVerifyModel::$s_path_local} passed the integrity check.
   * `true` - healthy, error status cleared. `false` - still broken, see {@link BranchRepairVerifyModel::$text_error}.
   *
   * @get result
   * @var bool
   */
  public $is_ok = false;

  /**
   * Local path to the SVN working copy to verify.
   *
   * @post post
   * @var string
   */
  public $s_path_local = '';

  /**
   * Error description when {@link BranchRepairVerifyModel::$is_ok} is `false`.
   *
   * @get result
   * @var string
   */
  public $text_error = '';
}

?>