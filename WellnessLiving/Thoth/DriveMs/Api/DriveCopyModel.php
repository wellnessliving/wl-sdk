<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Copy file between two links.
 *
 * @method WlModelRequest get() Copies a file from the source link to the destination link.  Accepts the source and destination drive links and optional copy parameters, validates their lengths, and copies the physical file referenced by the source link to the destination link in the drive storage.
 */
class DriveCopyModel extends WlModelAbstract
{
  /**
   * Additional parameters for the copy operation.
   *
   * <dl>
   *   <dt>int `i_height_max`</dt>
   *   <dd>
   *     Checks if image's height is not greater than this value. Verified only in
   * conjunction with `require-image`. Optional.
   *   </dd>
   * 
   *   <dt>int `i_height_min`</dt>
   *   <dd>
   *     Checks if image's height is not less than this value. Verified only in
   * conjunction with `require-image`. Optional.
   *   </dd>
   * 
   *   <dt>int `i_width_max`</dt>
   *   <dd>
   *     Checks if image's width is not greater than this value. Verified only in
   * conjunction with `require-image`. Optional.
   *   </dd>
   * 
   *   <dt>int `i_width_min`</dt>
   *   <dd>
   *     Checks if image's width is not less than this value. Verified only in
   * conjunction with `require-image`. Optional.
   *   </dd>
   * 
   *   <dt>bool `is_load_image_info`</dt>
   *   <dd>Whether to load information about the image. Optional.</dd>
   * 
   *   <dt>bool `is_private`</dt>
   *   <dd>Whether the file is private. Optional.</dd>
   * 
   *   <dt>bool `require-image`</dt>
   *   <dd>Whether to throw an exception if the uploaded file is not an image. Optional.</dd>
   * 
   *   <dt>int `timeout`</dt>
   *   <dd>Remove the file after the specified number of seconds. `0` for persistent files. Optional.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_param = [];

  /**
   * Link to the destination file.
   *
   * @get get
   * @var string
   */
  public $s_link_destination = '';

  /**
   * Link to the source file.
   *
   * @get get
   * @var string
   */
  public $s_link_source = '';
}

?>