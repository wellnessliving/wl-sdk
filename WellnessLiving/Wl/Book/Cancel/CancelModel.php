<?php

namespace WellnessLiving\Wl\Book\Cancel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Cancels a services.
 *
 * @method WlModelRequest post()
 */
class CancelModel extends WlModelAbstract
{
  /**
   * Array of visit's key.
   *
   * @post post
   * @var string[]
   */
  public $a_visit = [];

  /**
   * Array of visit's key which were canceled. These visits are in current location. Bookings made at other locations
   * cannot be canceled, but they can be visible in clients Upcoming schedule in franchisee and can be selected for
   * cancellation.
   *
   * @post result
   * @var string[]
   */
  public $a_visit_canceled = [];

  /**
   * Key of the business within which the action is performed.
   *
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * User key.
   *
   * @post post
   * @var string
   */
  public $uid;
}

?>