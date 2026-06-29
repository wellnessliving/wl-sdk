<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves the uploaded file.
 *
 * @method WlModelRequest post() Saves the uploaded file content to the specified link.  Accepts the raw file content (or an S3 multipart key when `is_multipart` is set in  {@link \Thoth\DriveMs\Api\DriveSaveApi::$a_param}), a drive link, and an optional file name. Writes the content to the drive storage and returns the saved file metadata.
 */
class DriveSave74Model extends WlModelAbstract
{
  /**
   * Information about saved a file.
   *
   * <dl>
   *   <dt>bool `is_new`</dt>
   *   <dd>`true` if a new file was saved, otherwise `false`.</dd>
   * 
   *   <dt>bool `is_private_file`</dt>
   *   <dd>`true` if the file is private, otherwise `false`.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>The name of the physical file on the drive.</dd>
   * </dl>
   * @post result
   * @var array
   */
  public $a_file = [];

  /**
   * The uploaded file data from the HTTP request.
   * `null` if a multipart S3 upload is used instead.
   *
   * @post post
   * @var -var \WellnessLiving\WlFile|null
   */
  public $a_file_content = null;

  /**
   * A set of parameters.
   *
   * If a file is uploaded using an S3 bucket, the array must contain the key `is_multipart`.
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
   * @post post
   * @var array
   */
  public $a_param = [];

  /**
   * Key of the object in S3.
   * Used when `is_multipart` is set in {@link DriveSave74Model::$a_param}.
   * `null` if not a multipart upload.
   *
   * @post post
   * @var string|null
   */
  public $s_file_key = null;

  /**
   * Link to the file.
   *
   * @post post
   * @var string
   */
  public $s_link = '';

  /**
   * File name with extension.
   * `null` if a file name is not specified.
   *
   * @post post
   * @var string|null
   */
  public $s_name = '';
}

?>