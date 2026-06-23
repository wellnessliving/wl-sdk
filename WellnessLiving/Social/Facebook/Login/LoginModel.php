<?php

namespace WellnessLiving\Social\Facebook\Login;

use WellnessLiving\Core\Request\Api\Application\Credential\CredentialModel;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Authorizes Facebook users.
 *
 * @method WlModelRequest post() Authorizes user with facebook.  Accepts a Facebook access token and an optional application ID. If the user is already signed in, links the Facebook account to their existing account; otherwise, signs them in or creates a new account using the Facebook identity and the configured Facebook credentials.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * The application id.
   *
   * When application not passed, credential loaded from the application, which makes the request,
   *
   * For set credential need used {@link CredentialModel} and set {@link CredentialModel::$cid_credential} to {@link FacebookCredential::CID}.
   *
   * When application passed, the credential loaded by application id.
   *
   * @post post
   * @var string|null
   */
  public $s_application = null;

  /**
   * The Facebook token.
   *
   * @post post
   * @var string
   */
  public $s_token = '';
}

?>