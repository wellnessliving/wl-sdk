<?php

namespace WellnessLiving\Core\Passport\Login;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint to sign in user in mobile application after he is authorised with TJX.
 *
 * @method WlModelRequest post() Signs in the user who corresponds to authorisation code.
 */
class PassportLoginTjxModel extends WlModelAbstract
{
  /**
   * Authorisation code.
   *
   * @post post
   * @var string
   */
  public $text_authorisation = '';
}

?>