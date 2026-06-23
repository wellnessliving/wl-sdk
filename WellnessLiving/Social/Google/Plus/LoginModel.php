<?php

namespace WellnessLiving\Social\Google\Plus;

use WellnessLiving\Core\Request\Api\Application\Credential\CredentialModel;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Authorizes a user with Google.
 *
 * @method WlModelRequest post() Authorizes user with Google.  Accepts a Google server authorization code and an optional application ID, loads the configured Google credential for the application, and completes the OAuth 2.0 flow to sign the user in or create a new account.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * The application id.
   *
   * When application not passed, credential loaded from the application, which makes the request,
   *
   * For set credential need used {@link CredentialModel} and set {@link CredentialModel::$cid_credential} to {@link GoogleCredential::CID}.
   *
   * When application passed, the credential loaded by application id.
   *
   * @post post
   * @var string|null
   */
  public $s_application = null;

  /**
   * The Google server authorization code.
   *
   * @post post
   * @var string
   */
  public $s_code = '';
}

?>