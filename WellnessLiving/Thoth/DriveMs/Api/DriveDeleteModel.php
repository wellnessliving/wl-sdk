<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Deletes a link to a physical file from the database.
 *
 * @method WlModelRequest get() Deletes the file identified by the given link.  Accepts a drive link, validates its length, and removes the corresponding file record from the drive database, making the file unavailable for download.
 */
class DriveDeleteModel extends WlModelAbstract
{
  /**
   * Link to the file.
   *
   * @get get
   * @var string
   */
  public $s_link = '';
}

?>