<?php

namespace WellnessLiving\Wl\Login\Promotion\GuestPass;

use WellnessLiving\Wl\Login\Promotion\GuestPass\Invite\InviteStatusEnum;

/**
 * List of possible revoke reasons for guest pass.
 *
 * Last used: 10
 */
class GuestPassRevokeEnum
{
  /**
   * Invitation revoked due to billing cycle renew.
   */
  const BILLING = 6;

  /**
   * The invitation revoked due to the early cancellation of the visit or class session cancellation.
   */
  const CANCEL_VISIT = 10;

  /**
   * Invitation revoked due invitation expiration.
   *  Used when the guest never accepted the invitation before its expiration date - the pass
   *  is refunded to the host's available quota. Paired with {@link InviteStatusEnum::INVITE_EXPIRED}.
   */
  const EXPIRE = 3;

  /**
   * Invitation revoked due to the pass-redemption window closing on an already-accepted invite.
   *  The guest claimed the pass but did not attend a visit before the expiration date. The pass
   *  is committed to the guest at acceptance, so it is not refunded to the host. Paired with
   *  {@link InviteStatusEnum::GUEST_PASS_EXPIRED}.
   */
  const EXPIRE_VISIT = 9;

  /**
   * Invitation revoked due to membership put on hold
   */
  const HOLD = 2;

  /**
   * Invitation revoked due to membership became inactive.
   */
  const INACTIVE = 5;

  /**
   * Invitation revoked due to membership guest pass Purchase Option change.
   */
  const PROMOTION_EDIT = 7;

  /**
   * Invitation revoked due to membership renewal.
   */
  const RENEW = 1;

  /**
   * Invitation revoked due to membership transfer to another client.
   *
   * The pending invite is voided for the original owner's privacy; quota is preserved
   * for the new owner (no refund is issued for transfer revocations).
   */
  const TRANSFER = 8;

  /**
   * Invitation revoked due to payment cancellation.
   */
  const UNUSED = 4;
}

?>