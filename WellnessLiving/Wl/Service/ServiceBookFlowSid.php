<?php

namespace WellnessLiving\Wl\Service;

/**
 * A list of client booking flow types.
 */
class ServiceBookFlowSid
{
  /**
   * Client selects the date and time and then the staff member.
   */
  const DATE_STAFF_ORDER = 2;

  /**
   * Client selects their preferred booking order should be staff member / calendar.
   */
  const PREFER_ORDER = 3;

  /**
   * Client selects the staff member and then the date and time.
   */
  const STAFF_DATE_ORDER = 1;
}