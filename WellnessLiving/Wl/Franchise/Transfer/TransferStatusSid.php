<?php

namespace WellnessLiving\Wl\Franchise\Transfer;

/**
 * Transfer status.
 *
 * Last used ID: 4
 */
class TransferStatusSid
{
  /**
   * Approved status.
   *
   * @title Approved
   */
  const APPROVE = 1;

  /**
   * Cancel transfer.
   *
   * @title Canceled
   */
  const CANCEL = 4;

  /**
   * Deny transfer.
   *
   * @title Denied
   */
  const DENY = 3;

  /**
   * Wait for approve.
   *
   * @title Wait for approve
   */
  const WAIT_APPROVE = 2;
}

?>