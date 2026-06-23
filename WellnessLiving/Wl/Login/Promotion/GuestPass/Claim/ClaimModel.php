<?php

namespace WellnessLiving\Wl\Login\Promotion\GuestPass\Claim;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to claim a guest pass invitation on behalf of the currently signed-in user.
 *
 * @method WlModelRequest post() Claims the guest pass invitation for the current user and accepts it.  Validates the invitation secret, verifies the current user is the intended recipient,  and marks the invitation as accepted.
 */
class ClaimModel extends WlModelAbstract
{
  /**
   * Key of the business within which the invitation was issued.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Secret token identifying the guest pass invitation to claim.
   *
   * @post post
   * @var string
   */
  public $s_secret = '';
}

?>