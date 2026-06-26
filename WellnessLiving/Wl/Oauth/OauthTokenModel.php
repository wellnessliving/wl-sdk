<?php

namespace WellnessLiving\Wl\Oauth;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint used by third party service to retrieve access token.
 *
 * @method WlModelRequest get() Generated new token base on refresh token.
 * @method WlModelRequest post() Generates new token or returns already generated and not expired token.
 */
class OauthTokenModel extends WlModelAbstract
{
  /**
   * Application client id.
   *
   * @field client_id
   * @post post
   * @var string
   */
  public $s_client_id = '';

  /**
   * Application client secret.
   *
   * @field client_secret
   * @post post
   * @var string
   */
  public $s_client_secret = '';

  /**
   * Randomly generated code required for query verification.
   *
   * @field code
   * @post post
   * @var string
   */
  public $s_code = '';

  /**
   * Generated live token.
   *
   * @field access_token
   * @get result
   * @post result
   * @var string
   */
  public $s_token_access = '';

  /**
   * Generated refresh token.
   *
   * @field refresh_token
   * @get get,result
   * @post result
   * @var string
   */
  public $s_token_refresh = '';

  /**
   * Url link to redirect user to after token successfully generated.
   *
   * @field redirect_uri
   * @post post
   * @var string
   */
  public $url_redirect = '';
}

?>