<?php

namespace WellnessLiving\Wl\Business\AuthorizeSupport\Response;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Business\AuthorizePartner\AuthorizePartnerModel;

/**
 * An endpoint to request entrance into a business location.
 *
 * This endpoint is similar to {@link AuthorizePartnerModel} but not identical. To grant a user
 * access the SDK sign-in account, the Manage Business permission is required. The associated accounts will receive an
 * email regarding when they are given access and when that access expires. Access will be granted for 24 hours.
 *
 * @method WlModelRequest get() Grants or denies access to business location for staff member.  Used to respond to a support access request: a business owner accepts or rejects temporary entry for a WellnessLiving support agent. Requires the Manage Business permission. Granting access triggers an email notification and expires after 24 hours; the result is broadcast in real time to the requesting staff member.
 */
class ResponseModel extends WlModelAbstract
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
   * The key of the location to access.
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