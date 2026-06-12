<?php

namespace WellnessLiving\Studio\Microservice\Service;

use WellnessLiving\WlModelAbstract;

/**
 * Checks instance activity.
 */
class InstanceActiveCheckModel extends WlModelAbstract
{
  /**
   * List of instance IDs.
   * Key is instance ID, value is an array with the following fields: 
   *
   * @post result
   * @var array
   */
  public $a_instance = [];

  /**
   * Instance ID list to check.
   *
   * @post post
   * @var string[]
   */
  public $a_instance_check = [];
}

?>