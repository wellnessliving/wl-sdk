<?php

namespace WellnessLiving\Wl;

/**
 * String identifiers for rs.privilege.role.
 *
 * Do not reorder class constants. It is important during selecting all system roles and custom roles from database.
 */
abstract class WlPrivilegeRoleSid
{
  /**
     * Staff role business owner.
     *
     * @title Business Owner
     */
  const BUSINESS_OWNER = 1;

  /**
     * Staff role front desk.
     *
     * @title Front Desk
     */
  const FRONT_DESK = 4;

  /**
     * Staff role instructor.
     *
     * @title Instructor
     */
  const INSTRUCTOR = 3;

  /**
     * Staff role location owner.
     *
     * @title Manager
     */
  const LOCATION_OWNER = 2;
}

?>