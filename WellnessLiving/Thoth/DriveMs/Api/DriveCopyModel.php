<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Copy file between two links.
 */
class DriveCopyModel extends WlModelAbstract
{
  /**
   * Additional parameters for the copy operation.
   *
   * @get get
   * @var array
   */
  public $a_param = [];

  /**
   * Link to the destination file.
   *
   * @get get
   * @var string
   */
  public $s_link_destination = '';

  /**
   * Link to the source file.
   *
   * @get get
   * @var string
   */
  public $s_link_source = '';
}

?>