<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Returns contents of a specified file.
 */
class DriveFileModel extends WlModelAbstract
{
  /**
   * List of information about files.
   *
   * @post result
   * @var array[]
   */
  public $a_file = [];

  /**
   * List of links to the files.
   * It is preferable to use {@link DriveFileModel::$json_list} parameter instead of this.
   *
   * @post post
   * @var string[]
   */
  public $a_link = [];

  /**
   * Whether use cache.
   * `true` to use cache, `false` otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_cache = true;

  /**
   * Link list to the file as JSON string.
   *
   * This parameter allows passing a large number of links to the controller without exceeding the maximum POST request size.
   * The links should be provided as a JSON-encoded array of strings.
   * It is preferable to use this parameter instead of {@link DriveFileModel::$a_link}.
   *
   * @post post
   * @var string
   */
  public $json_list = '';
}

?>