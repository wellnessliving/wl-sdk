<?php

namespace WellnessLiving\Wl\Login\Promotion\GuestPass\Claim;

use WellnessLiving\WlModelAbstract;

/**
 * API to claim a guest pass invitation on behalf of the currently signed-in user.
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