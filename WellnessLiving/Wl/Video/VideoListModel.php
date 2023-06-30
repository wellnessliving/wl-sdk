<?php

namespace WellnessLiving\Wl\Video;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns a list of videos.
 */
class VideoListModel extends WlModelAbstract
{
  /**
   * The calorie range ascribed to the video to use for the search.
   *
   * <dl>
   *  <dt>int [<var>i_from</var>]</dt>
   *  <dd>The minimum number of calories.</dd>
   *  <dt>int [<var>i_to</var>]</dt>
   *  <dd>The maximum number of calories.</dd>
   * </dl>
   *
   * @get get
   * @var int[]
   */
  public $a_calorie;

  /**
   * The duration range ascribed to the video to use for the search.
   * The interval is set in seconds.
   *
   * <dl>
   *  <dt>int [<var>i_from</var>]</dt>
   *  <dd>The minimum duration. </dd>
   *  <dt>int [<var>i_to</var>]</dt>
   *  <dd>The maximum duration.</dd>
   * </dl>
   *
   * @get get
   * @var int[]
   */
  public $a_duration;

  /**
   * A list of levels to show videos for. A level can refer to the difficulty ascribed to the video.
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
  public $a_list = [];

  /**
   * A list of locations to show videos from.
   *
   * @get get
   * @var string[]
   */
  public $a_location;

  /**
   * A list of shared video keys in their saved order.
   *
   * @put post
   * @var string[]
   */
  public $a_order;

  /**
   * A list of staff members who appear in videos.
   *
   * @get get
   * @var string[]
   */
  public $a_staff;

  /**
   * A list of video categories to show videos from.
   *
   * @get get
   * @var string[]
   */
  public $a_video_category;

  /**
   * A list of video tags to show videos for.
   *
   * @get get
   * @var string[]
   */
  public $a_video_tag;

  /**
   * The sorting type.
   * A constant from {@link \WellnessLiving\Wl\Video\Catalog\Filter\Sort\FilterSortSid}.
   *
   * @get get
   * @var int
   */
  public $id_sort;

  /**
   * If `true`, the API is being used from backend. Otherwise, this will be `false`.
   *
   * @get get
   * @put get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The business key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * The filter phrase to filter videos by name.
   *
   * @get get
   * @var string
   */
  public $text_search;

  /**
   * UID of the client who request list of videos.
   *
   * `null` if user is not signed in.
   *
   * *NOTE: Not used directly in API, needed for {@link \WellnessLiving\Wl\Video\VideoListModel::KEY} constant.
   *
   * @get get
   * @var string|null
   */
  public $uid;
}

?>