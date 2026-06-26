<?php

namespace WellnessLiving\Wl\Video\Watch;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves information about a watched video.
 *
 * @method WlModelRequest post() Records the start of a video watch session for the current user.  Creates a new watch record for the user and video, verifying that the user has access to the video under their current membership. Returns the watch key that the client must use for subsequent progress updates via {@link \Wl\Video\Watch\WatchApi::put()}. Admin users are silently skipped - no record is created for them.
 * @method WlModelRequest put() Updates the watch progress (current position and total watched time) for an existing watch record.  Advances the stored playback position and accumulated watch time for the given watch record. The total watched time can only increase; updates that report a smaller value than what is already stored are silently ignored to handle out-of-order requests.
 */
class WatchModel extends WlModelAbstract
{
  /**
   * The current time in seconds the user is at in the video.
   *
   * @post post
   * @put post
   * @var int
   */
  public $i_current_time;

  /**
   * The duration in seconds the user has watched the video for.
   *
   * @put post
   * @var int
   */
  public $i_watched;

  /**
   * The source ID.
   *
   * @post post
   * @var int
   */
  public $id_source;

  /**
   * The business key.
   *
   * @post post
   * @put post
   * @var string
   */
  public $k_business;

  /**
   * The video string key:
   * * [Deprecated] String key in old format. 
   * * String key in new format. 
   *
   * @post post
   * @var string
   */
  public $k_video;

  /**
   * The video watch key.
   *
   * @post result
   * @put post
   * @var string
   */
  public $k_video_watch;
}

?>