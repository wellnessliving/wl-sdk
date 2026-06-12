<?php

namespace WellnessLiving\Wl\Video\Tag;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves video tags.
 */
class TagListModel extends WlModelAbstract
{
  /**
   * A list of video tags with the following structure: 
   *
   * @get result
   * @var array[]
   */
  public $a_tag_list = [];

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>