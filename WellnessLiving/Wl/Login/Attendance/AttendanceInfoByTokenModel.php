<?php

namespace WellnessLiving\Wl\Login\Attendance;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that displays information for certain sessions.
 * Version for validation by token.
 */
class AttendanceInfoByTokenModel extends WlModelAbstract
{
  /**
   * The service image.
   *
   * <dl>
   *   <dt>Boolean <var>is_empty</var></dt>
   *   <dd>Determines whether the service image is empty.</dd>
   *   <dt>string <var>s_url</var></dt>
   *   <dd>The URL link to the image.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_logo = [];

  /**
   * The keys of the assets associated to this session.
   *
   * @get result
   * @var string[]
   */
  public $a_resource = [];

  /**
   * A list of asset layouts. Every element has the next keys:
   * <dl>
   *   <dt>array <var>a_client</var></dt>
   *   <dd>
   *     A list of clients who occupy assets of the class.
   *     Each element is a nested array. The outer key is the asset key. The value is the nested array.
   *     The key of the nested array is the asset index and the value is the user's name.
   *   </dd>
   *   <dt>string[] <var>a_resource_available</var></dt>
   *   <dd>The keys of the assets.</dd>
   *   <dt>string <var>k_resource_layout</var></dt>
   *   <dd>The key of the layout.</dd>
   *   <dt>string <var>text_resource_type</var></dt>
   *   <dd>The title of the asset category.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_resource_layout = [];

  /**
   * A list of staff members who provide this service. Every element has the next keys:
   * <dl>
   *   <dt>string <var>k_staff</var></dt>
   *   <dd>The staff member's key.</dd>
   *   <dt>string <var>text_firstname</var></dt>
   *   <dd>The staff member's first name.</dd>
   *   <dt>string <var>text_lastname</var></dt>
   *   <dd>The staff member's last name.</dd>
   * </dl>
   *
   * This should be empty for asset reservations.
   *
   * @get result
   * @var array[]
   */
  public $a_staff = [];

  /**
   * The start date and time of the class in MySQL format in UTC time.
   *
   * @get result
   * @var string
   */
  public $dt_date_global = '';

  /**
   * The start date and time of the class in MySQL format in the location's time zone.
   *
   * @get get
   * @var string
   */
  public $dt_date_local = '';

  /**
   * Determines whether notes have been added to the session.
   *
   * @get result
   * @var bool
   */
  public $has_note = '';

  /**
   * The type of notes.
   *
   * This will be empty if notes are disabled for the session.
   *
   * One of {@link \WlVisitNoteSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_note = 0;

  /**
   * The service type ID.
   *
   * One of {@link \WellnessLiving\WlServiceSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_service = 0;

  /**
   * The appointment session key.
   *
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * The class key.
   *
   * Not empty for class session only.
   *
   * @get result
   * @var string
   */
  public $k_class = '0';

  /**
   * The class session key.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The location key.
   *
   * @get result
   * @var string
   */
  public $k_location = '0';

  /**
   * The resource key.
   *
   * Not empty for asset book only.
   *
   * @get result
   * @var string
   */
  public $k_resource = '0';

  /**
   * The appointment key.
   *
   * Not empty for the case of an appointment only.
   *
   * @get result
   * @var string
   */
  public $k_service = '0';

  /**
   * The location name.
   *
   * @get result
   * @var string
   */
  public $text_location = '';

  /**
   * The end time of the session in the format of '10:30AM'.
   *
   * @get result
   * @var string
   */
  public $text_time_end = '';

  /**
   * The start time of the session in the format of '10:30AM'.
   *
   * @get result
   * @var string
   */
  public $text_time_start = '';

  /**
   * The title of the service.
   *
   * @get result
   * @var string
   */
  public $text_title = '';

  /**
   * The security token.
   *
   * @get get
   * @var string
   */
  public $text_token = '0';
}

?>