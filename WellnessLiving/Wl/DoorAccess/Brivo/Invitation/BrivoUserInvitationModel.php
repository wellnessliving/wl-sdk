<?php

namespace WellnessLiving\Wl\DoorAccess\Brivo\Invitation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API point to manage a client invitations.
 *
 * @method WlModelRequest get() Sets {@link \Wl\DoorAccess\Brivo\Invitation\BrivoUserInvitationApi::$is_redeem} to `true` if an invitation is redeemed, and to `false` otherwise. Method retrieves an invitation status from database, whether it is not redeemed the invitation data is retrieved from Brivo. Method controls time of last update of the invitation's data and updates it if necessary(invitation's data exists and outdated).
 * @method WlModelRequest post() This method is called to process request for Brivo mobile pass invitation for a client.
 */
class BrivoUserInvitationModel extends WlModelAbstract
{
  /**
   * Whether the client has a Brivo invitation, and is present in the client's group with Brivo invitation enabled.
   * `true` if the client has a Brivo invitation, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $has_brivo_invitation = false;

  /**
   * @get result
   * @post result
   * @var bool
   */
  public $is_redeem = false;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * UID of a user for whom an invitation should be sent.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>