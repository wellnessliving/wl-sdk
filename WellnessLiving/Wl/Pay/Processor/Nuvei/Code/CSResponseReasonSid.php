<?php

namespace WellnessLiving\Wl\Pay\Processor\Nuvei\Code;

/**
 * CS Response reason code class.
 *
 * Last used ID: 16
 */
class CSResponseReasonSid
{
  /**
   * The Initiator of the request has sent an Abort message request, which was accepted and processed.
   */
  const ABORTED = 1;

  /**
   * The system is busy, try later.
   */
  const BUSY = 2;

  /**
   * The user has aborted the transaction on the PED keyboard, for instance during PIN entering.
   */
  const CANCEL = 3;

  /**
   * Device out of order.
   */
  const DEVICE_OUT = 4;

  /**
   * If the Input Device request a `NotifyCardInputFlag` and the Customer enters a card in the card reader without answers to the Input command,
   * the terminal abort the Input command processing,
   * and answer a dedicated `ErrorCondition` value in the Input response message.
   */
  const INSERTED_CARD = 5;

  /**
   * The card entered by the Customer cannot be processed by the terminal because this card is not configured in the system.
   */
  const INVALID_CARD = 6;

  /**
   * The transaction is still in progress and then the command cannot be processed.
   */
  const IN_PROGRESS = 15;

  /**
   * Not logged in.
   */
  const LOGGED_OUT = 7;

  /**
   * A service request is sent during a Service dialogue.
   * A combination of services not possible to provide.
   * During the `DeviceInitialisationCardReader` message processing,
   * the user has entered a card which has to be protected by the terminal,
   * and cannot be processed with this device request from the external, and then the Sale System.
   */
  const NOT_ALLOWED = 8;

  /**
   * The transaction is not found (e.g. for a reversal or a repeat).
   */
  const NOT_FOUND = 12;

  /**
   * Some sale items are not payable by the card proposed by the Customer.
   */
  const PAYMENT_RESTRICTION = 10;

  /**
   * The transaction is refused by the host or by the local rules associated to the card or the terminal.
   */
  const REFUSAL = 11;

  /**
   * The hardware is not available (absent, not configured...).
   */
  const UNAVAILABLE_DEVICE = 13;

  /**
   * The service is not available (not implemented, not configured, protocol version too old...).
   */
  const UNAVAILABLE_SERVICE = 14;

  /**
   * Acquirer or any host is unreachable or has not answered to an online request, so is considered as temporary unavailable.
   * Depending on the Sale context, the request could be repeated (to be compared with "Refusal").
   */
  const UNREACHABLE_HOST = 9;

  /**
   * The user has entered the PIN on the PED keyboard and the verification fails.
   */
  const WRONG_PIN = 16;
}

?>