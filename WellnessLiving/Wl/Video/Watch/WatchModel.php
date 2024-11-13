<?php

namespace WellnessLiving\Wl\Video\Watch;

use WellnessLiving\WlModelAbstract;

/**
 * Saves information about a watched video.
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
   * @see WatchSourceSid
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
   * The video string key.
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