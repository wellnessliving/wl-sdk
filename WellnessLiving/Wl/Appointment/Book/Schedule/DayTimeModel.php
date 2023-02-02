<?php

namespace WellnessLiving\Wl\Appointment\Book\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about the available appointment booking schedule.
 */
class DayTimeModel extends WlModelAbstract
{
  /**
   * An array with a schedule of available appointment booking times.
   *
   * It will be `null` if not set yet.
   *
   * @get result
   * @var array
   */
  public $a_time = null;

  /**
   * The date to show the available appointment booking schedule.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * The duration of the asset booking.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $i_duration = null;

  /**
   * An index of the selected asset.
   *
   * It is `null` if not set yet. Or if asset is not on layout.
   *
   * @get get
   * @var int|null
   */
  public $i_index = null;

  /**
   * The ID of the staff member's gender. It is one of the {@link AGenderSid} constants.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var int|null
   */
  public $id_gender_staff = null;

  /**
   * If `1` then return service categories which have no staff members able to conduct them.
   * If `0` then return only service categories which have staff members able to conduct them.
   *
   * @get get
   * @var bool
   */
  public $is_unavailable = 0;

  /**
   * The location key to show available appointment booking schedule.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * The resource key to show which days are available for booking.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_resource = null;

  /**
   * The service key to show the available appointment booking schedule.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * The staff key to show available appointment booking schedule.
   *
   * It is `null` if not set yet.
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
   * It is `null` if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>