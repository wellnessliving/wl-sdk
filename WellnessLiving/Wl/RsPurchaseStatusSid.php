<?php

namespace WellnessLiving\Wl;

/**
 * Statuses of purchases.
 *
 * Last used ID: 7.
 */
abstract class RsPurchaseStatusSid
{
  /**
   * Purchase is paid, but all items are cancelled.
   */
  const CANCEL_ALL = 1;

  /**
   * Purchase is paid, but there is at least one item that is cancelled,
   * and there is at least one item that is not cancelled.
   */
  const CANCEL_PARTIAL = 2;

  /**
   * The purchase is being created, and not saved in the database yet.
   *
   * Setting a status different from <tt>CREATE</tt> blocks a purchase from modifications.
   *
   * New purchases are always created in this status.
   */
  const CREATE = 5;

  /**
   * The purchase was created in the database but failed to pay.
   */
  const ERROR = 7;

  /**
   * Purchase is paid, and there no cancelled purchase items.
   */
  const OK = 3;

  /**
   * Purchase is paid, and there no cancelled purchase items, but should not be shown in the reports.
   *
   * This status is set only in specific cases during import.
   */
  const OK_HIDDEN = 6;

  /**
   * This purchase is being paid now, or payment has failed.
   *
   * You may set this status manually when you have completed forming of a purchase, and want to assert that no
   * modifications will be made to the purchase.
   */
  const PAY = 4;
}

?>