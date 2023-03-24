<?php

namespace WellnessLiving\Wl\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that cancels either an appointment, class, or event session for the client.
 */
class CancelModel extends WlModelAbstract
{
  /**
   * The date of the session in UTC.
   *
   * This will be `null` if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * This will be `true` if the API is being used from the back end. Otherwise, this will be `false`.
   * Here, the back end refers to either a staff member or admin from the side of the business.
   *
   * @post get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The appointment key. This will be `null` if not set yet or if a class or event is canceled.
   *
   * This will be `null` if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * The class period key. This will be `null` if not set yet or if an appointment is canceled.
   *
   * This will be `null` if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * The user key.
   *
   * This will be `null` if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>