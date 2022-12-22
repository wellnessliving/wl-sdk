<?php 

namespace WellnessLiving\Wl\Video\Level;

use WellnessLiving\WlModelAbstract;

/**
 * Api for change order of video levels.
 */
class LevelListModel extends WlModelAbstract
{
  /**
   * List of video levels. Has next structure: <dl>
   *   <dt>string <var>k_video_level</var></dt>
   *   <dd>Video level key.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Title of the video level.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_level_list = [];

  /**
   * List of video level keys in order to be saved.
   *
   * @put post
   * @var string[]
   */
  public $a_order = [];

  /**
   * Business key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business;
}

?>