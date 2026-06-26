<?php

namespace WellnessLiving\Wl\Classes\Period\Info;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Classes\Tab\TabSid;

/**
 * Retrieves information about class session.
 *
 * @method WlModelRequest get() Retrieves information about class session.
 */
class ClassPeriodModel extends WlModelAbstract
{
  /**
   * Information for available action with class session for current user: 
   *
   * <dl>
   *   <dt>string `text_restriction_message`</dt>
   *   <dd>Any first found restriction message. Empty string if no restriction exists.</dd>
   * 
   *   <dt>bool `is_age_restricted`</dt>
   *   <dd>Whether the class cannot be booked due to age restrictions.</dd>
   * 
   *   <dt>bool `is_class_bookable`</dt>
   *   <dd>
   *     Whether the class can be bookable online.
   *   It does not take into account neither restriction of age nor restriction of prerequisites.
   *   </dd>
   * 
   *   <dt>bool `is_class_cancel`</dt>
   *   <dd>Whether class is cancelled.</dd>
   * 
   *   <dt>bool `is_class_full`</dt>
   *   <dd>Whether there are no free spots in the class.</dd>
   * 
   *   <dt>bool `is_class_past`</dt>
   *   <dd>Whether current class session was in the past.</dd>
   * 
   *   <dt>bool `is_disable_by_restriction`</dt>
   *   <dd>
   *     Whether booking button must be disabled due to the class restrictions:
   * - Online Booking Disabled;
   * - Online Booking Allowed only for certain Client Types;
   * - Online Booking Allowed only for certain Member Groups;
   * - Age Restriction;
   * - Prerequisites Restriction.
   * It takes into account whether client is allowed to book for their relatives without switching profile.
   * But allowing family bookings does not affect the "Online Booking Disabled" restriction.
   *   </dd>
   * 
   *   <dt>bool `is_visit_book`</dt>
   *   <dd>Whether current class was booked by current client.</dd>
   * 
   *   <dt>bool `is_wait_list`</dt>
   *   <dd>Whether current user can take place in wait list only.</dd>
   * 
   *   <dt>string `url_visit_book`</dt>
   *   <dd>Direct link to start booking on Wellnessliving site.</dd>
   * 
   *   <dt>string `url_visit_cancel`</dt>
   *   <dd>Direct link to cancel booked session on Wellnessliving site.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_action = [];

  /**
   * Staff who conduct session. Every element has keys:
   *
   * <dl>
   *   <dt>bool `is_staff_change`</dt>
   *   <dd>Whether the staff member is a substitute for this session.</dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>UID of the staff member.</dd>
   * 
   *   <dt>string `text_name`</dt>
   *   <dd>Full name of the staff.</dd>
   * 
   *   <dt>string `text_position`</dt>
   *   <dd>Staff`s job title.</dd>
   * 
   *   <dt>string `url_image`</dt>
   *   <dd>Staff`s logo.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_staff = [];

  /**
   * Datetime of the session.
   *
   * @get get
   * @var string
   */
  public $dtu_session = '';

  /**
   * Description of the class.
   *
   * @get result
   * @var string
   */
  public $html_description = '';

  /**
   * Class special instructions.
   *
   * @get result
   * @var string
   */
  public $html_special = '';

  /**
   * Class capacity.
   *
   * `null` if the business set capacity to be hide.
   *
   * @get result
   * @var int|null
   */
  public $i_capacity = null;

  /**
   * Class session free spot.
   *
   * `null` if the business set capacity to be hide.
   *
   * @get result
   * @var int|null
   */
  public $i_free = null;

  /**
   * ID of book now tab.
   * One of {@link TabSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_class_tab = 0;

  /**
   * Whether this class is event or not.
   *
   * @get result
   * @var bool
   */
  public $is_event = false;

  /**
   * Whether this class is virtual or not.
   *
   * @get result
   * @var bool
   */
  public $is_virtual = false;

  /**
   * Key of a business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of a class period to show information for.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '';

  /**
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * Date of the session in user-friendly format.
   *
   * @get result
   * @var string
   */
  public $text_day = '';

  /**
   * Class session duration.
   *
   * @get result
   * @var string
   */
  public $text_duration = '';

  /**
   * Class session room number.
   *
   * @get result
   * @var string
   */
  public $text_room = '';

  /**
   * Class session time in user-friendly format.
   *
   * @get result
   * @var string
   */
  public $text_time = '';

  /**
   * Class session timezone abbreviation.
   *
   * Empty if business disable ability to change timezone in the client profile.
   *
   * @get result
   * @var string
   */
  public $text_timezone = '';

  /**
   * Class title.
   *
   * @get result
   * @var string
   */
  public $text_title = '';

  /**
   * Url link to the class image.
   *
   * @get result
   * @var string
   */
  public $url_image = '';
}

?>