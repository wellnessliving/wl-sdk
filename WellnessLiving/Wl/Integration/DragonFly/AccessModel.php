<?php

namespace WellnessLiving\Wl\Integration\DragonFly;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that checks if a user can access a physical location.
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
   * Key of the business which request is processed.
   *
   * @var string
   */
  public $k_business;

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