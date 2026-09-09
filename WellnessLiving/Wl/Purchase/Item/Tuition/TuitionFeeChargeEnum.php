<?php

namespace WellnessLiving\Wl\Purchase\Item\Tuition;

/**
 * Defines when the tuition registration fee is charged.
 */
class TuitionFeeChargeEnum
{
  /**
   * Registration fee is charged at the checkout.
   */
  const CHECKOUT = 1;

  /**
   * Registration fee is charged on plan start date.
   */
  const INSTALLMENT = 2;
}

?>