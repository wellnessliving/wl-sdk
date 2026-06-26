<?php

namespace WellnessLiving\Studio\Tv\Example;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get example chart data.
 *
 * @method WlModelRequest get() Get chart data.
 */
class PageChartModel extends WlModelAbstract
{
  /**
   * Chart data.
   *
   * Each element is an array of arrays of coordinates of points on a separate graph,
   * where the zero element is the abscissa, and the first is the ordinate of the point.
   *
   * @get result
   * @var float[][][]
   */
  public $a_data = [];

  /**
   * Group ID.
   *
   * @get get
   * @var int
   */
  public $id_group = 0;

  /**
   * Authorization password.
   *
   * @get get
   * @var string
   */
  public $s_password = '';

  /**
   * Chart description.
   *
   * @get result
   * @var string
   */
  public $text_data;
}

?>