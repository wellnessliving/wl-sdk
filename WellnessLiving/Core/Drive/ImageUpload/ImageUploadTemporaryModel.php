<?php

namespace WellnessLiving\Core\Drive\ImageUpload;

use WellnessLiving\WLFile;
use WellnessLiving\WlModelAbstract;

/**
 * Tool to upload a raw image into server.
 * Then this image will be cut, and original will be remover.
 */
class ImageUploadTemporaryModel extends WlModelAbstract
{
  /**
   * Image to be uploaded.
   * <tt>null</tt> until set.
   *
   * @post post
   * @var WLFile|null
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
   * Image link.
   *
   * Must have the next format: <tt>{Class name}-{unique key}</tt>.
   * For example, for photo of a user with key "4" use <tt>PassportLoginImage-4</tt>.
   *
   * @post get
   * @var string
   */
  public $s_link = '';

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