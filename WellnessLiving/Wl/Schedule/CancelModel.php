<?php

namespace WellnessLiving\Wl\Schedule;

use WellnessLiving\WlModelAbstract;

/**
 * Cancels either an appointment, class, or event session for the client.
 */
class CancelModel extends WlModelAbstract
{
  /**
   * The date of the session in UTC.
   *
   * It is `null` if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $dt_date = null;

  /**
   * <tt>true</tt> if API is being used from backend, <tt>false</tt> otherwise.
   * Here backend is staff or admin side of business.
   *
   * @post get
   * @var bool
   */
  public $is_backend = false;

  /**
   * The appointment key. It will be `null` if not set yet or if a class or event is canceled.
   *
   * It is `null` if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * The class period key. It will be `null` if not set yet or if an appointment is canceled.
   *
   * It is `null` if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * The user key.
   *
   * It is `null` if not set yet.
   *
   * @post get
   * @var string|null
   */
  public $uid = null;
}

?>