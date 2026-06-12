<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\Core\Drive\DriveTypeSid;
use WellnessLiving\WlModelAbstract;

/**
 * Returns a pre-signed URL to download a file with restricted access rights.
 */
class DriveUrlSignModel extends WlModelAbstract
{
  /**
   * File data.
   *
   * @get get
   * @var string[]
   */
<dl>
  <dt>int `i_height`</dt>
  <dd>Height of the image. Only present if the file is an image.</dd>

  <dt>int `i_width`</dt>
  <dd>Width of the image. Only present if the file is an image.</dd>

  <dt>int `id_type`</dt>
  <dd>Image type code. Only present if the file is an image.
One of {@link DriveTypeSid} constants.</dd>

  <dt>bool `is_private`</dt>
  <dd>Whether the link is private.</dd>

  <dt>bool `is_private_file`</dt>
  <dd>Whether the file is private.</dd>

  <dt>string `s_name`</dt>
  <dd>The name of the physical file on the drive.</dd>
</dl>
  public $a_file = [];

  /**
   * Name of the file to set on download.
   * `null` if file name not specified.
   *
   * @get get
   * @var string|null
   */
  public $s_name = null;

  /**
   * A pre-signed URL to download a file with restricted access rights.
   *
   * @get result
   * @var string
   */
  public $url = '';
}

?>