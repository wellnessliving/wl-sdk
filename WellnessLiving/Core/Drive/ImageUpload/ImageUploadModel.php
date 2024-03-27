<?php

namespace WellnessLiving\Core\Drive\ImageUpload;

use WellnessLiving\Custom\Core\Drive\ImageUpload\ImageUploadModel as CustomImageUploadModel;

/**
 * An endpoint that performs the final action to an uploaded image.
 * Images are uploaded using {@link ImageUploadTemporaryModel}.
 */
class ImageUploadModel extends CustomImageUploadModel
{
  /**
   * Image information for every ID. Every element contains values such as the
   * {@link ImageUploadModel::_get()} result.
   *
   * @post result
   * @var array[]
   */
  public $a_image;

  /**
   * Information about the text for an empty image upload. See the PHP side for more information.
   *
   * @get result
   * @put result
   * @var array|null
   */
  public $a_text_empty;

  /**
   * An HTML string to use for the image recommendation.
   *
   * @get result
   * @put result
   * @var string
   */
  public $html_image_hint;

  /**
   * The maximum height of image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_height_max;

  /**
   * The minimum height of image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_height_min;

  /**
   * The height of the thumbnail image.
   * This will be `null` until it's loaded from the server.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_thumbnail_height;

  /**
   * The width of the thumbnail image.
   * This will be `null` until it's loaded from the server.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_thumbnail_width;

  /**
   * The maximum width of the image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_width_max;

  /**
   * The minimum width of the image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_width_min;

  /**
   * If `true`, the image is treated as circular. Otherwise, this will be `false`.
   *
   * @get result
   * @put result
   * @var bool|null
   */
  public $is_circular;

  /**
   * If `true`, image deletion is permitted. Otherwise, this will be `false`.
   *
   * This will be `null` until it's loaded from the server.
   *
   * @get result
   * @put result
   * @var bool|null
   */
  public $is_delete_allow;

  /**
   * If `true`, the temporary image will be retrieved. Otherwise, this will be `false`.
   *
   * @get get
   * @put get
   * @var bool
   */
  public $is_temporary = false;

  /**
   * The image ID set in {@link ImageUploadModel::$s_class}.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_id = '';

  /**
   * The name of the class that manages this image.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $s_class = '';

  /**
   * The link protection code.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $s_code;

  /**
   * The action that must be performed to the image.
   *
   * @put post
   * @var string
   */
  public $s_command = '';

  /**
   * The image link.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $s_link;

  /**
   * A list of image IDs set in {@link ImageUploadModel::$s_class}, serialised using JSON.
   *
   * This will be `null` if there's no data being sent by the client.
   *
   * @post post
   * @var string|null
   */
  public $text_id = null;

  /**
   * The image URL that should be displayed in cases where no image is uploaded.
   * This will be `null` until it's loaded from the server.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $url_empty;

  /**
   * The thumbnail URL of the image.
   * This will be `null` until it's loaded from the server.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $url_thumbnail;

  /**
   * The script URL where new image should be uploaded from.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $url_upload;

  /**
   * The URL of the full image.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $url_view;
}

?>