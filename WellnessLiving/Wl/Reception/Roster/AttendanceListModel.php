<?php

namespace WellnessLiving\Wl\Reception\Roster;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Visit\WlVisitSid;

/**
 * Clients attendance list for attendance web app.
 *
 * @method WlModelRequest get() Returns client list for specified class.  Data expected in GET array: <dl>   <dt>string <var>dtl_date</var></dt>   <dd>Date and time when class provides in GMT.</dd>   <dt>bool [<var>is_classpass_only</var>]</dt>   <dd>Whether need to show only clients that booked with Class Pass Prospect.   If not passed then all clients returns.</dd>   <dt>string <var>k_class_period</var></dt>   <dd>Class period from which need to get list of clients.</dd> </dl>
 */
class AttendanceListModel extends WlModelAbstract
{
  /**
   * List of clients that registered on class each element contains information:
   *
   * `null` if not defined yet.
   *
   * <dl>
   *   <dt>array `a_asset`</dt>
   *   <dd>
   *     A list of the assets.
   *     <dl>
   *       <dt>string `k_resource`</dt>
   *       <dd>Resource key.</dd>
   * 
   *       <dt>string `text_name`</dt>
   *       <dd>
   *         Asset title that consists of the asset title itself concatenated with its index (in case of multiple assets) by '#'.
   *       </dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Title of the asset.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `sid_gender`</dt>
   *   <dd>Gender SID.</dd>
   * 
   *   <dt>string `text_first_name`</dt>
   *   <dd>Client's first name.</dd>
   * 
   *   <dt>string `text_last_name`</dt>
   *   <dd>Client's last name.</dd>
   * 
   *   <dt>string `text_mail`</dt>
   *   <dd>Mail of client.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Full name. Combination of the first and last names.</dd>
   * 
   *   <dt>string `text_pass_prospect`</dt>
   *   <dd>Whether client used Pass Promote to visit class.</dd>
   * 
   *   <dt>string `text_phone`</dt>
   *   <dd>Phone number of client.</dd>
   * 
   *   <dt>string `text_visit`</dt>
   *   <dd>State of visit. String representation of constants {@link WlVisitSid}.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User identifier.</dd>
   * </dl>
   * @get result
   * @var array[]|null
   */
  public $a_client = null;

  /**
   * Date and time of the currently viewed attendance list.
   *
   * `null` if not defined yet.
   *
   * @get get
   * @var string|null
   */
  public $dtl_date = null;

  /**
   * Whether only clients from `Classpass` should be returned.
   *
   * `null` if not defined yet.
   *
   * @get get
   * @var bool
   */
  public $is_classpass_only = false;

  /**
   * Class period key of the attendance list.
   *
   * `null` if not defined yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * Secret key for access to attendance list.
   *
   * @get get
   * @var string
   */
  public $s_secret = '';
}

?>