<?php

namespace WellnessLiving\Core\Drive\ImageUpload;

use WellnessLiving\WlModelAbstract;

/**
 * Performs final action action to image uploaded with
 * {@link \WellnessLiving\Core\Drive\ImageUpload\ImageUploadTemporaryModel}.
 */
class ImageUploadModel extends WlModelAbstract
{
  /**
   * Height of thumbnail image.
   * <tt>null</tt> until loaded from server.
   *
   * @put result
   * @var int|null
   */
  public $i_thumbnail_height = null;

  /**
   * Width of thumbnail image.
   * <tt>null</tt> until loaded from server.
   *
   * @put result
   * @var int|null
   */
  public $i_thumbnail_width = null;

  /**
   * Key of image within {@link ImageUploadModel::$s_class}.
   *
   * @put get
   * @var string
   */
  public $k_id = '';

  /**
   * Name of class that manages this image.
   *
   * @put get
   * @var string
   */
  public $s_class = '';

  /**
   * Action that must be done to image.
   *
   * @put post
   * @var string
   */
  public $s_command = '';

  /**
   * URL of thumbnail of the image.
   * <tt>null</tt> until loaded from server.
   *
   * @put result
   * @var string
   */
  public $url_thumbnail = null;

  /**
   * Forms command to delete image.
   */
  public function commandDelete():void
  {
    $this->s_command = 'delete';
  }

  /**
   * Forms command to save uploaded image.
   */
  public function commandSave():void
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
  public function commandUpload(int $i_offset_left,int $i_offset_top,int $i_width,int $i_height,int $i_rotation = 0):void
  {
    $this->s_command = 'upload '.$i_offset_left.' '.$i_offset_top.' '.$i_width.' '.$i_height.' '.$i_rotation;
  }
}

?>