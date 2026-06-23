<?php

namespace WellnessLiving\Wl\Video\Level;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves, changes, or deletes a video level.
 *
 * @method WlModelRequest delete() Deletes the specified video level.  Permanently removes the video level and unassigns it from all videos. If any videos are currently assigned to this level, a confirmation flag must be set; otherwise the API throws a confirmation-required error so the caller can prompt the user before proceeding.
 * @method WlModelRequest post() Creates a new video level.  Creates a difficulty level entry for the business video library. The new level is appended at the end of the current sort order and can be reordered afterwards using {@link \Wl\Video\Level\LevelListApi::put()}. Requires backend access with the video library management privilege.
 * @method WlModelRequest put() Updates the specified video level.  Renames an existing difficulty level in the business video library. Requires backend access with the video library management privilege.
 */
class LevelModel extends WlModelAbstract
{
  /**
   * If `true`, confirmation is required to delete videos. Otherwise, this will be `false`.
   *
   * @delete get
   * @var bool
   */
  public $is_delete_confirm;

  /**
   * The business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * The video level key.
   *
   * @delete get
   * @get get
   * @post get,result
   * @put get
   * @var string
   */
  public $k_video_level;

  /**
   * The video level title.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_title;
}

?>