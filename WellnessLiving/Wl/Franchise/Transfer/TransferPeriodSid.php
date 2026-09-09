<?php

namespace WellnessLiving\Wl\Franchise\Transfer;

/**
 * Period type of transfer.
 */
class TransferPeriodSid
{
  /**
   * Temporary transfer in days.
   */
  const DAY = 1;

  /**
   * Permanent transfer.
   */
  const PERMANENT = 2;

  /**
   * Temporary transfer in date range.
   */
  const RANGE = 3;
}

?>