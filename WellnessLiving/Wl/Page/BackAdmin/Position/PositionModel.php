<?php

namespace WellnessLiving\Wl\Page\BackAdmin\Position;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Coordinates of back admin container.
 *
 * @link https://dev.1024.info/ru-default/studio/task/wl-13130
 *
 * @method WlModelRequest get() Returns position of back admin container.
 * @method WlModelRequest post() Stores position of back admin container in the session.
 */
class PositionModel extends WlModelAbstract
{
  /**
   * Value of left property.
   *
   * @get result
   * @post post
   * @var string
   */
  public $i_left;

  /**
   * Value of top property.
   *
   * @get result
   * @post post
   * @var string
   */
  public $i_top;
}

?>