<?php

namespace WellnessLiving\Wl\Skin\Application\Resource;

use WellnessLiving\WlFile;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Uploads image and file assets for a white-label application build.
 *
 * Accepts multipart/form-data with:
 * - `a_image_upload[{key}]` file fields for image assets, where `{key}` is the image ID
 *   produced by sanitizing the asset file path (non-alphanumeric characters replaced with `_`).
 * - A `google_services_json` file field for the Firebase Android config file.
 *
 * Text metadata is submitted separately via {@link ApplicationResourceMaterialModel}.
 *
 * @method WlModelRequest post() Uploads image and file assets for the given business application.  Each image must be submitted as `a_image_upload[{key}]`, where `{key}` is the image ID. The `google-services.json` file must be submitted as `google_services_json`.
 */
class ApplicationResourceUploadModel extends WlModelAbstract
{
  /**
   * Image assets keyed by image ID:
   *
   * Each value contains array with keys that are the sanitized asset file paths (e.g. `icon_ios_Icon_60_3x_png`).
   *
   * <dl>
   *   <dt>int[] `error`</dt>
   *   <dd>An error code representing the success or failure status.</dd>
   * 
   *   <dt>string[] `tmp_name`</dt>
   *   <dd>The temporary filename of the file in which the uploaded file was stored on the server.</dd>
   * </dl>
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