<?php

namespace WellnessLiving\Wl\Video;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of video categories.
 */
class VideoElementModel extends WlModelAbstract
{
  /**
   * The keys of the locations where this video is available.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_location;

  /**
   * The keys of the staff members who are on the video.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_staff;

  /**
   * A list of staff members associated with the video. Every item has the following structure:<dl>
   *   <dt>string <var>k_staff</var></dt>
   *   <dd>The staff member key.</dd>
   *   <dt>string <var>text_name</var></dt>
   *   <dd>The staff member's full name.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_staff_info;

  /**
   * The video category keys where this video can be found.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_video_category;

  /**
   * The video tag keys.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_video_tag;

  /**
   * The date and time when the video was published.
   *
   * This will be `null` if the published date is not set yet.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $dtl_publish;

  /**
   * The date and time when the video was unpublished.
   *
   * This will be `null` if the unpublished date is not set yet.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $dtl_unpublish;

  /**
   * The date when the video was uploaded.
   *
   * @get result
   * @var string
   */
  public $dtl_upload;

  /**
   * Video file.
   * This property is not used, but need for correct generate model.
   *
   * @post post
   * @var array
   */
  public $file_video;

  /**
   * The count of burned calories associated with the video.
   *
   * @get result
   * @post post
   * @var int
   */
  public $i_calorie = 0;

  /**
   * The current time as a percentage of the video duration at which the user is at in the video.
   *
   * @get result
   * @var int
   */
  public $i_current_percent;

  /**
   * The current time in seconds at which the user is at in the video.
   *
   * @get result
   * @var int
   */
  public $i_current_time;

  /**
   * The video duration in seconds.
   *
   * @get result
   * @post post
   * @var int
   */
  public $i_duration;

  /**
   * The size of the uploaded file.
   *
   * If the file will be uploaded in parts, its size will be set.
   *
   * In this case, the file will not be uploaded to this API.
   * Method {@link \WellnessLiving\Wl\Video\VideoElementModel::_fileVideoGet()} will not return the result.
   *
   * @post post
   * @var int|string
   */
  public $i_file_upload_size = '';

  /**
   * The number of video views.
   *
   * @get result
   * @var int
   */
  public $i_watch;

  /**
   * {@link \WellnessLiving\Core\Sid\YesNoSid::NO} if the video is available in all locations.
   * {@link \WellnessLiving\Core\Sid\YesNoSid::YES} if the video is available only in certain locations.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_location_select;

  /**
   * If `true`, the API is being used from backend. Otherwise, this will be `false`.
   *
   * @delete get
   * @get get
   * @post get
   * @var bool
   */
  public $is_backend = false;

  /**
   * If `true`, the calorie count will be displayed on the video.
   * If `false`, the calorie count will be hidden on the video.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_calorie;

  /**
   * If `true`, the video is converted.
   * If `false`, the video isn't converted.
   *
   * @get result
   * @post get
   * @var bool
   */
  public $is_converted;

  /**
   * If `true`, the video is published. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_published;

  /**
   * If `true`, the video level for the video is enabled.
   * If `false`, the video level for the video is disabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_video_level;

  /**
   * The business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * The video key.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string
   */
  public $k_video;

  /**
   * The video category primary key.
   *
   * @get result
   * @post post
   * @var string
   */
  public $k_video_category_primary;

  /**
   * The video level key.
   * This will be `0` if `All Levels` is selected.
   *
   * @get result
   * @post post
   * @var string
   */
  public $k_video_level;

  /**
   * The name of the command that has been executing when the exception occurred.
   *
   * @post post
   * @var string
   */
  public $s_command = '';

  /**
   * ID of the uploaded file.
   * If the file will be uploaded in parts, upload ID will be set.
   *
   * In this case, the file will not be uploaded to this API.
   * Method {@link \WellnessLiving\Wl\Video\VideoElementModel::_fileVideoGet()} will not return the result.
   *
   * @post post
   * @var string
   */
  public $s_file_upload_id = '';

  /**
   * The real name of the uploaded file.
   *
   * If the file will be uploaded in parts, its name will be set.
   *
   * In this case, the file won't be uploaded to this API and the POST method won't
   * return the result.
   *
   * @post post
   * @var string
   */
  public $s_file_upload_name = '';

  /**
   * The string representation of the video's key.
   *
   * This will be `null` if the video doesn't have a thumbnail image.
   *
   * @get result
   * @var string|null
   */
  public $s_preview_video_key;

  /**
   * The video thumbnail.
   *
   * @post post
   * @var string
   */
  public $s_thumbnail;

  /**
   * If `false`, the calorie count for videos is hidden. Otherwise, this will be `true`.
   *
   * @get result
   * @var bool
   */
  public $show_calorie;

  /**
   * If `false`, video levels are hidden. Otherwise, this will be `true`.
   *
   * @get result
   * @var bool
   */
  public $show_level;

  /**
   * If `false`, the number of views for videos is hidden. Otherwise, this will be `true`.
   *
   * @get result
   * @var bool
   */
  public $show_view;

  /**
   * The video level name.
   *
   * @get result
   * @var string
   */
  public $text_level_title;

  /**
   * The video name.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title;

  /**
   * The URL of the video thumbnail.
   *
   * @get result
   * @var string
   */
  public $url_thumbnail;

  /**
   * The URL of the video on a WellnessLiving page.
   *
   * @get result
   * @var string|null
   */
  public $url_video;

  /**
   * The direct URL of the video.
   *
   * @get result
   * @var string
   */
  public $url_video_direct;

  /**
   * The direct URL of the video for iframe.
   *
   * @get result
   * @var string
   */
  public $url_video_frame;

  /**
   * The video description.
   *
   * @get result
   * @post post
   * @var string
   */
  public $xml_description;
}

?>