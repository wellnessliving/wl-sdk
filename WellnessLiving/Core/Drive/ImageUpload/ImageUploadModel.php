<?php

namespace WellnessLiving\Core\Drive\ImageUpload;

use WellnessLiving\WlModelAbstract;

/**
 * Performs final action action to image uploaded with {@link \WellnessLiving\Core\Drive\ImageUpload\ImageUploadTemporaryModel}.
 */
class ImageUploadModel extends WlModelAbstract
{
  /**
   * Image information for every ID. Every element contains values like {@link \WellnessLiving\Core\Drive\ImageUpload\ImageUploadModel::_get()} result.
   *
   * @post result
   * @var array[]
   */
  public $a_image;

  /**
   * Information about text on the empty upload image. See PHP-side to get more information about this.
   *
   * @get result
   * @put result
   * @var array|null
   */
  public $a_text_empty;

  /**
   * Html string to use as the image recommendation.
   *
   * @get result
   * @put result
   * @var string
   */
  public $html_image_hint;

  /**
   * Maximum height of image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_height_max;

  /**
   * Minimum height of image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_height_min;

  /**
   * Height of thumbnail image.
   * <tt>null</tt> until loaded from server.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_thumbnail_height;

  /**
   * Width of thumbnail image.
   * <tt>null</tt> until loaded from server.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_thumbnail_width;

  /**
   * Maximum width of image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_width_max;

  /**
   * Minimum width of image.
   *
   * @get result
   * @put result
   * @var int|null
   */
  public $i_width_min;

  /**
   * <tt>true</tt> if image is treated as circular; <tt>false</tt> otherwise.
   *
   * @get result
   * @put result
   * @var bool|null
   */
  public $is_circular;

  /**
   * <tt>true</tt> if image deleting is allowed; <tt>false</tt> otherwise.
   * <tt>null</tt> until loaded from server.
   *
   * @get result
   * @put result
   * @var bool|null
   */
  public $is_delete_allow;

  /**
   * <tt>true</tt> if temporary image to be retrieved; <tt>false</tt> otherwise.
   *
   * @get get
   * @put get
   * @var bool
   */
  public $is_temporary = false;

  /**
   * ID of image within {@link \WellnessLiving\Core\Drive\ImageUpload\ImageUploadModel::$s_class}.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_id = '';

  /**
   * Name of class that manages this image.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $s_class = '';

  /**
   * Link protection code.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $s_code;

  /**
   * Action that must be done to image.
   *
   * @put post
   * @var string
   */
  public $s_command = '';

  /**
   * Image link.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $s_link;

  /**
   * List of image IDs within {@link \WellnessLiving\Core\Drive\ImageUpload\ImageUploadModel::$s_class}. Serialised via JSON.
   *
   * <tt>null</tt> if no data sent from client.
   *
   * @post post
   * @var string|null
   */
  public $text_id;

  /**
   * URL of the image that should be shown in a case image is not uploaded.
   * <tt>null</tt> until loaded from server.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $url_empty;

  /**
   * URL of thumbnail of the image.
   * <tt>null</tt> until loaded from server.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $url_thumbnail;

  /**
   * URL the script where new image should be uploaded.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $url_upload;

  /**
   * URL of the full image.
   *
   * @get result
   * @put result
   * @var string|null
   */
  public $url_view;

  /**
   * Forms command to delete image.
   */
  public function commandDelete()
  {
    $this->s_command = 'delete';
  }

  /**
   * Forms command to save uploaded image.
   */
  public function commandSave()
  {
    $this->s_command = 'save';
  }

  /**
   * Forms command to crop and save uploaded image.
   *
   * @param int $i_offset_left Left offset to crop.
   * @param int $i_offset_top Top offset to crop.
   * @param int $i_width Width to crop.
   * @param int $i_height Height to crop.
   * @param int $i_rotation Rotation angle.
   */
  public function commandUpload($i_offset_left, $i_offset_top, $i_width, $i_height, $i_rotation = 0)
  {
    $this->s_command = 'upload '.$i_offset_left.' '.$i_offset_top.' '.$i_width.' '.$i_height.' '.$i_rotation;
  }
}

?>