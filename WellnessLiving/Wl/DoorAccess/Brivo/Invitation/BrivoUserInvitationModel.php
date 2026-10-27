<?php

namespace WellnessLiving\Wl\DoorAccess\Brivo\Invitation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API point to manage a client invitations.
 *
 * @method WlModelRequest get() Returns the redemption status of the Brivo mobile pass invitation.  Sets {@link \Wl\DoorAccess\Brivo\Invitation\BrivoUserInvitationApi::$is_redeem} to `true` if an invitation is redeemed, and to `false` otherwise. Retrieves an invitation status from the database; when it is not redeemed, the invitation data is retrieved from Brivo. Controls the time of the last update of the invitation data and updates it if necessary.
 * @method WlModelRequest post() Sends a Brivo mobile pass invitation to a client.  Processes a request for Brivo mobile pass invitation for a client. If the invitation has not been redeemed, schedules a task to send it.
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
 * This will be `true` an invitation is redeemed see {@link BrivoInvitationStatusEnum}, `false` otherwise.
 *
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