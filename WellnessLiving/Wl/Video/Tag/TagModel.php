<?php 

namespace WellnessLiving\Wl\Video\Tag;

use WellnessLiving\WlModelAbstract;

/**
 * Api for retrieves/change/delete video tag.
 */
class TagModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> if confirmation for delete video tag which currently
   * associated to one or more videos, <tt>false</tt> otherwise.
   *
   * @delete get
   * @var bool
   */
  public $is_delete_confirm;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Video tag key.
   *
   * @delete get
   * @get get
   * @post get,result
   * @put get
   * @var string
   */
  public $k_video_tag;

  /**
   * Title of the video tag.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_title;
}

?>