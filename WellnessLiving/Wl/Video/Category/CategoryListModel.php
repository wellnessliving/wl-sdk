<?php

namespace WellnessLiving\Wl\Video\Category;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns a list of video categories.
 */
class CategoryListModel extends WlModelAbstract
{
  /**
   * A list of shared video category keys displayed in the order to be saved.
   *
   * @put post
   * @var string[]
   */
  public $a_order;

  /**
   * The business video library categories as found in {@link CategoryListModel::$k_business}.
   *
   * Each element has the following structure: <dl>
   *   <dt>bool <var>can_delete</var></dt>
   *   <dd>Determines whether the video category can be deleted.</dd>
   *   <dt>int <var>i_video</var></dt>
   *   <dd>The number of videos.</dd>
   *   <dt>string <var>k_video_category</var></dt>
   *   <dd>The key of the video category.</dd>
   *   <dt>string <var>k_video_category_full</var></dt>
   *   <dd>The string key of the video category.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The title of the category.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_video_category;

  /**
   * If `true`, the API is being used from backend. Otherwise, this will be `false`.
   *
   * @get get
   * @put get
   * @var bool
   */
  public $is_backend = false;

  /**
   * If `true`, groups that are missing videos won't be displayed. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_skip_empty_group;

  /**
   * The business key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * The filter phrase used to filter categories by name.
   *
   * @get get
   * @var string
   */
  public $text_filter;
}

?>