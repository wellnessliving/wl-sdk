<?php

namespace WellnessLiving\Studio\Personnel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manage temporary password for login to WL projects.
 *
 * @method WlModelRequest put()
 */
class PasswordModel extends WlModelAbstract
{
  /**
   * Temporary password.
   *
   * @put post
   * @var string
   */
  public $s_password = '';
}

?>