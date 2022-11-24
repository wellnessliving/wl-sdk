<?php 

namespace WellnessLiving\Wl\Video\Level;

use WellnessLiving\WlModelAbstract;

/**
 * Api for retrieves/change/delete video level.
 */
class LevelModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> if confirmation for delete video level which currently
   * associated to one or more videos, <tt>false</tt> otherwise.
   *
   * @delete get
   * @var bool
   */
  public $is_delete_confirm;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Video level key.
   *
   * @delete get
   * @get get
   * @post get,result
   * @put get
   * @var string
   */
  public $k_video_level;

  /**
   * Title of the video level.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_title;
}

?>