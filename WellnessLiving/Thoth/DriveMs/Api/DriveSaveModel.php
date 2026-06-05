<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Saves the uploaded file.
 */
class DriveSaveModel extends WlModelAbstract
{
  /**
   * Information about saved a file.
   *
   * @post result
   * @var array
   */
  public $a_file = [];

  /**
   * A set of parameters.
   *
   * If a file is uploaded using an S3 bucket, the array must contain the key `is_multipart`.
   *
   * @post post
   * @var array
   */
  public $a_param = [];

  /**
   * The contents of a specified file if a regular file is saved.
   * Or this is the key of the object in S3, if the key `is_multipart` exists
   * in the array of parameters {@link DriveSaveModel::$a_param}.
   *
   * @post post
   * @var string
   */
  public $s_content = '';

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