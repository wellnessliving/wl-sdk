<?php

namespace WellnessLiving\Wl\Profile\Visit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for controlling the last visits of users.
 *
 * @method WlModelRequest post() Registers a visit to user profile by current user.  This is used to show a list of users that current user has recently visited in search results.
 */
class VisitModel extends WlModelAbstract
{
  /**
   * UID of the user that is visited by current user.
   *
   * @post post
   * @var string
   */
  public $uid_profile = '0';
}

?>