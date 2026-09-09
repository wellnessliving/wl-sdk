<?php

namespace WellnessLiving\Core\Sms\A2p;

/**
 * Brand Registration status for A2P10DLC registration.
 *
 * Last used id: 10.
 */
class BrandRegistrationStatusSid
{
  /**
   * Brand registration was deleted.
   *
   * @title Deleted
   */
  const DELETED = 8;

  /**
   * Brand registration has not yet been submitted.
   *
   * @title Not submitted
   */
  const NOT_SUBMITTED = 1;

  /**
   * Brand registration has been submitted and is pending approval.
   *
   * @title Pending
   */
  const PENDING = 2;

  /**
   * Brand registration is approved, but is now pending OTP verification.
   * This status only occurs for starter campaigns.
   *
   * @title Pending OTP verification
   */
  const PENDING_OTP_VERIFICATION = 9;

  /**
   * Brand registration has been submitted and approved.
   *
   * @title Registered
   */
  const REGISTERED = 4;

  /**
   * Brand registration has been rejected - problem with customer profile.
   *
   * @title Rejected
   */
  const REJECTED_CUSTOMER_PROFILE = 5;

  /**
   * Brand registration has been rejected - problem with trust product.
   *
   * @title Rejected
   */
  const REJECTED_TRUST_PRODUCT = 7;

  /**
   * Brand registration is under manual third-party review.
   *
   * @title In review
   */
  const REVIEW = 3;

  /**
   * Brand is suspended.
   *
   * @title Suspended
   * @link https://www.twilio.com/docs/messaging/compliance/a2p-10dlc/troubleshooting-a2p-brands#11-brands-with-suspended-status-and-related-campaign-suspensions
   */
  const SUSPENDED = 10;

  /**
   * Status is unknown. Indicates that a status other than one defined in this file was returned by Twilio.
   *
   * @title Unknown
   */
  const UNKNOWN = 6;
}

?>