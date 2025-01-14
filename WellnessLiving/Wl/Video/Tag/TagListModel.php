<?php

namespace WellnessLiving\Wl\Video\Tag;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves video tags.
 */
class TagListModel extends WlModelAbstract
{
  /**
   * A list of video tags with the following structure: <dl>
   *   <dt>string <var>k_video_tag</var></dt>
   *   <dd>The video tag key.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The video tag title.</dd>
   * </dl>
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