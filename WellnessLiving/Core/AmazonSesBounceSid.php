<?php

namespace WellnessLiving\Core;

/**
 * Email bounce types.
 *
 * @link http://docs.aws.amazon.com/ses/latest/DeveloperGuide/notification-contents.html#bounce-types
 */
abstract class AmazonSesBounceSid
{
  /**
   * Amazon SES received a general hard bounce and recommends that you remove the recipient's email address from your
   * mailing list.
   */
  const BOUNCE_PERMANENT_GENERAL = 2;

  /**
   * Amazon SES received a permanent hard bounce because the target email address does not exist. It is recommended
   * that you remove that recipient from your mailing list.
   */
  const BOUNCE_PERMANENT_MAIL = 3;

  /**
   * Amazon SES has suppressed sending to this address because it has a recent history of bouncing as an invalid
   * address. For information about how to remove an address from the suppression list, see Removing an Email Address
   * from the Amazon SES Suppression List.
   */
  const BOUNCE_PERMANENT_SUPPRESSED = 4;

  /**
   * Amazon SES received an attachment rejected bounce. You may be able to successfully retry sending to that recipient
   * if you remove or change the attachment.
   */
  const BOUNCE_TRANSIENT_ATTACHMENT = 9;

  /**
   * Amazon SES received a content rejected bounce. You may be able to successfully retry sending to that recipient if
   * you change the message content.
   */
  const BOUNCE_TRANSIENT_CONTENT = 8;

  /**
   * Amazon SES received a mailbox full bounce. You may be able to successfully retry sending to that recipient in the
   * future.
   */
  const BOUNCE_TRANSIENT_FULL = 6;

  /**
   * Amazon SES received a general bounce. You may be able to successfully retry sending to that recipient in the future.
   */
  const BOUNCE_TRANSIENT_GENERAL = 5;

  /**
   * Amazon SES received a message too large bounce. You may be able to successfully retry sending to that recipient if
   * you reduce the message size.
   */
  const BOUNCE_TRANSIENT_LARGE = 7;

  /**
   * Amazon SES was unable to determine a specific bounce reason.
   */
  const BOUNCE_UNDETERMINED_UNDETERMINED = 1;

  /**
   * Indicates unsolicited email or some other kind of email abuse.
   */
  const COMPLAINT_ABUSE = 10;

  /**
   * Indicates unsolicited email or some other kind of email abuse.
   */
  const COMPLAINT_AUTHENTICATE = 11;

  /**
   * Complaint type is not specified.
   */
  const COMPLAINT_EMPTY = 16;

  /**
   * Indicates some kind of fraud or phishing activity.
   */
  const COMPLAINT_FRAUD = 12;

  /**
   * Indicates any other feedback that does not fit into other registered types.
   */
  const COMPLAINT_OTHER = 14;

  /**
   * Indicates that the entity providing the report does not consider the message to be spam.
   * This may be used to correct a message that was incorrectly tagged or categorized as spam.
   */
  const COMPLAINT_SPAM = 13;

  /**
   * Reports that a virus is found in the originating message.
   */
  const COMPLAINT_VIRUS = 15;
}

?>