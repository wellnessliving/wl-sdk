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
   * <dl>
   *   <dt>bool `is_active`</dt>
   *   <dd>
   *     Whether the instance is active.
   *    `true` - the instance is active.
   *    `false` - the instance is not active.
   *    `null` - unknown, error occurred while checking instance activity.
   *   </dd>
   * 
   *   <dt>bool `is_error`</dt>
   *   <dd>
   *     Whether there was an error while checking the instance.
   *    `true` - an error occurred while checking the instance.
   *    `false` - the instance was checked successfully.
   *   </dd>
   * 
   *   <dt>bool `is_exists`</dt>
   *   <dd>Whether information about the instance was found.
   *    `true` - found, `false` - not found, `null` - unknown.</dd>
   * 
   *   <dt>bool `is_test`</dt>
   *   <dd>Whether the instance is a test instance.
   *    `true` - test, `false` - not a test, `null` - unknown.</dd>
   * </dl>
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