<?php

namespace WellnessLiving\Studio\Personnel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get login and one time password for login to WL projects.
 *
 * @method WlModelRequest get()
 */
class LoginCheckModel extends WlModelAbstract
{
  /**
   * User login.
   * `null` - user not logged in.
   *
   * @get result
   * @var string|null
   */
  public $s_login = null;

  /**
   * One time password.
   *
   * @get result
   * @var string
   */
  public $s_password = '';
}

?>