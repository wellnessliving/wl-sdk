<?php

namespace WellnessLiving\Wl\Business\AuthorizePartner;

use WellnessLiving\WlModelAbstract;

/**
 * A model to give members of a franchisor access to a franchisee.
 */
class AuthorizePartnerModel extends WlModelAbstract
{
  /**
   * Determines whether the user will be granted access or if access will be revoked.
   * If <tt>true</tt> - then grant access; If <tt>false</tt> - then revoke access.
   * Revoking access is a scheduled task set to be run within the next 15 minutes.
   *
   * @get get
   * @var bool
   */
  public $is_grant = false;

  /**
   * The key of the Franchisee location to enter.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of the user who will be granted access.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>