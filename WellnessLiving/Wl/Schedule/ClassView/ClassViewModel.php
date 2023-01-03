<?php

namespace WellnessLiving\Wl\Schedule\ClassView;

use WellnessLiving\WlModelAbstract;

/**
 * Gets further information about a specified class session.
 *
 * A class listing can be retrieved from the {@link \WellnessLiving\Wl\Schedule\ClassList\ClassListModel} endpoint.
 */
class ClassViewModel extends WlModelAbstract
{
  /**
   * Detailed information about the class. When loaded it contains the following fields:
   * <dl>
   *   <dt>array <var>a_image</var></dt>
   *   <dd>Information describing a class’s image.<dl>
   *     <dt>int <var>i_height</var></dt>
   *     <dd>The image height.</dd>
   *     <dt>int <var>i_width</var></dt>
   *     <dd>The image width.</dd>
   *     <dt>bool <var>is_empty</var></dt>
   *     <dd>This will be `true` if there is no image and a default is used.</dd>
   *     <dt>string <var>s_url</var></dt>
   *     <dd>The url link to the image.</dd>
   *   </dl></dd>
   *   <dt>int[] <var>a_tag</var></dt>
   *   <dd>A List of tags that can be used to describe the class in the catalog.</dd>
   *   <dt>bool <var>can_book</var></dt>
   *   <dd>Whether the current client can book this class.</dd>
   *   <dt>string <var>dt_date_global</var></dt>
   *   <dd>The session date/time in UTC.</dd>
   *   <dt>string <var>dt_date_local</var></dt>
   *   <dd>The start date in the local timezone.</dd>
   *   <dt>string <var>html_deny_reason</var></dt>
   *   <dd>The reason why the client can not book this class.
   *     This will be set only if <var>can_book</var> is <tt>false</tt>.</dd>
   *   <dt>string <var>html_description</var></dt>
   *   <dd>The class description.</dd>
   *   <dt>string <var>html_special</var></dt>
   *   <dd>The special instructions.</dd>
   *   <dt>int|null <var>i_age_from</var></dt>
   *   <dd>The lower bound of age that is allowed in the class. If will be `null` there is no age limit.</dd>
   *   <dt>int|null <var>i_age_to</var></dt>
   *   <dd>The upper bound of age that is allowed in the class. If will be `null` there is no age limit.</dd>
   *   <dt>int <var>i_book</var></dt>
   *   <dd>The count of booked visits.</dd>
   *   <dt>int <var>i_capacity</var></dt>
   *   <dd>The class capacity.</dd>
   *   <dt>int <var>i_duration</var></dt>
   *   <dd>The class duration in minutes.</dd>
   *   <dt>bool <var>is_book</var></dt>
   *   <dd>This will be `true` if the current class was booked by the current client.</dd>
   *   <dt>bool <var>is_cancel</var></dt>
   *   <dd>This will be `true` if the class period was cancelled; `false` otherwise.</dd>
   *   <dt>bool <var>is_promotion_only</var></dt>
   *   <dd>This will be `true` if this class can be paid for with promotion only; `false` otherwise.</dd>
   *   <dt>bool <var>is_wait_list</var></dt>
   *   <dd>This will be `true` if user is only on the wait list; `false` otherwise.</dd>
   *   <dt>bool <var>is_wait_list_enabled</var></dt>
   *   <dd>This will be `true` if the wait list is enabled for this class; `false` otherwise.</dd>
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
   * It is `null` if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_class = null;

  /**
   * Location data.
   *
   * It is `null` if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_location = null;

  /**
   * List of sessions to get information for. Every element has next keys:
   * <dl><dt>string <var>dt_date</var></dt><dd>Date/time of the session in UTC.</dd>
   * <dt>string <var>k_class_period</var></dt><dd>Session primary key in {@link RsClassPeriodSql} table.</dd></dl>
   * `null` for mode of single session.
   *
   * @get get
   * @var array[]|null
   */
  public $a_session_request = null;

  /**
   * List of sessions information received in a multiple session mode.
   * Every element has next keys:
   * <dl><dt>array <var>a_class</var></dt><dd>Class information.</dd>
   * <dt>array <var>a_location</var></dt><dd>Location information.</dd>
   * <dt>array <var>a_staff</var></dt><dd>Staff member information.</dd>
   * <dt>array <var>dt_date</var></dt><dd>Session date/time in UTC.</dd>
   * <dt>array <var>k_class_period</var></dt><dd>Session key.</dd></dl>
   *
   * @get result
   * @post result
   * @var array[]|null
   */
  public $a_session_result = null;

  /**
   * Staff list data.
   *
   * It is `null` if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_staff = null;

  /**
   * List of classes and events, which client should visit before this one.
   *
   * <dl>
   *   <dt>int <var>i_count</var></dt>
   *   <dd>Number of visits.</dd>
   *   <dt>bool <var>is_event</var></dt>
   *   <dd>`true` if this is an event, `false` if this is a class.</dd>
   *   <dt>string <var>k_class</var></dt>
   *   <dd>Key of the class or event.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Name of the class or event.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_visits_required = [];

  /**
   * The datetime of the session.
   * This endpoint does not test that this value corresponds to an actual class. Any datetime will return a result.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * The class period key.
   *
   * @get get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * List of sessions to get information for.
   * Serialized array; for structure see {@link ClassViewModel::$a_session_request}.
   * Serialization and sending by POST is necessary to sent big lists.
   *
   * @post post
   * @var string|null
   */
  public $s_session_request = null;

  /**
   * The user key.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>