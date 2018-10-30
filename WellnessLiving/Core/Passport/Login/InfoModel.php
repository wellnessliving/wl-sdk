<?php

namespace WellnessLiving\Core\Passport\Login;

use WellnessLiving\WlModelAbstract;

/**
 * Information about user that is currently signed in.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * ID of a user that is currently signed in.
   *
   * <tt>null</tt> if user is not signed in.
   *
   * @get result
   * @var string|null
   */
  public $uid=null;

  /**
   * URL to change password.
   *
   * Is <tt>null</tt> if it is not set yet.
   *
   * @get result
   * @var string|null
   */
  public $url_password_change = null;
}

?>