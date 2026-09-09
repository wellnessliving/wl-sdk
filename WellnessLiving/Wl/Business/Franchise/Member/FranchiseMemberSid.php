<?php

namespace WellnessLiving\Wl\Business\Franchise\Member;

/**
 * A list of member types in franchise.
 *
 * Last used ID: 5
 */
abstract class FranchiseMemberSid
{
  /**
   * Enterprise client.
   */
  const CURVE_TRAVELER = 5;

  /**
   * Enterprise client.
   */
  const ENTERPRISE = 1;

  /**
   * Regular client in current business.
   */
  const REGULAR = 2;

  /**
   * Staff member in current business.
   */
  const STAFF = 4;

  /**
   * Traveler in current business.
   */
  const TRAVELER = 3;
}

?>