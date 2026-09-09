<?php

namespace WellnessLiving\Thoth\WlPay\Form\Installment;

/**
 * Contains a list of modes with which payment form allows users to select installment plans.
 */
class PayInstallmentModeSid
{
  /**
   * Payment form allows to enter custom details of installment plans.
   */
  const CUSTOM = 1;

  /**
   * Installment plans may not be selected.
   */
  const DISABLE = 3;

  /**
   * Payment form allows to select one of predefined installment plans.
   */
  const TEMPLATE = 2;
}

?>