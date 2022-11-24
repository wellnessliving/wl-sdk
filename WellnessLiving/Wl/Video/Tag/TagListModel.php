<?php 

namespace WellnessLiving\Wl\Video\Tag;

use WellnessLiving\WlModelAbstract;

/**
 * Api for get video tags.
 */
class TagListModel extends WlModelAbstract
{
  /**
   * List of video tags. Has next structure: <dl>
   *   <dt>string <var>k_video_tag</var></dt>
   *   <dd>Video tag key.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Title of the video tag.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_tag_list = [];

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>