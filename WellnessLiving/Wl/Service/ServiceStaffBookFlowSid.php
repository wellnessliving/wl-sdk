<?php

namespace WellnessLiving\Wl\Service;

/**
 * A list of staff booking flow types.
 */
class ServiceStaffBookFlowSid
{
  /**
   * Staff selects the date and the staff member and then time.
   * Last used ID: 2.
   */
  const DATE_STAFF_ORDER = 1;

  /**
   * Staff selects the staff member and then the date and time.
   */
  const STAFF_DATE_ORDER = 2;
}

?>