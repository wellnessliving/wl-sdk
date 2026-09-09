<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * A list of customer statuses.
 *
 * Corresponds to <tt>UserStatusType</tt> enumeration in API documentation.
 */
class CustomerStatusSid
{
  /**
   * Active user.
   */
  const ACTIVE = 1;

  /**
   * Inactive user.
   */
  const INACTIVE = 2;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.CustomerStatusSid';
}

?>