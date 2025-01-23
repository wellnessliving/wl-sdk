<?php

namespace WellnessLiving\Wl\Video\Level;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves, changes, or deletes a video level.
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