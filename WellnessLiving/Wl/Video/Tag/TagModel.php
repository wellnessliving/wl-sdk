<?php

namespace WellnessLiving\Wl\Video\Tag;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves, changes, or deletes a video tag.
 */
class TagModel extends WlModelAbstract
{
  /**
     * If `true`, confirmation is required to delete videos. Otherwise, this will be `false`.
     *
     * @delete get
     * @var bool
     */
  public $is_delete_confirm;

  /**
     * The business key.
     *
     * @delete get
     * @get get
     * @post get
     * @put get
     * @var string
     *
     */
  public $k_business;

  /**
     * The video tag key.
     *
     * @delete get
     * @get get
     * @post get,result
     * @put get
     * @var string
     *
     */
  public $k_video_tag;

  /**
     * The video tag title.
     *
       * @post post
     * @put post
         * @var string
     */
  public $text_title;
}

?>