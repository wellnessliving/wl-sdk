<?php

namespace WellnessLiving\Wl\Skin\Application\Resource;

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
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';
}

?>