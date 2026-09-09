<?php

namespace WellnessLiving\Wl\Skin\Application\Resource;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Skin\Application\Upgrade\AppUpdateTypeEnum;

/**
 * Saves text metadata for a white-label application build.
 *
 * Used by the App Build Automation (n8n) to programmatically submit the Client App Materials form
 * (text fields only). File assets are submitted separately via {@link ApplicationResourceUploadModel}.
 *
 * @method WlModelRequest post() Saves text metadata for the given business application.  Persists all text fields of the Client App Materials form (store listing copy, contact details, privacy policy URL, etc.) for the specified business. File assets such as icons and screenshots are submitted separately via {@link \Wl\Skin\Application\Resource\ApplicationResourceUploadApi}. Requires the App Build Automation edit privilege.
 */
class ApplicationResourceMaterialModel extends WlModelAbstract
{
  /**
   * Code version.
   *
   * @post post
   * @var int
   */
  public $i_version = 1;

  /**
   * Application category in the store.
   *
   * `0` if no category is selected.
   *
   * @post post
   * @var int
   */
  public $id_category = 0;

  /**
   * Type of application update.
   * One of {@link AppUpdateTypeEnum} constants.
   *
   * @post post
   * @var int
   */
  public $id_version_change = 1;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * Reversed client ID of the iOS application on Firebase.
   *
   * @post post
   * @var string
   */
  public $s_firebase_ios = '';

  /**
   * Android splash screen background color in hex format.
   *
   * @post post
   * @var string
   */
  public $s_splash_color_android = '';

  /**
   * Version name for the App Store and Google Play builds.
   *
   * @post post
   * @var string
   */
  public $s_version_name = '2.0.1';

  /**
   * Short application description in the store (up to 80 characters).
   *
   * @post post
   * @var string
   */
  public $text_annotation = '';

  /**
   * Available countries for application distribution (comma-separated list).
   *
   * @post post
   * @var string
   */
  public $text_country = '';

  /**
   * Full application description in the store.
   *
   * @post post
   * @var string
   */
  public $text_description = '';

  /**
   * Full application description specific to Google Play.
   * If empty, `text_description` is used for Google Play as well.
   *
   * @post post
   * @var string
   */
  public $text_description_google = '';

  /**
   * Bundle ID / package name (e.g. `com.fitness.studio`).
   *
   * @post post
   * @var string
   */
  public $text_domain = '';

  /**
   * Support email address shown in the store listing.
   *
   * `null` to not change exists email.
   *
   * @post post
   * @var string|null
   */
  public $text_email = null;

  /**
   * Additional information about the application build.
   *
   * @post post
   * @var string
   */
  public $text_information = '';

  /**
   * App Store search keywords (comma-separated).
   *
   * @post post
   * @var string
   */
  public $text_keyword = '';

  /**
   * Application name shown on the device home screen.
   *
   * @post post
   * @var string
   */
  public $text_name = '';

  /**
   * Support phone number shown in the store listing.
   *
   * @post post
   * @var string
   */
  public $text_phone = '';

  /**
   * Application title in the App Store listing.
   *
   * @post post
   * @var string
   */
  public $text_title = '';

  /**
   * Support website URL shown in the store listing.
   *
   * @post post
   * @var string
   */
  public $text_website = '';
}

?>