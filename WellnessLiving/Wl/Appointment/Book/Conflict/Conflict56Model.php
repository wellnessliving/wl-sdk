<?php

namespace WellnessLiving\Wl\Appointment\Book\Conflict;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Appointment\Book\Finish\FinishModel;

/**
 * Appointment booking conflicts data for multiple users.
 *
 * @method WlModelRequest get() Gets booking conflicts.
 */
class Conflict56Model extends WlModelAbstract
{
  /**
   * @get result
   * @var array[]
   */
  public $a_conflict = [];

  /**
   * List of add-ons.
   *
   * @get get
   * @var string[]
   */
  public $a_product = [];

  /**
   * Data of appointment repeat.
   * See key <tt>a_repeat</tt> of {@link FinishModel::$a_book_data} for details.
   *
   * <tt>null</tt> if repeat is not required.
   *
   * @get get
   * @var null|array
   */
  public $a_repeat = null;

  /**
   * List of assets. Every element has next keys:
   *
   * May be specified for service booking only.
   *
   * <dl>
   *   <dt>int `i_index`</dt>
   *   <dd>Asset index in layout.</dd>
   * 
   *   <dt>string `k_resource`</dt>
   *
   * </dl>
   * @get get
   * @var array[]
   */
  public $a_resource = [];

  /**
   * List of user keys to book appointments.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Date/time of appointment. In location timezone.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * Appointment duration.
   * Must be specified for asset booking only.
   *
   * @get get
   * @var int
   */
  public $i_duration = 0;

  /**
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * Empty for a new appointment.
   *
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Empty for service booking.
   *
   * @get get
   * @var string
   */
  public $k_resource = '0';

  /**
   * Empty for asset booking.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';

  /**
   * @get get
   * @var string
   * @deprecated Use {@link Conflict56Model::$uid_staff}.
   */
  public $k_staff = '0';

  /**
   * The user key.
   *
   * This field is used if the client books for himself or for the relative.
   *
   * This field is incorrect to use for guest booking since in this case the client will be checked as a relative.
   *
   * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';

  /**
   * @get get
   * @var string
   */
  public $uid_staff = '0';
}

?>