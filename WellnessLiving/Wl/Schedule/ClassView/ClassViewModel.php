<?php

namespace WellnessLiving\Wl\Schedule\ClassView;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that gets information about a specified class session.
 *
 * A class listing can be retrieved from the {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel} endpoint.
 */
class ClassViewModel extends WlModelAbstract
{
  /**
   * Asset list data.
   *
   * @get result
   * @post result
   * @var array[]|null
   */
  public $a_asset;

  /**
   * Detailed information about the class. When loaded, it contains the following fields:
   * <dl>
   *   <dt>array <var>a_image</var></dt>
   *   <dd>Information describing a class image.<dl>
   *     <dt>int <var>i_height</var></dt>
   *     <dd>The image height.</dd>
   *     <dt>int <var>i_width</var></dt>
   *     <dd>The image width.</dd>
   *     <dt>bool <var>is_empty</var></dt>
   *     <dd>This will be `true` if there's no image and a default is used.</dd>
   *     <dt>bool|null <var>is_own</var></dt>
   *     <dd>This field will be `true` if the image used for the class is an image uploaded in class setup. If the image is
   *     not uploaded in the class setup, but there is at least one image in Setup->Locations image slider,
   *     this field will be `false`. `null` if class image is not uploaded, and there are no images in location slider,
   *     in this case empty image is used.</dd>
   *     <dt>string <var>s_url</var></dt>
   *     <dd>The URL link to the image.</dd>
   *   </dl></dd>
   *   <dt>int[] <var>a_tag</var></dt>
   *   <dd>A list of tags that can be used to describe the class in the catalog.</dd>
   *   <dt>bool <var>can_book</var></dt>
   *   <dd>Determines whether the current client can book this class.</dd>
   *   <dt>string <var>dt_date_global</var></dt>
   *   <dd>The session date/time in UTC.</dd>
   *   <dt>string <var>dt_date_local</var></dt>
   *   <dd>The start date in the local time zone.</dd>
   *   <dt>string <var>html_deny_reason</var></dt>
   *   <dd>The reason why the client can't book this class.
   *     This will be set only if <var>can_book</var> is `false`.</dd>
   *   <dt>string <var>html_description</var></dt>
   *   <dd>The class description.</dd>
   *   <dt>string <var>html_special</var></dt>
   *   <dd>The special instructions.</dd>
   *   <dt>int|null <var>i_age_from</var></dt>
   *   <dd>The lower bound of age permitted in the class. This will be `null` there's no age limit set.</dd>
   *   <dt>int|null <var>i_age_to</var></dt>
   *   <dd>The upper bound of age permitted in the class. This will be `null` there's no age limit.</dd>
   *   <dt>int <var>i_book</var></dt>
   *   <dd>The count of booked visits.</dd>
   *   <dt>int <var>i_capacity</var></dt>
   *   <dd>The class capacity.</dd>
   *   <dt>int <var>i_duration</var></dt>
   *   <dd>The class duration in minutes.</dd>
   *   <dt>bool <var>is_book</var></dt>
   *   <dd>This will be `true` if the current class was booked by the current client.</dd>
   *   <dt>bool <var>is_cancel</var></dt>
   *   <dd>This will be `true` if the class period was canceled. Otherwise, this will be `false`.</dd>
   *   <dt>bool <var>is_promotion_only</var></dt>
   *   <dd>This will be `true` if this class can only be paid for using a Purchase Option. Otherwise, this will be `false`.</dd>
   *   <dt>bool <var>is_wait_list</var></dt>
   *   <dd>This will be `true` if user is only on the wait list. Otherwise, this will be `false`.</dd>
   *   <dt>bool <var>is_wait_list_enabled</var></dt>
   *   <dd>This will be `true` if the wait list is enabled for this class. Otherwise, this will be `false`.</dd>
   *   <dt>string <var>m_price</var></dt>
   *   <dd>The session price.</dd>
   *   <dt>string <var>s_duration</var></dt>
   *   <dd>The class duration in a human readable format.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The class name.</dd>
   *   <dt>string <var>text_room</var></dt>
   *   <dd>The class room.</dd>
   * </dl>
   *
   * This will be `null` if data isn't loaded yet.
   *
   * @get result
   * @post result
   * @var array|null
   */
  public $a_class;

  /**
   * Location data.
   *
   * This will be `null` if data isn't loaded yet.
   *
   * @get result
   * @post result
   * @var array|null
   */
  public $a_location;

  /**
   * A list of sessions to get information for. Every element has the following keys:
   * <dl>
   *   <dt>string <var>dt_date</var></dt>
   *   <dd>The date/time of the session in UTC.</dd>
   *   <dt>string <var>k_class_period</var></dt>
   *   <dd>The session key.</dd>
   * </dl>
   *
   * `null` if requesting a single session.
   *
   * @get get
   * @post get
   * @var array[]|null
   */
  public $a_session_request;

  /**
   * A list of sessions with information, received in a multiple session mode.
   * Every element has the following keys:
   * <dl>
   *   <dt>array <var>a_class</var></dt>
   *   <dd>Class information.</dd>
   *   <dt>array <var>a_location</var></dt>
   *   <dd>Location information.</dd>
   *   <dt>array <var>a_staff</var></dt>
   *   <dd>Staff member information.</dd>
   *   <dt>array <var>dt_date</var></dt>
   *   <dd>The session date/time in UTC.</dd>
   *   <dt>array <var>k_class_period</var></dt>
   *   <dd>The session key.</dd>
   * </dl>
   *
   * @get result
   * @post result
   * @var array[]
   */
  public $a_session_result;

  /**
   * Staff member list data.
   *
   * This will be `null` if data isn't loaded yet.
   *
   * @get result
   * @post result
   * @var array[]|null
   */
  public $a_staff;

  /**
   * A list of classes and events that clients should visit before this one.
   *
   * <dl>
   *   <dt>int <var>i_count</var></dt>
   *   <dd>The number of visits.</dd>
   *   <dt>bool <var>is_event</var></dt>
   *   <dd>This will be `true` if this is an event. Otherwise, this will be `false` if this is a class.</dd>
   *   <dt>string <var>k_class</var></dt>
   *   <dd>The key of the class or event.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The name of the class or event.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_visits_required = [];

  /**
   * The date/time of the session.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date = '';

  /**
   * The class period key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * A list of sessions to get information for.
   * A serialized array. See {@link \WellnessLiving\Wl\Schedule\ClassView\ClassViewModel::$a_session_request} for the array structure.
   * Serialization and sending by POST is necessary to send big lists.
   *
   * @post post
   * @var string
   */
  public $s_session_request = '';

  /**
   * The user key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>