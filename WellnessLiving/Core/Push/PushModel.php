<?php

namespace WellnessLiving\Core\Push;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Model for saving of IDs of users' devices.
 *
 * @method WlModelRequest post() Adds new device ID for push notifications. Does nothing if user {@link \Core\Push\PushApi::$uid} already has devise ID {@link \Core\Push\PushApi::$s_id}.
 */
class PushModel extends WlModelAbstract
{
  /**
   * Application ID. For example 'com.wellnessliving.com'.
   *
   * @post get
   * @var string
   */
  public $s_application_id = '';

  /**
   * Device ID.
   *
   * @post get
   * @var string
   */
  public $s_id = '';

  /**
   * OS name.
   *
   * @post get
   * @var string
   */
  public $sid_system = '';

  /**
   * User key.
   *
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>