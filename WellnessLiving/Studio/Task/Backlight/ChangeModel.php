<?php

namespace WellnessLiving\Studio\Task\Backlight;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for change backlight on rapid index.
 *
 * @method WlModelRequest put() Changes backlights for task on rapid board.
 */
class ChangeModel extends WlModelAbstract
{
  /**
   * Studio task ID.
   *
   * @put get
   * @var string
   */
  public $k_task;

  /**
   * Color ID.
   * Primary key from {@Link \Studio\Task\Color\ColorSql}.
   *
   * @put get,result
   * @var string
   */
  public $k_task_color;

  /**
   * HEX value of the color of the background of the task.
   *
   * @put result
   * @var string
   */
  public $s_color_background;

  /**
   * HEX value of the color of the border of the task.
   *
   * @put result
   * @var string
   */
  public $s_color_border;

  /**
   * HEX value of the color of the link of the task.
   *
   * @put result
   * @var string
   */
  public $s_color_link;

  /**
   * HEX value of the color of the title of the task.
   *
   * @put result
   * @var string
   */
  public $s_color_text;
}

?>