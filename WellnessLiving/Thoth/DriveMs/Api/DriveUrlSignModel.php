<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

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