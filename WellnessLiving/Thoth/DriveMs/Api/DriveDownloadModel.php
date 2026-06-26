<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns contents of a specified file.
 *
 * @method WlModelRequest get() Downloads the contents of the file identified by the given link.  Accepts a drive link, retrieves the raw file content from storage, and returns it as a base64-encoded gzip-compressed string. Returns `false` if the file is not found.
 */
class DriveDownloadModel extends WlModelAbstract
{
  /**
   * The contents of a specified file. Encoded in base64 and compressed with gzip.
   *
   * `false` if a file is not found, otherwise - content file.
   *
   * @get result
   * @var string|bool
   */
  public $s_content = false;

  /**
   * Link to the file.
   *
   * @get get
   * @var string
   */
  public $s_link = '';
}

?>