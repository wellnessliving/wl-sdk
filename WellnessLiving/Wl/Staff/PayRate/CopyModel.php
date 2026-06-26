<?php

namespace WellnessLiving\Wl\Staff\PayRate;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to copy exists pay rates to the staff profile.
 *
 * @method WlModelRequest post() Copies exists staff pay rates to the staff profile.
 */
class CopyModel extends WlModelAbstract
{
  /**
   * List of pay rates to copy.
   *
   * @post post
   * @var array
   */
  public $a_staff_pay = [];

  /**
   * Key of business.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Key of staff user.
   *
   * @post post
   * @var string
   */
  public $uid_staff = '';
}

?>