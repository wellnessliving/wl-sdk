<?php

namespace WellnessLiving\Wl\User;

/**
 * Different types of users in the system.
 *
 * Last used id: 6.
 */
class TypeSid
{
  /**
   * Current user only.
   */
  const ACTOR = 6;

  /**
   * All admins of the site.
   */
  const ADMIN = 1;

  /**
   * Clients of the businesses.
   */
  const BUSINESS_CLIENT = 2;

  /**
   * Staff members.
   */
  const BUSINESS_STAFF = 4;

  /**
   * Clients with metabody or yfpassport packages.
   */
  const METABODY_CLIENT = 5;
}

?>