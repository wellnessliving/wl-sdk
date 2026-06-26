<?php

namespace WellnessLiving\Studio\Personnel\DebugToken;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manage temporary token for login to application.
 *
 * @method WlModelRequest put()
 */
class DebugTokenModel extends WlModelAbstract
{
  /**
   * Name application that is being created token.
   *
   * @put post
   * @var string
   */
  public $s_application = '';

  /**
   * Contain debug token for login to application.
   *
   * @put post,result
   * @var string
   */
  public $s_token = '';
}

?>