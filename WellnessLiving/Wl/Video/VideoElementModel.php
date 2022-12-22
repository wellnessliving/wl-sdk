<?php 

namespace WellnessLiving\Wl\Video;

use WellnessLiving\WlModelAbstract;

/**
 * Api to return list of video categories.
 *
 * Results of the methods can be viewed in the model.
 */
class VideoElementModel extends WlModelAbstract
{
  /**
   * Keys of the locations, where this video is available.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_location;

  /**
   * Keys of the staff members, who are on the video.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_staff;

  /**
   * List of staff members to show videos with. Every item has next structure:<dl>
   *   <dt>string <var>k_staff</var></dt>
   *   <dd>Key of the staff. Primary key in {@link \RsStaffSql} table.</dd>
   *   <dt>string <var>text_name</var></dt>
   *   <dd>Full staff name.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_staff_info;

  /**
   * Keys of the video category, where these video can be found.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_video_category;

  /**
   * Keys of the video tag.
   *
   * @get result
   * @post post
   * @var string[]
   */
  public $a_video_tag;

  /**
   * Date and time when video published
   *
   * <tt>null</tt> if published date is not set.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $dtl_publish;

  /**
   * Date and time when video unpublished
   *
   * <tt>null</tt> if unpublished date is not set.
   *
   * @get result
   * @post post
   * @var string|null
   */
  public $dtl_unpublish;

  /**
   * Date when video upload.
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
   * Count of burned calories.
   *
   * @get result
   * @post post
   * @var int
   */
  public $i_calorie = 0;

  /**
   * Current time as a percentage of the video duration at which the user is at in the video.
   *
   * @get result
   * @var int
   */
  public $i_current_percent;

  /**
   * Current time in seconds at which the user is at in the video.
   *
   * @get result
   * @var int
   */
  public $i_current_time;

  /**
   * Duration of video.
   *
   * @get result
   * @post post
   * @var int
   */
  public $i_duration;

  /**
   * Size of the uploaded file.
   *
   * If the file will be uploaded in parts, size will be set.
   *
   * In this case, the file will not be uploaded to this API.
   * Method {@link VideoElementApi::_fileVideoGet()} will not return the result.
   *
   * @post post
   * @var int|string
   */
  public $i_file_upload_size = '';

  /**
   * Number of video views.
   *
   * @get result
   * @var int
   */
  public $i_watch;

  /**
   * {@link YesNoSid::NO} if video is available in all locations.
   * {@link YesNoSid::YES} if video is available only in certain locations.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_location_select;

  /**
   * <tt>true</tt> if API is being used from backend, <tt>false</tt> otherwise.
   *
   * @delete get
   * @get get
   * @post get
   * @var bool
   */
  public $is_backend = false;

  /**
   * <tt>true</tt> if display calories on video.
   * <tt>false</tt> if hide calories on video.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_calorie;

  /**
   * `true` if video is converted.
   * `false` if video is not converted.
   *
   * @get result
   * @post get
   * @var bool
   */
  public $is_converted;

  /**
   * <tt>true</tt> if video is published, <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_published;

  /**
   * <tt>true</tt> if enable video level for video.
   * <tt>false</tt> if disable video level for video.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_video_level;

  /**
   * Business key from {@link \RsBusinessSql}.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Video key from {@link VideoSql}.
   *
   * @delete get
   * @get get
   * @post get,result
   * @var string
   */
  public $k_video;

  /**
   * Video category primary key.
   *
   * @get result
   * @post post
   * @var string
   */
  public $k_video_category_primary;

  /**
   * Video level key.
   * <tt>0</tt> if select <tt>All Levels</tt>
   *
   * @get result
   * @post post
   * @var string
   */
  public $k_video_level;

  /**
   * Name of the command that had been executing when exception occurred.
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
   * Method {@link VideoElementApi::_fileVideoGet()} will not return the result.
   *
   * @post post
   * @var string
   */
  public $s_file_upload_id = '';

  /**
   * The real name of the uploaded file.
   *
   * If the file will be uploaded in parts, the name will be set.
   *
   * In this case, the file will not be uploaded to this API.
   * Method {@link VideoElementApi::_fileVideoGet()} will not return the result.
   *
   * @post post
   * @var string
   */
  public $s_file_upload_name = '';

  /**
   * String representation of video's key.
   *
   * <tt>null</tt> if video does not have thumbnail image.
   *
   * @get result
   * @var string|null
   */
  public $s_preview_video_key;

  /**
   * Thumbnail of video.
   *
   * @post post
   * @var string
   */
  public $s_thumbnail;

  /**
   * <tt>false</tt> if number of calorie on videos is hidden, <tt>true</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $show_calorie;

  /**
   * <tt>false</tt> if levels of videos is hidden, <tt>true</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $show_level;

  /**
   * <tt>false</tt> if number of views on videos is hidden, <tt>true</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $show_view;

  /**
   * Name of video level.
   *
   * @get result
   * @var string
   */
  public $text_level_title;

  /**
   * Name of the video.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title;

  /**
   * Url of the thumbnail for video.
   *
   * @get result
   * @var string
   */
  public $url_thumbnail;

  /**
   * Url of the video.
   *
   * @get result
   * @var string|null
   */
  public $url_video;

  /**
   * Direct url of the video.
   *
   * @get result
   * @var string
   */
  public $url_video_direct;

  /**
   * Description of the video.
   *
   * @get result
   * @post post
   * @var string
   */
  public $xml_description;
}

?>