<?php

namespace WellnessLiving\Wl\Drive;

use WellnessLiving\Core\Drive\ImageUpload\ImageUploadModel;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Overwrites core functionality of the {@link ImageUploadModel} based on the product specification.
 *
 * @method WlModelRequest get() Returns information about the image.  Used to initialize an image upload widget for an existing entity. Returns thumbnail and full-size URLs, upload endpoint, dimension constraints, and whether deletion is allowed, so the frontend can render the current image and offer upload or delete actions.
 * @method WlModelRequest post() Loads image information for a list of IDs. The POST method is used instead of the GET method because the maximum permitted URI length is restricted.  Bulk variant of the GET method for pages that must display many images at once. Accepts a JSON-encoded list of entity IDs and returns the same metadata as the single-item GET, loading all images in one round-trip to avoid N+1 requests.
 * @method WlModelRequest put() Updates the image.  Applies a command (such as delete or replace) to a previously uploaded image, then returns the refreshed image metadata so the frontend can update the widget state without a separate GET call.
 */
class ProductImageUploadModel extends WlModelAbstract
{
  /**
   * Allows to give custom parameters which can be required for different types of images.
   *
   * @get get
   * @post get
   * @put get
   * @var array
   */
  public $a_config = [];

  /**
   * Image information for every ID.
   *
   * <dl>
   *   <dt>array `a_text_empty`</dt>
   *   <dd>
   *     Information about the text on the empty upload image.
   * 
   *     <dl>
   *       <dt>string `s_class`</dt>
   *       <dd>Class to change view of the upload form.</dd>
   * 
   *       <dt>string `s_text`</dt>
   *       <dd>Text to replacing.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_height_max`</dt>
   *   <dd>The maximum height of the image.</dd>
   * 
   *   <dt>int `i_height_min`</dt>
   *   <dd>The minimum height of the image.</dd>
   * 
   *   <dt>int `i_thumbnail_height`</dt>
   *   <dd>The height of the thumbnail image.
   * </dd>
   * 
   *   <dt>int `i_thumbnail_width`</dt>
   *   <dd>The width of thumbnail image.
   * </dd>
   * 
   *   <dt>int `i_width_max`</dt>
   *   <dd>The maximum width of image.</dd>
   * 
   *   <dt>int `i_width_min`</dt>
   *   <dd>The minimum width of image.</dd>
   * 
   *   <dt>bool `is_circular`</dt>
   *   <dd><tt>true</tt> if image is treated as circular; <tt>false</tt> otherwise.</dd>
   * 
   *   <dt>bool `is_delete_allow`</dt>
   *   <dd><tt>true</tt> if image deleting is allowed; <tt>false</tt> otherwise.</dd>
   * 
   *   <dt>string `s_link`</dt>
   *   <dd>The image link.</dd>
   * 
   *   <dt>string `url_empty`</dt>
   *   <dd>The URL of the image that should be shown in a case image is not uploaded.</dd>
   * 
   *   <dt>string|null `url_thumbnail`</dt>
   *   <dd>The URL of thumbnail of the image. <tt>null</tt> if image is not uploaded.</dd>
   * 
   *   <dt>string `url_upload`</dt>
   *   <dd>The URL the script where new image should be uploaded.</dd>
   * 
   *   <dt>string|null `url_view`</dt>
   *   <dd>The URL of the full image. <tt>null</tt> if image is not uploaded.</dd>
   * </dl>
   * @post result
   * @var array[]
   */
  public $a_image = null;

  /**
   * Information about the text for an empty image upload.
   *
   * <dl>
   *   <dt>string `s_class`</dt>
   *   <dd>Class to change view of the upload form.</dd>
   * 
   *   <dt>string `s_text`</dt>
   *   <dd>Text to replacing.</dd>
   * </dl>
   * @get result
   * @put result
   * @var array|null
   */
  public $a_text_empty = null;

  /**
   * An HTML string to use for the image recommendation.
   *
   * @get result
   * @put result
   * @var string
   */
  public $html_image_hint = null;

  /**
   * The maximum height of image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_height_max = null;

  /**
   * The minimum height of image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_height_min = null;

  /**
   * The height of the thumbnail image.
   * This will be `null` until it's loaded from the server.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_thumbnail_height = null;

  /**
   * The width of the thumbnail image.
   * This will be `null` until it's loaded from the server.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_thumbnail_width = null;

  /**
   * The maximum width of the image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_width_max = null;

  /**
   * The minimum width of the image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_width_min = null;

  /**
   * If `true`, the image is treated as circular. Otherwise, this will be `false`.
   *
   * @get result
   * @put result
   * @var bool|null
   */
  public $is_circular = null;

  /**
   * If `true`, image deletion is permitted. Otherwise, this will be `false`.
   *
   * This will be `null` until it's loaded from the server.
   *
   * @get result
   * @put result
   * @var bool|null
   */
  public $is_delete_allow = null;

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
  public $s_code = null;

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
  public $s_link = null;

  /**
   * A list of image IDs set in {@link ImageUploadModel::$s_class}, serialized using JSON.
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
  public $url_empty = null;

  /**
   * The thumbnail URL of the image.
   * This will be `null` until it's loaded from the server.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $url_thumbnail = null;

  /**
   * The script URL where new image should be uploaded from.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $url_upload = null;

  /**
   * The URL of the full image.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $url_view = null;
}

?>