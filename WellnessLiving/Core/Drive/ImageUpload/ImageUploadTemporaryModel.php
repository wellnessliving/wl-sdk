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
   * <tt>null</tt> until set.
   *
   * @post post
   * @var WlFile|null
   */
  public $f_image = null;

  /**
   * <tt>true</tt> - crop is used. <tt>false</tt> - crop is not used (the image is saved in the original size).
   * <tt>null</tt> until loaded from server.
   *
   * @post result
   * @var bool|null
   */
  public $has_crop = null;

  /**
   * Actual height of thumbnail image.
   * <tt>null</tt> until loaded from server.
   *
   * @post result
   * @var int|null
   */
  public $i_height = null;

  /**
   * Height of original image.
   * <tt>null</tt> until loaded from server.
   *
   * @post result
   * @var int|null
   */
  public $i_height_src = null;

  /**
   * Angle on which image was rotated compared to the original.
   * <tt>null</tt> until loaded from server.
   *
   * @post result
   * @var int|null
   */
  public $i_rotate = null;

  /**
   * Actual width of thumbnail image.
   * <tt>null</tt> until loaded from server.
   *
   * @post result
   * @var int|null
   */
  public $i_width = null;

  /**
   * Width of original image.
   * <tt>null</tt> until loaded from server.
   *
   * @post result
   * @var int|null
   */
  public $i_width_src = null;

  /**
   * Image type ID.
   * <tt>null</tt> until loaded from server.
   *
   * @post result
   * @var int|null
   */
  public $id_type_src = null;

  /**
   * <tt>true</tt> if thumbnail is a resized variant of original image.
   * <tt>null</tt> until loaded from server.
   *
   * @post result
   * @var bool|null
   */
  public $is_resize = null;

  /**
   * Key of image within {@link ImageUploadTemporaryModel::$s_class}.
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
   * <tt>null</tt> until loaded from server.
   *
   * @post result
   * @var string|null
   */
  public $url_thumbnail = null;

  /**
   * URL to original image in file storage.
   * <tt>null</tt> until loaded from server.
   *
   * @post result
   * @var string|null
   */
  public $url_view = null;
}

?>