<?php

namespace WellnessLiving\Wl\Staff\Pay\Report;

/**
 * Staff payroll compensation type.
 */
abstract class CompensationTypeSid
{
  /**
   * Hours worked.
   */
  const HOURS_WORKED = 5;

  /**
   * Purchase tip.
   */
  const PURCHASE_TIP = 4;

  /**
   * Sale commission.
   */
  const SALE_COMMISSION = 1;

  /**
   * Service.
   */
  const SERVICE = 2;

  /**
   * Service tip.
   */
  const SERVICE_TIP = 3;
}

?>