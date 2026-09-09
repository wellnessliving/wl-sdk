<?php

namespace WellnessLiving\Thoth\PayProcessor\DirectConnect;

/**
 * DC Gateway Auth Result codes.
 */
class ResultAuthCodeSid
{
  /**
   * Insufficient Funds Available.
   *
   * Request was rejected by the processor.
   */
  const AMOUNT_INSUFFICIENT = 51;

  /**
   * Failed AVS Check.
   *
   * Request was rejected by processor.
   *
   * Incomplete or inconsistent address information provided by Client Application for Card number.
   */
  const AVS_ERROR = 112;

  /**
   * Blocked Card. No Account. “Blocked, first used”—Transaction from new cardholder, and card not properly unblocked.
   * See {@link https://developer.visa.com/request_response_codes}
   *  "Action Code (actionCode)" section and {@link Thoth/PayProcessor/DirectConnect/doc/test-data-samples-2018.pdf}
   *  "Section 1: Standard Credit Card Transactions (Sierra Driver Triggers)" section.
   *
   * The card or account is blocked or restricted by the issuer.
   */
  const BLOCKED_CARD = 78;

  /**
   * Card number error.
   */
  const CARD_NUMBER_ERROR = 14;

  /**
   * Closed Account. See {@link https://developer.visa.com/request_response_codes} "Action Code (actionCode)" section.
   *
   * The account associated with the card has been closed by the issuer.
   */
  const CLOSED_ACCOUNT = 46;

  /**
   * Credit Card is Expired.
   */
  const DATE_EXPIRE = 54;

  /**
   * Do not honor.
   */
  const DO_NOT_HONOR = 5;

  /**
   * Invalid Expiration Date.
   *
   * Request was rejected by DC Gateway.
   */
  const EXPIRATION_INVALID = 24;

  /**
   * General Error. See {@link https://developer.visa.com/request_response_codes}
   *  "Action Code (actionCode)" section and {@link Thoth/PayProcessor/DirectConnect/doc/test-data-samples-2018.pdf}
   *  "Section 1: Standard Credit Card Transactions (Sierra Driver Triggers)" section.
   *
   * A general processing error occurred at the issuer or processor side.
   * For now let it be as is, maybe in further it will be specified more propper.
   */
  const GENERAL_ERROR = 6;

  /**
   * General Error.
   *
   * Processor failed to respond or responded in an unexpected way to a valid DC Gateway request
   */
  const GENERIC_PROCESSOR = 99;

  /**
   * Invalid Security Code.
   */
  const INVALID_CVC = 82;

  /**
   * Lost card, pick up (fraud account). Refer to card issuer, special condition. See {@link https://developer.visa.com/request_response_codes}
   *  "Action Code (actionCode)" section and {@link Thoth/PayProcessor/DirectConnect/doc/test-data-samples-2018.pdf}
   *  "Section 1: Standard Credit Card Transactions (Sierra Driver Triggers)" section.
   *
   * The card has been reported lost by the cardholder.
   * Transaction was declined by the issuer.
   */
  const LOST_CARD = 41;

  /**
   * No such issuer.
   */
  const NO_SUCH_ISSUER = 15;

  /**
   * Refer to card issuer, special condition. See {@link https://developer.visa.com/request_response_codes}
   *  "Action Code (actionCode)" section and {@link Thoth/PayProcessor/DirectConnect/doc/test-data-samples-2018.pdf}
   *  "Section 1: Standard Credit Card Transactions (Sierra Driver Triggers)" section.
   *
   * Request was declined by the issuing bank.
   * Cardholder must contact the issuing bank for further details.
   */
  const REFER_TO_ISSUER = 2;
}

?>