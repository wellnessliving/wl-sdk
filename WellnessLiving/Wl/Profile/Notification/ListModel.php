<?php

namespace WellnessLiving\Wl\Profile\Notification;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves a list of push notification items to show in user profile.
 *
 * @method WlModelRequest get() Retrieves a list of push notification items to show in user profile.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of notification items.
   *
   * @get result
   * @var string[]
   */
  public $a_notification;

  /**
   * Business key to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * ID of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>