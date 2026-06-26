<?php

namespace WellnessLiving\Wl\Video\Level;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for filtering of video levels.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest put() Updates the order of video levels.  Reorders the difficulty levels for the business video library according to the provided list. Requires backend access with the video library management privilege.
 */
class LevelListFilterModel extends WlModelAbstract
{
  /**
   * A list of video levels with the following structure: 
   *
   * <dl>
   *   <dt>string `k_video_level`</dt>
   *   <dd>The video level key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The video level title.</dd>
   * </dl>
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
  public $k_business = null;
}

?>