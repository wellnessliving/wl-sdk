<?php 

namespace WellnessLiving\Wl\Video\Category;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that saves video categories.
 */
class CategoryElementModel extends WlModelAbstract
{
  /**
   * A list of client and member types who can access videos from the category.
   *
   * @get result
   * @put post
   * @var string[]
   */
  public $a_login_type;

  /**
   * A list of member groups who can access videos from the category.
   *
   * @get result
   * @put post
   * @var string[]
   */
  public $a_member_group;

  /**
   * The category's placement in the business's list of categories.
   *
   * @get result
   * @var int
   */
  public $i_order;

  /**
   * This will be `true` if the video category is for cloud session recordings. Otherwise, this will be `false`.
   *
   * @get result
   * @put post
   * @var bool
   */
  public $is_cloud_recording = false;

  /**
   * This will be `true` if some client or member types can grant access to the video category. Otherwise, this will be
   * `false`.
   *
   * @get result
   * @put post
   * @var bool
   */
  public $is_login_type;

  /**
   * This will be `true` if some member groups can grant access to the video category.
   * Otherwise, this will be `false` if no member groups can grant access to the video category.
   *
   * @get result
   * @put post
   * @var bool
   */
  public $is_member_group = false;

  /**
   * The business key.
   *
   * @delete get
   * @get get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * The category key.
   *
   * @delete get
   * @get get,result
   * @put get,result
   * @var string
   */
  public $k_video_category;

  /**
   * The category name.
   *
   * @get result
   * @put post
   * @var string
   */
  public $text_title;
}

?>