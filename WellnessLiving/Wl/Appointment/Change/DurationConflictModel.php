<?php

namespace WellnessLiving\Wl\Appointment\Change;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Information of conflicts when change appointment duration.
 *
 * @method WlModelRequest get() Gets booking conflicts.
 */
class DurationConflictModel extends WlModelAbstract
{
  /**
   * @get result
   * @var array[]
   */
  public $a_conflict;

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
   * <tt>true</tt> if staff can book appointment when conflict. <tt>false</tt> in other cases.
   *
   * @get result
   * @var bool
   */
  public $can_book_anyway;

  /**
   * Appointment duration.
   * Must be specified for asset booking only.
   *
   * @get get
   * @var int
   */
  public $i_duration_new = 0;

  /**
   * @get result
   * @var int
   */
  public $id_staff_book_flow;

  /**
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * @get get
   * @var string
   */
  public $k_appointment = '0';

  /**
   * Key of the business.
   *
   * @get result
   * @var string
   */
  public $k_business;

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * @get result
   * @var string
   */
  public $k_service;

  /**
   * ID form.
   *
   * @get result
   * @var string
   */
  public $s_form_id;

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
   * Selected user staff key.
   *
   * @get result
   * @var string
   */
  public $uid_staff;
}

?>