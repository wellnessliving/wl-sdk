<?php

namespace WellnessLiving\Wl\Pay\Processor\Nuvei\Code;

/**
 * CS Response code class.
 *
 * Last used ID: 20
 */
class CSResponseSid
{
  /**
   * Service has been successfully provided.
   */
  const APPROVED = 1;

  /**
   * Transaction cannot be cancelled.
   */
  const CANNOT_CANCEL = 2;

  /**
   * Service is declined.
   */
  const DECLINED = 3;

  /**
   * Device is busy.
   */
  const DEVICE_BUSY = 4;

  /**
   * Duplicate transmission.
   */
  const DUPLICATE_TRANSMISSION = 5;

  /**
   * Invalid identification data for the sender.
   */
  const INITIATING_PARTY = 6;

  /**
   * Invalid envelope of the message.
   */
  const INVALID_MESSAGE = 7;

  /**
   * Type of message the recipient receives is unknown or unsupported.
   */
  const MESSAGE_TYPE = 8;

  /**
   * NO Ticket/Emtpy.
   */
  const NO_TICKET = 9;

  /**
   * Invalid message: At least one of the data element or data structure is not present,
   * the format, or the content of one data element or one data structure is not correct.
   */
  const PARSING_ERROR = 10;

  /**
   * Version of the protocol couldn't be supported by the recipient.
   */
  const PROTOCOL_VERSION = 11;

  /**
   * Invalid identification data for the receiver.
   */
  const RECIPIENT_PARTY = 12;

  /**
   * Ticket is locked.
   */
  const TICKET_LOCKED = 13;

  /**
   * Timeout error.
   */
  const TIMEOUT_ERROR = 14;

  /**
   * Transaction has been cancelled.
   */
  const TRANSACTION_CANCELLED = 16;

  /**
   * There is an unfinish transactions.
   */
  const TRANSACTION_IN_PROCESS = 15;

  /**
   * Transaction has been cancelled.
   */
  const TRANSACTION_NOT_FOUND = 17;

  /**
   * Not possible to process the message, for instance the security module is unavailable,
   * the hardware is unavailable, or there is a problem of resource.
   */
  const UNABLE_TO_PROCESS = 18;

  /**
   * No relationship between register and terminal.
   */
  const UNMAPPED = 19;

  /**
   * Transaction with unadjusted tip.
   */
  const UN_ADJUSTED_TIP = 20;
}

?>