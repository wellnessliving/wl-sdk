<?php

namespace WellnessLiving\Core\Notification;

/**
 * List of reasons why sending of a notification message was failed.
 * Notification message is one of Email, SMS or push types.
 *
 * Last ID: 36.
 */
class FailSid
{
  /**
   * Email cannot be send because it is blacklisted in our system.
   */
  const BLACKLISTED = 6;

  /**
   * Notification was not set due to business limits on count of notifications per month.
   *
   * @title Business limits
   */
  const BUSINESS_LIMITS = 29;

  /**
   * Email is not sent because email message may only be sent to users of specified types, and user
   * or business is not specified
   */
  const EMPTY_BUSINESS = 14;

  /**
   * Mail is marked as having a worker, but data loader does not return any staff.
   */
  const EMPTY_STAFF = 15;

  /**
   * Hash limits are not met.
   */
  const HASH = 25;

  /**
   * User email address is locked.
   */
  const LOCKED = 13;

  /**
   * Win-Back email cannot be send, because the recipient of the message is not inactive member.
   */
  const LOGIN_BACK_TYPE_NOT_INACTIVE = 18;

  /**
   * Retention email cannot be send, because the recipient of the message is not active member.
   */
  const LOGIN_RETENTION_TYPE_NOT_ACTIVE = 19;

  /**
   * Mail address invalid.
   */
  const MAIL_INVALID = 26;

  /**
   * Email message was not sent due to business mail disable.
   */
  const MESSAGE_DISABLED = 11;

  /**
   * Message was not sent because it included restricted words.
   */
  const MESSAGE_FILTERED_INTERNAL = 33;

  /**
   * Email was not sent because rendered HTML content exceeds the size limit.
   */
  const MESSAGE_SIZE_LIMIT = 36;

  /**
   * Email message was not sent for guests.
   */
  const NO_SEND_GUEST = 30;

  /**
   * Push notification failed to send, because user opted out from subscription.
   */
  const OPTED_OUT = 3;

  /**
   * Failed to open connection for push.
   */
  const PUSH_CONNECTION = 20;

  /**
   * Service for push notification returned empty value on the request.
   */
  const PUSH_EMPTY = 21;

  /**
   * Service returned result with errors.
   */
  const PUSH_FAIL = 22;

  /**
   * User has no IDs to send a push.
   */
  const PUSH_ID = 23;

  /**/
  const PUSH_JSON_DECODE_FAIL = 24;

  /**
   * Open connection to email server failed.
   */
  const SERVER_CONNECT = 27;

  /**
   * Send to email server failed.
   */
  const SERVER_SEND = 28;

  /**
   * Email templates are not set up.
   */
  const TEMPLATE_NOT_SETUP = 8;

  /**
   * Email cannot be send, because notification is turned off.
   */
  const TURNED_OFF = 2;

  /**
   * Email messages are turned off by email pattern.
   */
  const TURNED_OFF_MAIL = 10;

  /**
   * SMS messages are turned off because A2P registration has not been completed for your business.
   */
  const TURNED_OFF_SMS_A2P_DUE = 31;

  /**
   * SMS messages are turned off because your business has opted-out of SMS messaging.
   */
  const TURNED_OFF_SMS_OPT_OUT = 32;

  /**
   * SMS messages are turned off because your business has an active trial subscription plan.
   */
  const TURNED_OFF_SMS_TRIAL_ACTIVE = 34;

  /**
   * Unable to determine reason of fail.
   */
  const UNKNOWN = 7;

  /**
   * User has unsubscribed from all email messages.
   */
  const UNSUBSCRIBED_ALL = 9;

  /**
   * Email is not sent because this user has unsubscribed from marketing email messages.
   */
  const UNSUBSCRIBED_AUTOMATED_MARKETING = 16;

  /**
   * Notification was not sent because the business does not have an active marketing suite subscription.
   */
  const UNSUBSCRIBED_MARKETING_BUSINESS = 35;

  /**
   * Email is not sent because this user has unsubscribed from this email message.
   */
  const UNSUBSCRIBED_MESSAGE = 17;

  /**
   * User does not have email address specified.
   */
  const USER_NOT_SPECIFY = 12;

  /**
   * Email cannot be send, because the recipient of the message does not belong to the specified groups.
   */
  const WRONG_CLIENT_GROUP = 4;

  /**
   * Email cannot be send, because the recipient of the message does not belong to the specified types.
   */
  const WRONG_CLIENT_TYPE = 5;
}

?>