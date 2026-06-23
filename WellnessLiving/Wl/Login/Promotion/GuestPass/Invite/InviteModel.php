<?php

namespace WellnessLiving\Wl\Login\Promotion\GuestPass\Invite;

use WellnessLiving\WlModelAbstract;

/**
 * API to manage a single guest pass invitation.
 */
class InviteModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * Secret of the invitation.
   *
   * @delete get
   * @put get
   * @var string
   */
  public $s_secret = '';
}

?>