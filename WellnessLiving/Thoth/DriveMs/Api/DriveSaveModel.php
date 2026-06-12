<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Saves the uploaded file.
 *
 * @deprecated Use {@link DriveSave74Model} instead.
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
   * The uploaded file data from the HTTP request.
   * `null` if a multipart S3 upload is used instead.
   *
   * @post post
   * @var array|null
   */
  public $a_file_content = null;

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
   * @deprecated Use {@link DriveSave74Model::$a_file_content} for regular uploads
   *  or {@link DriveSave74Model::$s_file_key} for multipart uploads instead.
   */
  public $s_content = '';

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