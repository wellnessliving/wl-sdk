<?php

namespace WellnessLiving\Core\Drive\ImageUpload;

use WellnessLiving\Core\Drive\DriveTypeSid;
use WellnessLiving\WlFile;
use WellnessLiving\WlModelAbstract;

/**
 * Uploads a raw image to a server.
 *
 * You must save an image by using {@link ImageUploadModel}.
 */
class ImageUploadTemporaryModel extends WlModelAbstract
{
  /**
   * The image to be uploaded.
   *
   * @post post
   * @var WlFile
   */
  public $f_image;

  /**
   * If `true`, a crop is used. Otherwise, this will be `false` if a crop isn't used (the image is saved in its original size).
   *
   * @post result
   * @var bool
   */
  public $has_crop;

  /**
   * The actual height of the thumbnail image.
   *
   * @post result
   * @var int
   */
  public $i_height;

  /**
   * The height of the original image.
   *
   * @post result
   * @var int
   */
  public $i_height_src;

  /**
   * The angle of the image rotation compared to the original.
   *
   * @post result
   * @var int
   */
  public $i_rotate;

  /**
   * The actual width of the thumbnail image.
   *
   * @post result
   * @var int
   */
  public $i_width;

  /**
   * The width of the original image.
   *
   * @post result
   * @var int
   */
  public $i_width_src;

  /**
   * The image type ID. One of the {@link DriveTypeSid} constants.
   *
   * @post result
   * @var int
   */
  public $id_type_src;

  /**
   * If `true`, the thumbnail is a resized variant of the original image.
   *
   * @post result
   * @var bool
   */
  public $is_resize;

  /**
   * The key of the image within {@link ImageUploadTemporaryModel::$s_class}.
   *
   * For example, for a user's photo, specify the user's key here.
   *
   * @post get
   * @var string
   */
  public $k_id = '';

  /**
   * The name of the class that manages this image.
   *
   * For example, for a user's photo, specify the string `PassportLoginImage` here.
   *
   * @post get
   * @var string
   */
  public $s_class = '';

  /**
   * The URL to the resized and rotated image in file storage.
   *
   * @post result
   * @var string
   */
  public $url_thumbnail;

  /**
   * The URL to the original image in file storage.
   *
   * @post result
   * @var string
   */
  public $url_view;
}

?>