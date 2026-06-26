<?php

namespace WellnessLiving\Studio\Integration\Fisheye;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Locks/Unlocks fisheye revision for future commits.
 *
 * @method WlModelRequest post()
 */
class FisheyeReviewLockModel extends WlModelAbstract
{
  /**
   * Whether revision should be locked for future commits.
   *
   * `true` to lock revision
   * `false` to unlock revision.
   *
   * @post post
   * @var string
   */
  public $is_lock;

  /**
   * Key of the studio task within which review status should be changed.
   * This will influence list of reviewers to check whether current user has access to change status.
   *
   * `null` to ignore list of reviewers from Studio and only check reviewers on Fisheye.
   *
   * @post post
   * @var string|null
   */
  public $k_task = null;

  /**
   * Fisheye revision key.
   *
   * @post post
   * @var string
   */
  public $s_review_key;
}

?>