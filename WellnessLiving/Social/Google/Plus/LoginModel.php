<?php

namespace WellnessLiving\Social\Google\Plus;

use WellnessLiving\WlModelAbstract;

/**
 * Tool to sing in/up with Google.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * Google authorization code.
   *
   * @post post
   * @var string
   */
  public $s_code = '';
}

?>