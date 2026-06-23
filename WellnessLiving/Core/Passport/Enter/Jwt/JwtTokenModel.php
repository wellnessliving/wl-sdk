<?php

namespace WellnessLiving\Core\Passport\Enter\Jwt;

use WellnessLiving\WlModelAbstract;

/**
 * Endpoint to get JWT token.
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