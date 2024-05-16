<?php

namespace WellnessLiving\Custom\Core\Drive\ImageUpload;

use WellnessLiving\WlModelAbstract;

/**
 * Class aimed to customise class {@link \WellnessLiving\Core\Drive\ImageUpload\ImageUploadModel}.
 *
 * @property string $s_command The action that must be performed to the image.
 */
abstract class ImageUploadModel extends WlModelAbstract
{
  /**
   * The forms command used to delete an image.
   */
  public function commandDelete()
  {
    $this->s_command = 'delete';
  }

  /**
   * The forms command used to save an uploaded image.
   */
  public function commandSave()
  {
    $this->s_command = 'save';
  }

  /**
   * The forms command used to crop and save an uploaded image.
   *
   * @param int $i_offset_left Left offset to crop.
   * @param int $i_offset_top Top offset to crop.
   * @param int $i_width The width to crop.
   * @param int $i_height The height to crop.
   * @param int $i_rotation The rotation angle.
   */
  public function commandUpload($i_offset_left, $i_offset_top, $i_width, $i_height, $i_rotation = 0)
  {
    $this->s_command = 'upload '.$i_offset_left.' '.$i_offset_top.' '.$i_width.' '.$i_height.' '.$i_rotation;
  }
}

?>