<?php 

namespace WellnessLiving\Wl\Video\Category;

use WellnessLiving\WlModelAbstract;

/**
 * Api to return list of video categories.
 *
 * Results of the methods can be viewed in the model.
 */
class CategoryListModel extends WlModelAbstract
{
  /**
   * List of shard video category keys in order to be saved.
   *
   * @put post
   * @var string[]
   */
  public $a_order;

  /**
   * Categories of business video library {@link Wl_Video_Category_CategoryListModel.k_business}.
   *
   * Each element has next structure: <dl>
   *   <dt>bool <var>can_delete</var></dt>
   *   <dd>Whether video category can be deleted.</dd>
   *   <dt>int <var>i_video</var></dt>
   *   <dd>Number of videos.</dd>
   *   <dt>string <var>k_video_category</var></dt>
   *   <dd>Key of the video category.</dd>
   *   <dt>string <var>k_video_category_full</var></dt>
   *   <dd>String key of the video category.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Title of the category.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_video_category;

  /**
   * <tt>true</tt> if API is being used from backend, <tt>false</tt> otherwise.
   *
   * @get get
   * @put get
   * @var bool
   */
  public $is_backend = false;

  /**
   * <tt>true</tt> if skip group without video, <tt>false</tt> otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_skip_empty_group;

  /**
   * Key of the business.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Filter phrase to filter categories by name.
   *
   * @get get
   * @var string
   */
  public $text_filter;
}

?>