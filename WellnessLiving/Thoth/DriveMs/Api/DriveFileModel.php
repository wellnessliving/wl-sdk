<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\Core\Drive\DriveTypeSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns contents of a specified file.
 *
 * @method WlModelRequest post() Returns file information for each of the given links.  Batch lookup for file metadata by drive link. Used when a page or component needs to display details (such as name, dimensions, or type) for several files at once. The JSON input variant exists to avoid hitting POST body size limits when the list is large.
 */
class DriveFileModel extends WlModelAbstract
{
  /**
   * List of information about files.
   *
   * <dl>
   *   <dt>int `i_height`</dt>
   *   <dd>Height of image. Returns if file is image.</dd>
   * 
   *   <dt>int `i_width`</dt>
   *   <dd>Width of image. Returns if file is image.</dd>
   * 
   *   <dt>int|null `id_type`</dt>
   *   <dd>Image type ID.
   * One of {@link DriveTypeSid} constants.
   * `null` if file not image.</dd>
   * 
   *   <dt>bool `is_private`</dt>
   *   <dd>Whether link is private.</dd>
   * 
   *   <dt>bool `is_private_file`</dt>
   *   <dd>Whether file is private.</dd>
   * 
   *   <dt>string `s_link`</dt>
   *   <dd>File link.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>The name of the physical file on the drive.</dd>
   * </dl>
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