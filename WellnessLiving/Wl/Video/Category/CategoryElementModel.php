<?php 

namespace WellnessLiving\Wl\Video\Category;

use WellnessLiving\WlModelAbstract;

/**
 * Api to save video categories.
 *
 * Results of the methods can be viewed in the model.
 */
class CategoryElementModel extends WlModelAbstract
{
  /**
   * List of client and member types, who can access videos from the category.
   *
   * @get result
   * @put post
   * @var string[]
   */
  public $a_login_type;

  /**
   * List of member groups, who can access videos from the category.
   *
   * @get result
   * @put post
   * @var string[]
   */
  public $a_member_group;

  /**
   * Place of the category in the list of categories of the business.
   *
   * @get result
   * @var int
   */
  public $i_order;

  /**
   * <tt>true</tt> if video category is for cloud session recordings.
   * Otherwise <tt>false</tt> if video category is not for cloud session recordings.
   *
   * @get result
   * @put post
   * @var bool
   */
  public $is_cloud_recording = false;

  /**
   * <tt>true</tt> if some client or member types can grant access to the video category, <tt>false</tt> otherwise.
   *
   * @get result
   * @put post
   * @var bool
   */
  public $is_login_type;

  /**
   * <tt>true</tt> if some member groups can grant access to the video category.
   * Otherwise <tt>false</tt> if none of the member groups can grant access to the video category.
   *
   * @get result
   * @put post
   * @var bool
   */
  public $is_member_group = false;

  /**
   * Business key from {@link \RsBusinessSql}.
   *
   * @delete get
   * @get get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Category key from {@link VideoCategorySql}.
   *
   * @delete get
   * @get get,result
   * @put get,result
   * @var string
   */
  public $k_video_category;

  /**
   * Name of the category.
   *
   * @get result
   * @put post
   * @var string
   */
  public $text_title;
}

?>