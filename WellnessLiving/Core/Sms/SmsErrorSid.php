<?php

namespace WellnessLiving\Core\Sms;

/**
 * SMS error codes.
 *
 * Last used ID: 13.
 *
 * @link https://www.twilio.com/docs/api/errors
 */
class SmsErrorSid
{
  /**
   * Brand can only be updated when in FAILED state. Contact support for help.
   *
   * @twilio-value 21725
   * @link https://www.twilio.com/docs/api/errors/21725
   */
  const A2P_BRAND_CANNOT_BE_UPDATED = 8;

  /**
   * Maximum number of brand update requests reached on this brand. Contact support for help.
   *
   * @twilio-value 21724
   * @link https://www.twilio.com/docs/api/errors/21724
   */
  const A2P_BRAND_UPDATE_COUNT_EXCEEDED = 7;

  /**
   * Campaign deletion failed.
   */
  const A2P_CAMPAIGN_DELETE_FAILED = 10;

  /**
   * Generic error.
   *
   * @deprecated Avoid using this error in the future, use something more specific instead.
   */
  const GENERIC = 3;

  /**
   * Resource with dependencies is missing one or more dependencies.
   */
  const INCOMPLETE = 11;

  /**
   * Message could not be delivered - blocked by the carrier.
   *
   * @twilio-value 30004
   * @link https://www.twilio.com/docs/api/errors/30004
   */
  const MESSAGE_BLOCKED_BY_CARRIER = 12;

  /**
   * Message could not be delivered - filtered by the carrier.
   * Reasons could include content or spam filter, or sending from a US long code that is not registered for A2P10DLC.
   *
   * @twilio-value 30007
   * @link https://www.twilio.com/docs/api/errors/30007
   */
  const MESSAGE_FILTERED_BY_CARRIER = 9;

  /**
   * Message could not be delivered - the 'from' phone number is not registered for A2P 10DLC.
   * You are sending messages to the US using a US 10DLC number that is not associated with an approved A2P 10DLC Campaign.
   *
   * @twilio-value 30034
   * @link https://www.twilio.com/docs/api/errors/30034
   */
  const MESSAGE_FROM_UNREGISTERED_NUMBER = 13;

  /**
   * Resource not found. The specified resource does not exist.
   *
   * @twilio-value 20404
   * @link https://www.twilio.com/docs/api/errors/20404
   */
  const NOT_FOUND = 6;

  /**
   * 'To' number is not a valid mobile phone number. The number is a landline number, an invalid number, incorrectly
   * formatted, or is the same as the 'From' phone number.
   *
   * @twilio-value 21211
   * @twilio-value 21217
   * @twilio-value 21614
   * @link https://www.twilio.com/docs/api/errors/21211
   * @link https://www.twilio.com/docs/api/errors/21217
   * @link https://www.twilio.com/docs/api/errors/21614
   */
  const PHONE_INVALID_TO_NUMBER = 1;

  /**
   * Phone number is not available for purchase.
   *
   * @twilio-value 21422
   * @link https://www.twilio.com/docs/api/errors/21422
   */
  const PHONE_UNAVAILABLE_FOR_PURCHASE = 4;

  /**
   * Attempt to send to unsubscribed recipient. The person you are trying to message has opted out of receiving messages
   * from your phone number, Channels sender, or Messaging Service.
   *
   * @twilio-value 21610
   * @link https://www.twilio.com/docs/api/errors/21610
   */
  const PHONE_UNSUBSCRIBED_RECIPIENT = 2;

  /**
   * Unknown error. The error code returned from the service provider is unknown.
   * If you are experiencing this error, consider looking up the error and adding it to this class.
   */
  const UNKNOWN = 5;
}

?>