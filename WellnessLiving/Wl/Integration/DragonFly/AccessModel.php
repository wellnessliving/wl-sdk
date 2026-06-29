<?php

namespace WellnessLiving\Wl\Integration\DragonFly;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Checks if a user can access a physical location.
 *
 * @method WlModelRequest get() Checks if the user can physically access the location.  There are 3 scenarios where a user can be given access. Scenario 1 - If a valid member ID used, for instance from a bar code scanner, then the user may have access. Scenario 2 - If a valid uid is used and the user is a staff member, then the user may have access. Scenario 3 - If a valid uid is used and the client has a session or gym access at this location, then the user may have access.
 */
class AccessModel extends WlModelAbstract
{
  /**
   * Whether the specified user can access the location.
   * `true` if the specified member can access the location.
   * `false` if they can not.
   *
   * @get result
   * @var bool
   */
  public $can_access = false;

  /**
   * The location key.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * The member ID.
   * Member ID is intended to work with barcode scanners.
   * If this is specified the user key does not need to be set.
   *
   * @get get
   * @var string
   */
  public $s_member = '';

  /**
   * The user key.
   * This should be specified if the member ID is not set or not known.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>