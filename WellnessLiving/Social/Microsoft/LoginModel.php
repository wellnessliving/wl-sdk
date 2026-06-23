<?php

namespace WellnessLiving\Social\Microsoft;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Performs preliminary authorization actions with Microsoft.
 *
 * @method WlModelRequest delete() Removes the association between a website client and a Microsoft account.  Accepts the user's UID, verifies that the caller is the account owner, and unlinks the Microsoft account from the user's profile.
 * @method WlModelRequest get() Collects data for the Microsoft login button.  Called when rendering the "Sign in with Microsoft" button. Generates the OAuth 2.0 authorization URL the button must link to. When a UID is provided, also reports whether that user already has a Microsoft account linked, so the frontend can show "Link" or "Unlink" instead of the default sign-in label.
 * @method WlModelRequest post() Signs a user in with Microsoft.  Accepts the Microsoft authorization code, an optional state parameter for CSRF verification, and an optional redirect URI. Validates the state, exchanges the code for user identity, and signs the user in or creates a new account.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * If `true`, the user has a bound Microsoft account. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_exists = false;

  /**
   * If authorization is performed in a third-party application, set this flag in case of authorization errors.
   *
   * @post get
   * @var bool
   */
  public $is_external = false;

  /**
   * The authorization code that the app requested.
   *
   * @post post
   * @var string
   */
  public $s_code = '';

  /**
   * If a state parameter is included in the request, the same value should appear in the response.
   * The app should verify that the state values in the request and response are identical.
   *
   * @post post
   * @var string
   */
  public $s_state = '';

  /**
   * The client for whom the Microsoft account will be unlinked.
   *
   * @delete get
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * The Microsoft OAuth 2.0 authorization link.
   *
   * @get result
   * @var string
   */
  public $url_login = '';

  /**
   * The Redirect URI for external applications.
   * The link to the page on which Microsoft will return the result after authorization.
   *
   * * All possible links must be registered in the Microsoft application used for authorization.
   * * WARNING: Do not use this link for a direct redirect. This will present a vulnerability.
   *
   * * A {@link LoginModel::$url_login} link will be generated along with this redirect URI.
   * * When checking the received {@link LoginModel::$s_code} from Microsoft.
   *
   * @get get
   * @post get
   * @var string
   */
  public $url_redirect = '';
}

?>