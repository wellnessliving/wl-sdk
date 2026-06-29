<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns contents of a specified file.
 *
 * @method WlModelRequest post() Returns generic metadata for each of the given file links.  Low-level metadata fetch used by the drive client library before performing operations that depend on file attributes such as privacy flag, dimensions, or SHA1 hash. Results are returned as serialized rows to keep the payload compact. Use {@link \Thoth\DriveMs\Api\DriveFileApi} for structured file info instead.
 */
class DriveGenericInfoModel extends WlModelAbstract
{
  /**
   * Information about files. Every element of array is string in base64.
   *
   * @post result
   * @var string[]
   */
  public $a_info = [];

  /**
   * Link list to the file.
   *
   * This parameter was originally added, but it turned out that a large number of links could be sent to this controller,
   * which led to exceeding the maximum POST request size.
   * Therefore, the {@link DriveGenericInfoModel::$json_list} parameter was introduced,
   * which allows passing the list of links in JSON format.
   * The current parameter is kept for backward compatibility.
   * The client library that sends requests to this controller has been updated and now uses only {@link DriveGenericInfoModel::$json_list}.
   *
   * @post post
   * @var string[]
   */
  public $a_link = [];

  /**
   * Link list to the file as JSON string.
   *
   * This parameter allows passing a large number of links to the controller without exceeding the maximum POST request size.
   * The links should be provided as a JSON-encoded array of strings.
   * It is preferable to use this parameter instead of {@link DriveGenericInfoModel::$a_link}.
   *
   * @post post
   * @var string
   */
  public $json_list = '';
}

?>