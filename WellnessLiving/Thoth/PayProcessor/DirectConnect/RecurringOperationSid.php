<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * A list of operations in Recurring Web Service.
 *
 * Corresponds to <tt>RecurringTransType</tt> enumeration in API documentation.
 */
class RecurringOperationSid
{
  /**
   * Add new customer.
   */
  const ADD = 1;

  /**
   * Delete customer.
   */
  const DELETE = 3;

  /**
   * Update customer information.
   */
  const UPDATE = 2;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.RecurringOperationSid';
}

?>