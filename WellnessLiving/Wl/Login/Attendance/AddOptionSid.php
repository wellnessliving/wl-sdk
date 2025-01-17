<?php

namespace WellnessLiving\Wl\Login\Attendance;

/**
 * List of options to add client to attendance list.
 */
class AddOptionSid
{
  /**
     * Add client to attendance list and charge his account.
     */
  const DEBIT = 2;

  /**
     * Add client to attendance list and pay now.
     */
  const PAY = 3;

  /**
     * Add client to attendance list without payment.
     */
  const UNPAID = 1;
}

?>