<?php

namespace WellnessLiving\Wl\Video\Level;

use WellnessLiving\WlModelAbstract;

/**
 * Changes the order of video levels.
 */
class LevelListModel extends WlModelAbstract
{
  /**
   * A list of video levels with the following structure: 
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