<?php

namespace WellnessLiving\Wl\Skin\Application\Connect;

use WellnessLiving\WlModelAbstract;

/**
 * Creates or updates third-party integration credentials for a white-label application.
 *
 * Used by the App Build Automation (n8n) to programmatically submit the Client App Connect form.
 * Automatically finds the existing record for the given business
 * or creates a new one if none exists.
 */
class ApplicationConnectModel extends WlModelAbstract
{
  /**
   * `true` to enable Sign In with Apple for this application, `false` to disable.
   *
   * @post post
   * @var bool
   */
  public $is_apple = false;

  /**
   * `true` to enable Sign In with Facebook (iOS) for this application, `false` to disable.
   *
   * @post post
   * @var bool
   */
  public $is_facebook = false;

  /**
   * `true` to enable Sign In with Facebook (Android) for this application, `false` to disable.
   *
   * @post post
   * @var bool
   */
  public $is_facebook_android = false;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of the created or updated application.
   * Set in the response after a successful `post()` call.
   *
   * @post result
   * @var string
   */
  public $k_spa_application = '0';

  /**
   * Firebase service account private key (JSON content of the `.p8`-equivalent key file).
   *
   * @post post
   * @var string
   */
  public $s_firebase_key = '';

  /**
   * Firebase project ID.
   *
   * @post post
   * @var string
   */
  public $s_firebase_project = '';

  /**
   * Google OAuth client ID.
   *
   * @post post
   * @var string
   */
  public $s_google_id = '';

  /**
   * Reversed Google OAuth client ID (iOS URL scheme).
   *
   * @post post
   * @var string
   */
  public $s_google_reverse = '';

  /**
   * Google OAuth client secret.
   *
   * @post post
   * @var string
   */
  public $s_google_secret = '';

  /**
   * Sign In with Apple key (`.p8` file content).
   *
   * @post post
   * @var string
   */
  public $text_cert_ios_login = '';

  /**
   * APNs push notification auth key (`.p8` file content).
   *
   * @post post
   * @var string
   */
  public $text_cert_ios_push = '';

  /**
   * Bundle ID used as the application identifier.
   *
   * @post post
   * @var string
   */
  public $text_domain = '';

  /**
   * Sign In with Apple key ID.
   *
   * @post post
   * @var string
   */
  public $text_key_login_id = '';

  /**
   * APNs push notification key ID.
   *
   * @post post
   * @var string
   */
  public $text_key_push_id = '';

  /**
   * Application display name.
   *
   * @post post
   * @var string
   */
  public $text_name = '';

  /**
   * Apple Developer Team ID.
   *
   * @post post
   * @var string
   */
  public $text_team_id = '';

  /**
   * Google OAuth redirect URL.
   *
   * @post post
   * @var string
   */
  public $url_google_redirect = '';
}

?>