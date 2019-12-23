<?php

namespace WellnessLiving\Wl\Login\Attendance;

use WellnessLiving\WlModelAbstract;

/**
 * Certain session information.
 * Version for validation by token.
 */
class AttendanceInfoByTokenModel extends WlModelAbstract
{
  /**
   * Service image.
   *
   * <dl>
   *   <dt>Boolean <var>is_empty</var></dt>
   *   <dd>Whether service image is empty.</dd>
   *   <dt>string <var>s_url</var></dt>
   *   <dd>Url link to image.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_logo = [];

  /**
   * Keys of assets that are bound to this session.
   *
   * @get result
   * @var string[]
   */
  public $a_resource = [];

  /**
   * List of asset layouts. Every element has next keys:
   * <dl>
   *   <dt>array <var>a_client</var></dt>
   *   <dd>List of clients who occupy assets of class.</dd>
   *   <dt>string[] <var>a_resource_available</var></dt>
   *   <dd>Keys of assets.</dd>
   *   <dt>string <var>k_resource_layout</var></dt>
   *   <dd>Key of layout.</dd>
   *   <dt>string <var>text_resource_type</var></dt>
   *   <dd>Title of asset category.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_resource_layout = [];

  /**
   * List of staff members who provide this service. Every element has next keys:
   * <dl>
   *   <dt>string <var>k_staff</var></dt>
   *   <dd>Staff's key.</dd>
   *   <dt>string <var>text_firstname</var></dt>
   *   <dd>Staff's first name.</dd>
   *   <dt>string <var>text_lastname</var></dt>
   *   <dd>Staff's last name.</dd>
   * </dl>
   *
   * Should be empty for resource reservation.
   *
   * @get result
   * @var array[]
   */
  public $a_staff = [];

  /**
   * Start date and time of the class in MySQL format in UTC timezone.
   *
   * @get result
   * @var string
   */
  public $dt_date_global = '';

  /**
   * Start date and time of the class in MySQL format in the location timezone.
   *
   * @get get
   * @var string
   */
  public $dt_date_local = '';

  /**
   * Whether notes added to the session.
   *
   * @get result
   * @var bool
   */
  public $has_note = '';

  /**
   * Type of notes.
   *
   * Empty if notes are disabled to the session.
   *
   * One of {@link \WlVisitNoteSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_note = 0;

  /**
   * Service type ID.
   *
   * One of {@link \WellnessLiving\WlServiceSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_service = 0;

  /**
   * Appointment session key.
   *
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * Class key.
   *
   * Not empty for class session only.
   *
   * @get result
   * @var string
   */
  public $k_class = '0';

  /**
   * Class session key.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * Location key.
   *
   * @get result
   * @var string
   */
  public $k_location = '0';

  /**
   * Resource key.
   *
   * Not empty for asset book only.
   *
   * @get result
   * @var string
   */
  public $k_resource = '0';

  /**
   * Appointment key.
   *
   * Not empty for the case of an appointment only.
   *
   * @get result
   * @var string
   */
  public $k_service = '0';

  /**
   * Location name.
   *
   * @get result
   * @var string
   */
  public $text_location = '';

  /**
   * End time of the session in format '10:30AM'.
   *
   * @get result
   * @var string
   */
  public $text_time_end = '';

  /**
   * Start time of the session in format '10:30AM'.
   *
   * @get result
   * @var string
   */
  public $text_time_start = '';

  /**
   * Title of the service.
   *
   * @get result
   * @var string
   */
  public $text_title = '';

  /**
   * Security token.
   *
   * @get get
   * @var string
   */
  public $text_token = '0';
}

?>