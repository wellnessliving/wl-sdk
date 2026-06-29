<?php

namespace WellnessLiving\Wl\Video\Tag;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves, changes, or deletes a video tag.
 *
 * @method WlModelRequest delete() Deletes the specified video tag.  Permanently removes the video tag from the business library. If any videos are currently assigned to this tag, a confirmation flag must be set; otherwise the API throws a confirmation-required error so the caller can prompt the user before proceeding.
 * @method WlModelRequest post() Creates a new video tag.  Adds a new content tag to the business video library for use when categorizing videos. Requires backend access and an active video subscription with at least the basic plan.
 * @method WlModelRequest put() Updates the specified video tag.  Renames an existing content tag in the business video library. Requires backend access and an active video subscription with at least the basic plan.
 */
class TagModel extends WlModelAbstract
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
   * The video tag key.
   *
   * @delete get
   * @get get
   * @post get,result
   * @put get
   * @var string
   */
  public $k_video_tag;

  /**
   * The video tag title.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_title;
}

?>