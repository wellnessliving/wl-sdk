<?php

namespace WellnessLiving\Thoth\PayProcessor\Paychoice\Status;

/**
 * A list of available charge transaction statuses for Paychoice payment processor.
 *
 * @link http://www.paychoice.com.au/docs/api/v3/#chargeStatus
 */
abstract class Sid
{
  /**
   * The transaction has been successful.
   */
  const APPROVE = 1;

  /**
   * The transaction has been successful but needs to be manually checked as an abnormality has been encountered
   */
  const APPROVE_ERROR = 2;

  /**
   * The transaction has not been successful. The error fields should be checked as to why the dishonour has occurred.
   */
  const DISHONOUR = 3;

  /**
   * The transaction has not been successful. The error fields should be checked as to why the error has occurred.
   */
  const ERROR = 4;

  /**
   * The transaction is still being processed. You should check back at a later date or let the Payment Notification API
   * notify you of the transaction result. You will regularly see this status when charging bank accounts.
   */
  const PROCESS = 5;

  /**
   * The transaction has been voided.
   */
  const VOID = 6;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.Paychoice.Status.Sid';
}

?>