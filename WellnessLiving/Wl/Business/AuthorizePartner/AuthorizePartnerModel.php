<?php

namespace WellnessLiving\Wl\Business\AuthorizePartner;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gives members of a franchisor access to a franchisee.
 *
 * To grant a user access, the "Manage Franchise Location" staff permission is required.
 * Access will be granted for 24 hours.
 *
 * @method WlModelRequest get() Grants or denies access to business location for a partner.  Allows a franchisor staff member to temporarily let another user into a franchisee location. Requires the "Manage Franchise Location" privilege. Granted access expires after 24 hours; revoking schedules removal within 15 minutes.
 */
class AuthorizePartnerModel extends WlModelAbstract
{
  /**
   * Determines whether the user will be granted access or if access will be revoked.
   * If `true`, access will be granted. If `false`, access will be revoked.
   * Revoking access is a scheduled task set to be run within the next 15 minutes.
   *
   * @get get
   * @var bool
   */
  public $is_grant = false;

  /**
   * The key of the franchisee location to enter.
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