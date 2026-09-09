<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * Transaction settlement messages.
 *
 * This enumeration is not documented. This list is received from DC support team.
 *
 * With the Transaction Reporting Web Service <tt>GetCheckTrx</tt> method you receive the ACH payment status in the
 * <tt>TRX_Settle_Msg_VC</tt> node of the response. This SID class contains a list of valid statuses.
 *
 * The following 4 statuses are the typical flow, its description include standard timing in days:
 * * {@link TransactionSettleMessageSid::RECEIVED} - day 1;
 * * {@link TransactionSettleMessageSid::ACCEPTED} - days  2, 3;
 * * {@link TransactionSettleMessageSid::COLLECTED} - day  4;
 * * {@link TransactionSettleMessageSid::PAID} - day 5.
 *
 * E.g., using Monday as the day the payment is created (Received), it would be funded to the merchant (Paid) on Friday.
 *
 * Copy of their message is stored in <tt>doc/TransactionSettleMessageSid.png</tt>.
 *
 * Update. According to new information, new value for this field appeared {@link https://wellnessliving.atlassian.net/browse/WL-21222 }.
 * Values like GB[X], where [X] is a numberm should be treated as received and waiting for settlement.
 *
 * Last used ID: 20.
 */
class TransactionSettleMessageSid
{
  /**
   * Payment has been sent to the RDFI for processing.
   *
   * Timing: days 2,3.
   */
  const ACCEPTED = 2;

  /**
   * Another payment already exists with the same amount, effective date, and bank account.
   */
  const AP_DUP = 14;

  /**
   * Payment already Paid was rejected for R05, R07, R10, R29, R51.
   *
   * Undocumented (from email messages): For ACH transactions Chargeback can occur before and after Paid.
   * When occurring after, it must be handled as an exception because status updates occurring after Paid are not
   * currently available through the Direct Connect API.
   */
  const CHARGEBACK = 9;

  /**
   * Payment was successfully collected and is pending funding.
   *
   * Timing: day 4.
   */
  const COLLECTED = 3;

  /**
   * Payment failed.
   */
  const FAILED = 21;

  /**
   * Payment has been funded.
   *
   * Timing: day 5.
   */
  const PAID = 4;

  /**
   * Payment has been added to the system.
   *
   * Timing: day 1.
   */
  const RECEIVED = 1;

  /**
   * The payment was refunded to the Customer.
   *
   * Undocumented (from email messages): Refunded is n/a in this environment as the Refund action is not available
   * through the Direct Connect API for ACH. A Refund of an ACH debit would instead be done after the Debit was Paid
   * by creating a stand-alone ACH Credit, thus not affecting the original Debit’s status.
   */
  const REFUNDED = 15;

  /**
   * Payment being retried has been sent to the RDFI for processing.
   */
  const RETRY_1_ACCEPTED = 6;

  /**
   * Retried payment was successfully collected and is pending funding.
   */
  const RETRY_1_COLLECTED = 7;

  /**
   * Payment was rejected for reason code R01 or R09, and is pending a retry.
   */
  const RETRY_1_RECEIVED = 5;

  /**
   * Payment being retried has been sent to the RDFI for processing.
   */
  const RETRY_9_ACCEPTED = 16;

  /**
   * Credit payment to Customer was rejected.
   *
   * Undocumented (from email messages): Returned occurs after Paid. This status indicates that an ACH Credit was
   * rejected. It must be handled as an exception because status updates occurring after Paid are not currently
   * available through the Direct Connect API.
   */
  const RETURNED = 10;

  /**
   * Payment was voided due to a risk violation.
   */
  const RISK_VOID = 12;

  /**
   * A stop payment was placed on the payment by the merchant.
   */
  const STOP_PAYMENT = 13;

  /**
   * We expect that this means that payment has been processed and can be considered as submitted to bank.
   * We are waiting for confirmation, but meanwhile added this to be able to restart failed tasks.
   */
  const SUBMITTED = 17;

  /**
   * Payment was rejected for a reason that cannot be retried, or payment was retried and rejected a maximum number of times.
   */
  const UNCOLLECTED = 8;

  /**
   * Payment was voided.
   *
   * Undocumented (from email messages): Voids can only be performed while an ACH is [Received | Retry 1 Received].
   */
  const VOID = 11;

  /**
   * @inheritDoc
   */
  const _TRANSLATION_CONTEXT = 'Wl.Pay.Processor.DirectConnect.TransactionSettleMessageSid';
}

?>