<?php 

namespace WellnessLiving\Wl\Video\Watch;

use WellnessLiving\WlModelAbstract;

/**
 * Saves information about watch video.
 */
class WatchModel extends WlModelAbstract
{
  /**
   * Current time in seconds at which the user is at in the video.
   *
   * @post post
   * @put post
   * @var int
   */
  public $i_current_time;

  /**
   * Duration in seconds which user has watched the video.
   *
   * @put post
   * @var int
   */
  public $i_watched;

  /**
   * Source ID.
   *
   * @post post
   * @var int
   */
  public $id_source;

  /**
   * Business key.
   *
   * @post post
   * @put post
   * @var string
   */
  public $k_business;

  /**
   * String key of the video.
   *
   * @post post
   * @var string
   */
  public $k_video;

  /**
   * Video watch key.
   *
   * @post result
   * @put post
   * @var string
   */
  public $k_video_watch;
}

?>