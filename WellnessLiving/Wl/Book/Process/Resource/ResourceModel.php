<?php

namespace WellnessLiving\Wl\Book\Process\Resource;

use WellnessLiving\Wl\Book\WlBookModeSid;
use WellnessLiving\WlModelAbstract;

/**
 * Select assets for making a booking.
 */
class ResourceModel extends WlModelAbstract
{
  /**
   * IDs of user's activity.
   *
   * @post result
   * @var array
   */
  public $a_login_activity = [];

  /**
   * List of asset categories which are available for specified session. Every element has next keys:
   * <dl>
   *   <dt>array <var>a_client</var></dt>
   *   <dd>
   *     List of client who have already occupied assets for this session.
   *     1st level keys - asset keys; 2nd level keys - numbers of asset.
   *     For example, if you want to check if 10th asset with key '125' if free,
   *     you have to check if <tt>a_client['125']['10']</tt> is empty.
   *   </dd>
   *   <dt>array[] <var>a_resource_list</var></dt>
   *   <dd>List of available assets. Every element has next keys:
   *     <dl>
   *       <dt>int <var>i_index</var></dt>
   *       <dd>Number of asset. Actual for assets with quantity more than <tt>1</tt>.</dd>
   *       <dt>string <var>k_resource</var></dt>
   *       <dd>Key of asset in database.</dd>
   *       <dt>string <var>s_resource</var></dt>
   *       <dd>Title of asset.</dd>
   *     </dl>
   *   </dd>
   *   <dt>string <var>k_resource_layout</var></dt>
   *   <dd>Key of asset layout.</li>
   *   <dt>string <var>k_resource_type</var></dt>
   *   <dd>Key of asset category.</dd>
   *   <dt>string <var>s_resource_type</var></dt>
   *   <dd>Title of asset category.</dd>
   * </dl>
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array
   */
  public $a_resource_all = null;

  /**
   * Selected assets. Every element has next keys:
   * <ul><li>Number <tt>i_index</tt> Number of asset. Actual for assets with quantity greater <tt>1</tt>.</li>
   * <li>String <tt>k_resource</tt> ID of asset.</li></ul>
   *
   * @post post
   * @var array
   */
  public $a_resource_select = [];

  /**
   * Selected sessions.
   * Not empty only for session mode.
   *
   * Fields - IDs of sessions in database.
   * Values - arrays of date/time when session is occurred. In MySQL format. In GMT.
   *
   * @get get
   * @post get
   * @var array
   */
  public $a_session = [];

  /**
   * IDs of books are made.
   *
   * @post result
   * @var array
   */
  public $a_visit = [];

  /**
   * Date/time when session occurs.
   * In MySQL format. In GMT.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * WellnessLiving mode type. One of {@link WlBookModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode =  WlBookModeSid::APP_FRONTEND;

  /**
   * <tt>true</tt> if need next steps of wizard (need to purchase something to book selected session);
   * <tt>false</tt> if no need next steps (all that need was already bought).
   *
   * @post result
   * @var bool
   */
  public $is_next = false;

  /**
   * ID of session which is being booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * ID of a user who is making the book.
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