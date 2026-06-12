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
<dl>
  <dt>string `k_video_tag`</dt>
  <dd>The video tag key.</dd>

  <dt>string `text_title`</dt>
  <dd>The video tag title.</dd>
</dl>
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