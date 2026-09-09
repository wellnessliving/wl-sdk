<?php

namespace WellnessLiving\Wl;

/**
 * Payment actors (staff member, user or business owner).
 */
abstract class RsPayActorSid
{
  /**
   * Business owner.
   *
   * Business owner is a sort of ordinary user. It is used when business acts as a user - for example, pays for business
   * account to system business.
   */
  const BUSINESS = 3;

  /**
   * Staff member.
   *
   * The payment is performed by staff (business owner, or administrator within a business backend) on
   * behalf of a user.
   */
  const STAFF = 1;

  /**
   * User.
   *
   * The payment is performed by the user.
   */
  const USER = 2;
}

?>