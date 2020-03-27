<?php

namespace WellnessLiving\Wl\Business\AuthorizePartner;

use WellnessLiving\WlModelAbstract;

/**
 * Model to give members of a franchisor access to a franchisee.
 */
class AuthorizePartnerModel extends WlModelAbstract
{
  /**
   * Whether the user will be granted access or if access will be revoked.
   * If <tt>true</tt> - then grant access; If <tt>false</tt> - then revoke access.
   * Revoking access is a scheduled task set to be run within the next 15 minutes.
   *
   * @post get
   * @var bool
   */
  public $is_grant = false;

  /**
   * Key of the Franchisee location to enter.
   *
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Key of user who will be granted access.
   *
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>