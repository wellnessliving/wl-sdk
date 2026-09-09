<?php

namespace WellnessLiving\Wl\Login\Promotion\GuestPass\Invite;

/**
 * Lifecycle state of a guest pass invitation.
 *
 * Last used: 12
 */
class InviteStatusEnum
{
  /**
   * Guest attended the visit booked with the guest pass.
   */
  const ATTEND = 9;

  /**
   * Guest booked the visit booked with the guest pass.
   */
  const BOOK = 8;

  /**
   * Guest attended the visit booked with the guest pass.
   */
  const CHECKED_IN = 3;

  /**
   * Guest cancelled the visit early (without penalty). Pass is returned to the host's
   *  available quota and no longer counts toward 'Used'.
   */
  const EARLY_CANCELLED = 10;

  /**
   * Guest accepted the invitation but did not attend within the pass expiration
   *  window. Distinct from {@link InviteStatusEnum::INVITE_EXPIRED}: the pass has
   *  already been committed to the guest at acceptance, so it counts toward "Used"
   *  and is not refunded to the host's available quota.
   */
  const GUEST_PASS_EXPIRED = 6;

  /**
   * Guest claimed the invitation but the linked visit (if any) has not been
   *  completed yet. Pass is committed to the guest - it is no longer "Available"
   *  to the host and will not be refunded if the guest fails to attend.
   */
  const INVITE_ACCEPTED = 2;

  /**
   * Invitation expired before the guest claimed it. Pass returns to the host's
   *  available quota (refundable case).
   */
  const INVITE_EXPIRED = 7;

  /**
   * Invitation has been sent but the guest has not claimed it yet. Pass is held
   *  against the host's quota but can still be revoked by the host.
   */
  const INVITE_SENT = 1;

  /**
   * Guest cancelled the visit too late and was penalised. Pass is consumed and
   *  counts toward "Used".
   */
  const LATE_CANCELLED = 5;

  /**
   * Guest accepted the invitation but did not show up for the visit. Pass is
   *  consumed and counts toward "Used".
   */
  const NO_SHOW = 4;

  /**
   * Guest has a visit linked to the guest pass, but its outcome (attended, no-show,
   *  or late-cancelled) has not been determined yet and must be resolved manually by
   *  staff. Distinct from {@link InviteStatusEnum::INVITE_ACCEPTED}: the guest already
   *  has a linked visit here, rather than merely having accepted the invitation.
   */
  const PENDING = 12;

  /**
   * Guest is on the waitlist for the class session booked with the guest pass.
   *  Pass is committed to the guest - it is no longer "Available" to the host,
   *  but the guest has not secured a confirmed spot in the class yet.
   */
  const WAITLISTED = 11;
}

?>