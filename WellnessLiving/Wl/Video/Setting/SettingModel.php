<?php

namespace WellnessLiving\Wl\Video\Setting;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for manage video settings.
 *
 * @method WlModelRequest put()
 */
class SettingModel extends WlModelAbstract
{
  /**
   * Quality ID.
   *
   * @put post
   * @var int|null
   */
  public $id_quality = null;

  /**
   * Business key.
   *
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Label for Video tab.
   *
   * @put post
   * @var string
   */
  public $s_video_tab_label = '';

  /**
   * <tt>true</tt> if calories is available for video, <tt>false</tt> otherwise.
   *
   * @put post
   * @var bool
   */
  public $show_calorie;

  /**
   * <tt>true</tt> if levels is available for video, <tt>false</tt> otherwise.
   *
   * @put post
   * @var bool
   */
  public $show_level;

  /**
   * <tt>true</tt> if calories is available for video, <tt>false</tt> otherwise.
   *
   * @put post
   * @var bool
   */
  public $show_view;
}

?>