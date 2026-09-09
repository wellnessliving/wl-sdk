<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect\PaymentSafe;

/**
 * Direct Connect gateway result codes for add card method.
 */
class DirectConnectCreditCardAddResultSid
{
  /**
   * Not enough privilege to access this customer.
   */
  const MISSING_PRIVILEGE = 9;

  /**
   * Request was declined by processor.
   *
   * Reason could be:
   * * Customer key is required;
   * * Invalid customer key;
   * * Other.
   */
  const PROCESSOR_DECLINE = 12;

  /**
   * Host Not Available.
   *
   * DC Gateway unable to communicate with processor.
    */
  const PROCESSOR_HOST = 106;
}

?>