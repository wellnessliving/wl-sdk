<?php

namespace WellnessLiving\Wl\Drive;

use WellnessLiving\Core\Drive\ImageUpload\ImageCopyTemporaryModel;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Overwrites core functionality of the {@link ImageCopyTemporaryModel} based on the product specification.
 *
 * @method WlModelRequest post() Makes a temporary copy of the specified image.
 */
class ProductImageCopyTemporaryModel extends WlModelAbstract
{
  /**
   * Allows to give custom parameters which can be required for different types of images.
   *
   * @post get
   * @var array
   */
  public $a_config = [];

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
   * Image type ID.
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
   * Image link.
   *
   * @post get,result
   * @var string
   */
  public $s_link = '';

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