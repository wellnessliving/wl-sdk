<?php

namespace WellnessLiving\Wl\Staff\Load;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Point to clock in/out by a staff member.
 *
 * @deprecated Use {@link Load74Model} instead. This class will be removed in future versions.
 *
 * @method WlModelRequest get() Checks if staff member is clocked in.
 * @method WlModelRequest put() Clocks staff member in (if he is clocked out) or out (if he is clocked in).
 */
class LoadModel extends WlModelAbstract
{
  /**
   * Staff pay rates info.
   *
   * @get result
   * @var array
   */
  public $a_pay_rate = [];

  /**
   * Staff work information.
   *
   * @get result
   * @put result
   * @var array
   */
  public $a_work = [];

  /**
   * <tt>true</tt> if staff member has been clocked in; <tt>false</tt> if clocked out.
   *
   * @put result
   * @var bool
   */
  public $is_start;

  /**
   * Whether staff member can manage staff clock in/out for other staff members.
   *
   * @get result
   * @var bool
   */
  public $is_time_manage = false;

  /**
   * Business in which information about the staff load will be requested.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business = '0';

  /**
   * Location primary key.
   *
   * @put post
   * @var string|null
   */
  public $k_location = null;

  /**
   * Staff member primary key.
   *
   * @get get
   * @put get
   * @var string
   * @deprecated Use {@link LoadModel::$uid_staff} instead.
   */
  public $k_staff = '0';

  /**
   * Pay rate identifier.
   *
   * @put post
   * @var string
   */
  public $k_staff_pay = '0';

  /**
   * Message, when the work has been started.
   *
   * @get result
   * @var string
   */
  public $text_work_start = '';

  /**
   * @get get
   * @put get
   * @var string
   */
  public $uid_staff = '';
}

?>