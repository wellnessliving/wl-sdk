<?php

namespace WellnessLiving\Wl\Profile\Attendance;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of visits that overlap with the specified service/class/resource/time data.
 */
class AttendanceOverlapModel extends WlModelAbstract
{
  /**
   * List of visits that overlap with the specified data.
   *
   * @get result
   * @var array[]
   */
  public $a_visit_list;

  /**
   * Date of a selected service.
   *
   * @get get
   * @var string|null
   */
  public $dtu_date = null;

  /**
   * Duration of a service.
   *
   * @get get
   * @var int
   */
  public $i_duration = 0;

  /**
   * Whether an asset is booking. Needed in case when a client is allowed to select a date and time, then
   *   the available asset.
   *
   * @get get
   * @var bool
   */
  public $is_appointment = false;

  /**
   * Primary key of the business to add the user into.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Class period key.
   *
   * @get get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * Location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * Asset key.
   *
   * @get get
   * @var string
   */
  public $k_resource = '0';

  /**
   * Service key.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';

  /**
   * Key of timezone.
   *
   * `null` if not set then use default timezone client.
   *
   * @get get
   * @var string
   */
  public $k_timezone = '0';

  /**
   * UID of a user.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>