<?php

namespace WellnessLiving\Core\Passport\Enter\Jwt;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint to get JWT token.
 *
 * @method WlModelRequest get() Returns a jwt token that can be used to log user.  Requires the user to be signed in. Generates a signed JWT token tied to the current authorization header and user ID that can be passed to other services to authenticate the user without sharing session cookies.
 */
class JwtTokenModel extends WlModelAbstract
{
  /**
   * Jwt token that allows to authenticate user.
   *
   * @get result
   * @var string
   */
  public $s_token = '';
}

?>