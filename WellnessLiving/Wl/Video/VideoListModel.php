<?php 

namespace WellnessLiving\Wl\Video;

use WellnessLiving\WlModelAbstract;

/**
 * Api to return list of videos.
 *
 * Results of the methods can be viewed in the model.
 */
class VideoListModel extends WlModelAbstract
{
  /**
   * Calorie interval under which you need to find the video.
   *
   * <dl>
   *  <dt>int [<var>i_from</var>]</dt>
   *  <dd>Minimum calories.</dd>
   *  <dt>int [<var>i_to</var>]</dt>
   *  <dd>Maximum calories.</dd>
   * </dl>
   *
   * @get get
   * @var int[]
   */
  public $a_calorie;

  /**
   * Duration interval under which you need to find the video.
   * The interval is set in seconds.
   *
   * <dl>
   *  <dt>int [<var>i_from</var>]</dt>
   *  <dd>Minimum duration. </dd>
   *  <dt>int [<var>i_to</var>]</dt>
   *  <dd>Maximum duration.</dd>
   * </dl>
   *
   * @get get
   * @var int[]
   */
  public $a_duration;

  /**
   * List of levels to show videos with.
   *
   * @get get
   * @var string[]
   */
  public $a_level;

  /**
   * A list of videos.
   *
   * @get result
   * @var array[]
   */
  public $a_list;

  /**
   * List of locations to show videos from.
   *
   * @get get
   * @var string[]
   */
  public $a_location;

  /**
   * List of shard video keys in order to be saved.
   *
   * @put post
   * @var string[]
   */
  public $a_order;

  /**
   * List of staff members to show videos with.
   *
   * @get get
   * @var string[]
   */
  public $a_staff;

  /**
   * List of video categories to show videos from.
   *
   * @get get
   * @var string[]
   */
  public $a_video_category;

  /**
   * List of video tags to show videos with.
   *
   * @get get
   * @var string[]
   */
  public $a_video_tag;

  /**
   * Sorting type.
   * Constant from {@link \Wl\Video\Catalog\Filter\Sort\FilterSortSid}.
   *
   * @get get
   * @var int
   */
  public $id_sort;

  /**
   * <tt>true</tt> if API is being used from backend, <tt>false</tt> otherwise.
   *
   * @get get
   * @put get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Business key from {@link \RsBusinessSql}.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * Filter phrase to filter videos by name.
   *
   * @get get
   * @var string
   */
  public $text_search;
}

?>