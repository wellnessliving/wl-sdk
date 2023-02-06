<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves a list of information about the booking schedule for available appointments.
 */
class DayTimeModel extends WlModelAbstract
{
  /**
   * An array with a schedule of available appointment booking times.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @var array
   */
  public $a_time = null;

  /**
   * The date to show the available appointment booking schedule for.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * The duration of the asset booking.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $i_duration = null;

  /**
   * An index of the selected asset.
   *
   * This will be `null` if not set yet or if the asset isn't on the layout.
   *
   * @get get
   * @var int|null
   */
  public $i_index = null;

  /**
   * The ID of the staff member's gender. It is one of the {@link AGenderSid} constants.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $id_gender_staff = null;

  /**
   * `1` - return service categories that have no staff members able to conduct them.
   * `0` - return only service categories that have staff members able to conduct them.
   *
   * @get get
   * @var bool
   */
  public $is_unavailable = 0;

  /**
   * The location ID used for showing the available appointment booking schedule.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The resource key to show which days are available for booking.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * The service ID used for showing the available appointment booking schedule.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * The staff member ID used for showing the available appointment booking schedule.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_staff = null;

  /**
   * A list of service add-ons. Serialized to be usable as model key.
   *
   * @get get
   * @var string
   */
  public $s_product = '';

  /**
   * The user's key.
   *
   * This will be `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>