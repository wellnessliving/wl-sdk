<?php

namespace WellnessLiving\Wl\Skin\Application\Resource;

use WellnessLiving\WlFile;
use WellnessLiving\WlModelAbstract;

/**
 * Uploads image and file assets for a white-label application build.
 *
 * Accepts multipart/form-data with:
 * - `a_image_upload[{key}]` file fields for image assets, where `{key}` is the image ID
 *   produced by sanitizing the asset file path (non-alphanumeric characters replaced with `_`).
 *
 * - A `google_services_json` file field for the Firebase Android config file.
 *
 * Text metadata is submitted separately via {@link ApplicationResourceMaterialModel}.
 */
class ApplicationResourceUploadModel extends WlModelAbstract
{
  /**
   * Image assets keyed by image ID.
   *
   * Each key is the sanitized asset file path (e.g. `icon_ios_Icon_60_3x_png`).
   *
   * @post post
   * @var WlFile[]
   */
  public $a_image_upload = [];

  /**
   * Firebase Android config file (`google-services.json`).
   *
   * @post post
   * @var WlFile
   */
  public $f_google_services_json = [];

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';
}

?>