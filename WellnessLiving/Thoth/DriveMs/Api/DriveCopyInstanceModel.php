<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;

/**
 * Copies all files from one instance to another.
 */
class DriveCopyInstanceModel extends WlModelAbstract
{
  /**
   * Instance ID from which links must be copied.
   *
   * @post get
   * @var string
   */
  public $s_instance_destination = '';

  /**
   * Instance ID from which links must be copied.
   *
   * @post get
   * @var string
   */
  public $s_instance_source = '';
}

?>