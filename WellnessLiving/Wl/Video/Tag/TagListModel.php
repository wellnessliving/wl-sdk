<?php

namespace WellnessLiving\Wl\Video\Tag;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves video tags.
 *
 * @method WlModelRequest get() Returns the list of video tags for the business.  Returns all content tags configured for the business video library. Used to populate tag pickers when creating or editing videos. Requires an active video subscription.
 */
class TagListModel extends WlModelAbstract
{
  /**
   * A list of video tags with the following structure: 
   *
   * <dl>
   *   <dt>string `k_video_tag`</dt>
   *   <dd>The video tag key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The video tag title.</dd>
   * </dl>
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