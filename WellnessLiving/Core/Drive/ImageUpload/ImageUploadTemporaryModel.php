<?php

namespace WellnessLiving\Core\Drive\ImageUpload;

use WellnessLiving\WlFile;
use WellnessLiving\WlModelAbstract;

/**
 * Tool to upload a raw image into server.
 *
 * Then you must save this image by {@link \WellnessLiving\Core\Drive\ImageUpload\ImageUploadModel}.
 */
class ImageUploadTemporaryModel extends WlModelAbstract
{
  /**
   * Image to be uploaded.
   *
   * @post post
   * @var WlFile
   */
  public $f_image;

  /**
   * <tt>true</tt> - crop is used. <tt>false</tt> - crop is not used (the image is saved in the original size).
   *
   * @post result
   * @var bool
   */
  public $has_crop;

  /**
   * Actual height of thumbnail image.
   *
   * @post result
   * @var int
   */
  public $i_height;

  /**
   * Height of original image.
   *
   * @post result
   * @var int
   */
  public $i_height_src;

  /**
   * Angle on which image was rotated compared to the original.
   *
   * @post result
   * @var int
   */
  public $i_rotate;

  /**
   * Actual width of thumbnail image.
   *
   * @post result
   * @var int
   */
  public $i_width;

  /**
   * Width of original image.
   *
   * @post result
   * @var int
   */
  public $i_width_src;

  /**
   * Image type ID. One of {@link \WellnessLiving\Core\Drive\DriveTypeSid} constants.
   *
   * @post result
   * @var int
   */
  public $id_type_src;

  /**
   * <tt>true</tt> if thumbnail is a resized variant of original image.
   *
   * @post result
   * @var bool
   */
  public $is_resize;

  /**
   * Key of image within {@link \WellnessLiving\Core\Drive\ImageUpload\ImageUploadTemporaryModel::$s_class}.
   *
   * For example, for user's photo specify user's key here.
   *
   * @post get
   * @var string
   */
  public $k_id = '';

  /**
   * Name of class that manages this image.
   *
   * For example, for user's photo specify string <tt>PassportLoginImage</tt> here.
   *
   * @post get
   * @var string
   */
  public $s_class = '';

  /**
   * URL to resized and rotated image in file storage.
   *
   * @post result
   * @var string
   */
  public $url_thumbnail;

  /**
   * URL to original image in file storage.
   *
   * @post result
   * @var string
   */
  public $url_view;
}

?>