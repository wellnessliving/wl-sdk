<?php

namespace WellnessLiving\Studio\Task\Color;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for manage colors for task.
 *
 * @method WlModelRequest delete() Deletes color by color ID for current user.
 * @method WlModelRequest get() Get all colors for current user.
 * @method WlModelRequest put() Adds/updates color for current user.
 */
class ColorModel extends WlModelAbstract
{
  /**
   * List of all colors for current user.
   *
   * @get result
   * @var array
   */
  public $a_color;

  /**
   * Task color key.
   *
   * <tt>null</tt> if we are adding new color.
   *
   * @delete get
   * @put get,result
   * @var string|null
   */
  public $k_task_color;

  /**
   * HEX value of the color of the background of the task.
   *
   * @put get,result
   * @var string
   */
  public $s_color_background;

  /**
   * HEX value of the color of the link of the task.
   *
   * @put get,result
   * @var string
   */
  public $s_color_link;

  /**
   * HEX value of the color of the title of the task.
   *
   * @put get,result
   * @var string
   */
  public $s_color_text;

  /**
   * Description of the color.
   *
   * @put get,result
   * @var string
   */
  public $text_title;
}

?>