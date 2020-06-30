<?php

namespace WellnessLiving\Wl\Schedule\ClassView;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about class.
 */
class ClassViewModel extends WlModelAbstract
{
  /**
   * Class data. <dl>
   *   <dt>array <var>a_image</var></dt>
   *   <dd>Class image data:<dl>
   *     <dt>int <var>i_height</var></dt>
   *     <dd>Image height.</dd>
   *     <dt>int <var>i_width</var></dt>
   *     <dd>Image width.</dd>
   *     <dt>bool <var>is_empty</var></dt>
   *     <dd>Whether current image is empty.</dd>
   *     <dt>string <var>s_url</var></dt>
   *     <dd>Url link to image.</dd>
   *   </dl></dd>
   *   <dt>int[] <var>a_tag</var></dt>
   *   <dd>List of tags.</dd>
   *   <dt>bool <var>can_book</var></dt>
   *   <dd>Whether current client can book class.</dd>
   *   <dt>string <var>dt_date_global</var></dt>
   *   <dd>Session date/time in UTC.</dd>
   *   <dt>string <var>dt_date_local</var></dt>
   *   <dd>Start date in local time.</dd>
   *   <dt>string <var>html_deny_reason</var></dt>
   *   <dd>Reason why client can not book class. Not empty only if <var>can_book</var> is <tt>false</tt>.</dd>
   *   <dt>string <var>html_description</var></dt>
   *   <dd>Class description.</dd>
   *   <dt>string <var>html_special</var></dt>
   *   <dd>Special instructions.</dd>
   *   <dt>int|null <var>i_age_from</var></dt>
   *   <dd>Age from that class is allowed. <tt>null</tt> if information is not available.</dd>
   *   <dt>int|null <var>i_age_to</var></dt>
   *   <dd>Age to that class is allowed. <tt>null</tt> if information is not available.</dd>
   *   <dt>int <var>i_book</var></dt>
   *   <dd>Count of booked visits.</dd>
   *   <dt>int <var>i_capacity</var></dt>
   *   <dd>Class capacity.</dd>
   *   <dt>int <var>i_duration</var></dt>
   *   <dd>Class duration. In number of minutes.</dd>
   *   <dt>bool <var>is_book</var></dt>
   *   <dd>Whether current class was booked by current client.</dd>
   *   <dt>bool <var>is_cancel</var></dt>
   *   <dd><tt>true</tt> if class period was cancelled; <tt>false</tt> otherwise.</dd>
   *   <dt>bool <var>is_wait_list</var></dt>
   *   <dd><tt>true</tt> if user can take place in wait list only; <tt>false</tt> otherwise.</dd>
   *   <dt>string <var>m_price</var></dt>
   *   <dd>Session price.</dd>
   *   <dt>string <var>s_duration</var></dt>
   *   <dd>Class duration. In human readable format.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>Class name.</dd>
   *   <dt>string <var>text_room</var></dt>
   *   <dd>Class room.</dd>
   * </dl>
   *
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_class = null;

  /**
   * Location data.
   *
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_location = null;

  /**
   * List of sessions to get information for. Every element has next keys:
   * <dl><dt>string <var>dt_date</var></dt><dd>Date/time of the session in UTC.</dd>
   * <dt>string <var>k_class_period</var></dt><dd>Session primary key in {@link RsClassPeriodSql} table.</dd></dl>
   * <tt>null</tt> for mode of single session.
   *
   * @get get
   * @var array[]|null
   */
  public $a_session_request = null;

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
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_staff = null;

  /**
   * Date/time of the class start in GMT.
   *
   * <tt>null</tt> if date is not loaded yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Class Period ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * User ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>