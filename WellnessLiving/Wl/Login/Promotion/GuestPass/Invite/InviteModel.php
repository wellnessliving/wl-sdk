<?php

namespace WellnessLiving\Wl\Login\Promotion\GuestPass\Invite;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to manage a single guest pass invitation.
 *
 * @method WlModelRequest delete() Revokes a guest pass invitation.  Marks the invitation as rejected and sends an expiry notification to the guest.
 * @method WlModelRequest put() Sends a reminder notification for a guest pass invitation.  Resends the invitation notification to the guest using the reminder email or SMS template.
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