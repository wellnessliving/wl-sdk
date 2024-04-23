<?php

namespace WellnessLiving\Wl\Video;

use WellnessLiving\Core\Sid\SortOrderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Video\Catalog\Filter\Sort\FilterSortSid;

/**
 * Returns a list of videos.
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
  public $a_calorie = [];

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
  public $a_duration = [];

  /**
   * A list of levels to show videos for. A level can refer to the difficulty ascribed to the video.
   *
   * @get get
   * @var string[]
   */
  public $a_level = [];

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
  public $a_location = [];

  /**
   * A list of shared video keys in their saved order.
   *
   * @put post
   * @var string[]
   */
  public $a_order = [];

  /**
   * Pagination data.
   *
   * @get result
   * @var array
   */
  public $a_page = [];

  /**
   * A list of staff members who appear in videos.
   *
   * @get get
   * @var string[]
   */
  public $a_staff = [];

  /**
   * A list of video categories to show videos from.
   *
   * @get get
   * @var string[]
   */
  public $a_video_category = [];

  /**
   * A list of video tags to show videos for.
   *
   * @get get
   * @var string[]
   */
  public $a_video_tag = [];

  /**
   * Page to return.
   * Pagination are ignored when count of videos less than {@link VideoListModel::VIDEO_COUNT_PAGINATION}.
   *
   * `null` if you need to return all the videos.
   *
   * @get get
   * @var int|null
   */
  public $i_page = null;

  /**
   * Sort order ID. One of {@link SortOrderSid} constants. `null` or 0 if order is undefined and depends on sort order.
   *
   * @get get,result
   * @var int|null
   */
  public $id_order = 0;

  /**
   * The sorting type.
   * A constant from {@link FilterSortSid}. `null` or 0 if sort is undefined and custom sort order is used.
   *
   * @get get,result
   * @var int|null
   */
  public $id_sort = 0;

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
  public $k_business = '';

  /**
   * The filter phrase to filter videos by name.
   *
   * @get get
   * @var string
   */
  public $text_search = '';

  /**
   * UID of the client who request list of videos.
   *
   * `null` if user is not signed in.
   *
   * NOTE: Not used directly in API, needed for {@link VideoListModel::KEY} constant.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>