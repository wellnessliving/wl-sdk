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
   * The IDs of a user's activity.
   *
   * @post result
   * @var array
   */
  public $a_login_activity = [];

  /**
   * A list of asset categories which are available for specified session. Every element has next keys:
   * <dl>
   *   <dt>array <var>a_client</var></dt>
   *   <dd>
   *     A list of clients who have already occupied assets for this session.
   *     1st level keys - asset keys; 2nd level keys - asset number.
   *     For example, if you want to check if 10th asset with key '125' is free,
   *     you have to check if <tt>a_client['125']['10']</tt> is empty.
   *   </dd>
   *   <dt>array[] <var>a_resource_list</var></dt>
   *   <dd>A list of available assets. Every element has next keys:
   *     <dl>
   *       <dt>int <var>i_index</var></dt>
   *       <dd>The asset number. Actual for assets with a quantity more than <tt>1</tt>.</dd>
   *       <dt>string <var>k_resource</var></dt>
   *       <dd>The key of the asset in database.</dd>
   *       <dt>string <var>s_resource</var></dt>
   *       <dd>The title of the asset.</dd>
   *     </dl>
   *   </dd>
   *   <dt>bool <var>has_current</var></dt>
   *   <dd><tt>true</tt> - has current resource in the list of available assets; <tt>false</tt> - otherwise.</dd>
   *   <dt>bool <var>is_client_select</var></dt>
   *   <dd><tt>true</tt> - the client selected the resource from the current group; <tt>false</tt> otherwise.</dd>
   *   <dt>bool <var>is_select</var></dt>
   *   <dd><tt>true</tt> - has selected resources; <tt>false</tt> - otherwise.</dd>
   *   <dt>bool <var>is_share</var></dt>
   *   <dd>The key resource use type</dd>
   *   <tt>true</tt> resources in this category don't belong to certain users, but to the entire session.
   *   <tt>false</tt> belong to specific users.
   *   <dt>string <var>k_resource_layout</var></dt>
   *   <dd>The key of the asset layout.</li>
   *   <dt>string <var>k_resource_type</var></dt>
   *   <dd>The key of the asset category.</dd>
   *   <dt>string <var>s_resource_type</var></dt>
   *   <dd>The title of the asset category.</dd>
   * </dl>
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var array
   */
  public $a_resource_all = null;

  /**
   * The selected assets. Every element has the next keys:
   * <ul><li>Number <tt>i_index</tt> The asset number. Actual for assets with quantity greater <tt>1</tt>.</li>
   * <li>String <tt>k_resource</tt> The ID of the asset.</li></ul>
   *
   * @post post
   * @var array
   */
  public $a_resource_select = [];

  /**
   * The selected sessions.
   * Not empty only for session mode.
   *
   * Fields - the IDs of the sessions in the database.
   * Values - the arrays of date/time when the session is occurred in MySQL format and in GMT.
   *
   * @get get
   * @post get
   * @var array
   */
  public $a_session = [];

  /**
   * The IDs of the bookings that have been made.
   *
   * @post result
   * @var array
   */
  public $a_visit = [];

  /**
   * The date/time when session occurs in MySQL format and in GMT.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $dt_date_gmt = null;

  /**
   * The WellnessLiving mode type. One of {@link WlBookModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode =  WlBookModeSid::APP_FRONTEND;

  /**
   * <tt>true</tt> if next steps of wizard are needed (for example. to purchase something to book the selected session);
   * <tt>false</tt> if no next steps are needed (all that was needed was already bought).
   *
   * @post result
   * @var bool
   */
  public $is_next = false;

  /**
   * The ID of the session which is being booked.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * The ID of the user who is making the booking.
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