<?php

namespace WellnessLiving\Wl\Video\Level;

use WellnessLiving\WlModelAbstract;

/**
 * Changes the order of video levels.
 */
class LevelListModel extends WlModelAbstract
{
  /**
   * A list of video levels with the following structure: <dl>
   *   <dt>string <var>k_video_level</var></dt>
   *   <dd>The video level key.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The video level title.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_level_list = [];

  /**
   * A list of video level keys in the order to be saved.
   *
   * @put post
   * @var string[]
   */
  public $a_order = [];

  /**
   * The business key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business;
}

?>