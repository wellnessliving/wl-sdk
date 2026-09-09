<?php

namespace WellnessLiving\Wl\Franchise\Fee;

/**
 * List of fee schedule types.
 *
 * Last used ID: 2
 */
class FeeScheduleSid
{
  /**
   * Scheduled basis.
   *
   * Fees are calculated on a scheduled basis and transferred in batches to the headquarters balance.
   *
   * @title Scheduled basis
   */
  const SCHEDULE = 2;

  /**
   * Per transaction.
   *
   * Fees are calculated on each transaction processed and immediately transferred to the headquarters balance.
   *
   * @title Per transaction
   */
  const TRANSACTION = 1;
}

?>