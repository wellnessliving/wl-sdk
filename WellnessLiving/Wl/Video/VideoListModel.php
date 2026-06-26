<?php

namespace WellnessLiving\Wl\Video;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of videos.
 *
 * @method WlModelRequest get() Returns the list of videos for the specified business.  Returns videos for the business video library with optional filtering by category, tag, difficulty level, staff, location, calorie range, and duration. Supports sorting and pagination for large libraries. In frontend mode, results are restricted to videos the current user is allowed to watch based on their membership and login type.
 * @method WlModelRequest put() Updates the custom sort order of videos for the specified business.  Reorders the video library according to the provided list. Only takes effect when the library is configured to use the custom sort order. Requires backend access with the video library management privilege.
 */
class VideoListModel extends WlModelAbstract
{
  /**
   * The calorie range ascribed to the video to use for the search.
   *
   * <dl>
   *   <dt>int `i_from`</dt>
   *   <dd>The minimum number of calories.</dd>
   * 
   *   <dt>int `i_to`</dt>
   *   <dd>The maximum number of calories.</dd>
   * </dl>
   * @get get
   * @var int[]
   */
  public $a_calorie = [];

  /**
   * The duration range ascribed to the video to use for the search.
   * The interval is set in seconds.
   *
   * <dl>
   *   <dt>int `i_from`</dt>
   *   <dd>The minimum duration.</dd>
   * 
   *   <dt>int `i_to`</dt>
   *   <dd>The maximum duration.</dd>
   * </dl>
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
   * Each element: 
   *
   * <dl>
   *   <dt>array[] `a_staff`</dt>
   *   <dd>
   *     List of staff members associated with the video.
   *     <dl>
   *       <dt>string `uid_staff`</dt>
   *       <dd>UID of the staff. </dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>Full name of the staff.</dd>
   * 
   *       <dt>string `k_staff`</dt>
   *       <dd>Staff key. Only for legacy apps. </dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_video_category`</dt>
   *   <dd>
   *     List of video categories.
   *     <dl>
   *       <dt>string `k_video_category`</dt>
   *       <dd>Video category key. </dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Category name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_video_tag`</dt>
   *   <dd>
   *     List of video tags.
   *     <dl>
   *       <dt>string `k_video_tag`</dt>
   *       <dd>Video tag key. </dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Tag name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string|null `dtl_publish`</dt>
   *   <dd>Date and time when the video becomes published, in the business time zone. `null` if not set.</dd>
   * 
   *   <dt>string|null `dtl_unpublish`</dt>
   *   <dd>Date and time when the video becomes unpublished, in the business time zone. `null` if not set.</dd>
   * 
   *   <dt>string `dtl_upload`</dt>
   *   <dd>Date and time when the video was uploaded, in the business time zone.</dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>HTML description of the video parsed from `xml_description`.</dd>
   * 
   *   <dt>int `i_calorie`</dt>
   *   <dd>Number of calories burned during the video session.</dd>
   * 
   *   <dt>int `i_current_percent`</dt>
   *   <dd>Percentage of the video watched by the current user.</dd>
   * 
   *   <dt>int `i_current_time`</dt>
   *   <dd>Current watch position in seconds for the current user.</dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Video duration in seconds.</dd>
   * 
   *   <dt>int `i_watch`</dt>
   *   <dd>Total number of views.</dd>
   * 
   *   <dt>int `id_source`</dt>
   *   <dd>Video source.</dd>
   * 
   *   <dt>bool `is_calorie`</dt>
   *   <dd>`true` if calorie information is enabled for this video; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_converted`</dt>
   *   <dd>`true` if the video has been converted to HLS format; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_published`</dt>
   *   <dd>`true` if the video is currently published; `false` otherwise.</dd>
   * 
   *   <dt>bool `is_video_level`</dt>
   *   <dd>`true` if a difficulty level is assigned to this video; `false` otherwise.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key. </dd>
   * 
   *   <dt>string `k_video`</dt>
   *   <dd>Video key. </dd>
   * 
   *   <dt>string `k_video_binary`</dt>
   *   <dd>Binary video key. </dd>
   * 
   *   <dt>string|null `k_video_level`</dt>
   *   <dd>Video level key. `null` if no level assigned.
   * </dd>
   * 
   *   <dt>bool `show_calorie`</dt>
   *   <dd>`true` if calorie count should be displayed; `false` otherwise.</dd>
   * 
   *   <dt>bool `show_level`</dt>
   *   <dd>`true` if difficulty level should be displayed; `false` otherwise.</dd>
   * 
   *   <dt>bool `show_view`</dt>
   *   <dd>`true` if view count should be displayed; `false` otherwise.</dd>
   * 
   *   <dt>string `text_level_title`</dt>
   *   <dd>Difficulty level title.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Video title.</dd>
   * 
   *   <dt>string|null `url_thumbnail`</dt>
   *   <dd>URL of the video thumbnail image.</dd>
   * 
   *   <dt>string|null `url_video`</dt>
   *   <dd>
   *     URL of the video file (HLS stream). `null` if not available.
   * See {@link VideoElementModel::$url_video} for details about the video URL.
   *   </dd>
   * </dl>
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
   * Otherwise contains a list of page entries as: 
   *
   * <dl>
   *   <dt>bool `is-next`</dt>
   *   <dd>`true` for the "next page" navigation entry. Only present on the next-page entry.</dd>
   * 
   *   <dt>bool `is-previous`</dt>
   *   <dd>`true` for the "previous page" navigation entry. Only present on the previous-page entry.</dd>
   * 
   *   <dt>bool `is-selected`</dt>
   *   <dd>`true` if this entry represents the current page. Only present on the selected page entry.</dd>
   * 
   *   <dt>int `page`</dt>
   *   <dd>Page number. `0` represents a skipped range (ellipsis) between non-adjacent pages.</dd>
   * 
   *   <dt>bool `skip`</dt>
   *   <dd>`true` if this entry represents a skipped page range (ellipsis). Only present on skip entries.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_page = [];

  /**
   * A list of video sources.
   *
   * @get get
   * @var string[]
   */
  public $a_source = [];

  /**
   * A list of staff members who appear in videos.
   *
   * @get get
   * @var string[]
   * @deprecated This property will be removed in the future. Use {@link VideoListModel::$a_staff_uid} instead.
   */
  public $a_staff = [];

  /**
   * A list of staff members who appear in videos.
   *
   * @get get
   * @var string[]
   */
  public $a_staff_uid = [];

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
   *
   * `null` if you need to return all the videos.
   *
   * @get get
   * @var int|null
   */
  public $i_page = null;

  /**
   * Embedded video source.
   *
   * `null` if video is uploaded.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $id_embed_source = null;

  /**
   * Sort order ID. `null` or 0 if order is undefined and depends on sort order.
   *
   * @get get,result
   * @var int|null
   */
  public $id_order = 0;

  /**
   * The sorting type.
   * `null` or 0 if sort is undefined and custom sort order is used.
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
   * Video.js media player initialization parameters in JSON format.
   *
   * Usage example:
   *      <script>
   *          videojs($('video'), {
   *              "techOrder": ["Vimeo"],
   *              "sources": [
   *                  {"type": "video/vimeo", "src": "https://vimeo.com/123456789"}
   *              ]
   *          });
   *      </script>
   *
   * @get result
   * @put result
   * @var string
   */
  public $json_setup = '';

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
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>