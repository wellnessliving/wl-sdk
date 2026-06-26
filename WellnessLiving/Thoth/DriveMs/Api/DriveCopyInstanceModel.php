<?php

namespace WellnessLiving\Thoth\DriveMs\Api;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Copies all files from one instance to another.
 *
 * @method WlModelRequest post() Copies all files from the source instance to the destination instance.  Used during server provisioning or data migration to replicate the entire drive file set from one instance to another, for example when cloning a staging environment or moving a tenant to a new server. All file records belonging to the source instance are duplicated under the destination.
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