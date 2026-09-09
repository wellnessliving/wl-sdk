<?php

namespace WellnessLiving\Core\Sms\A2p;

/**
 * Campaign Registration status for A2P10DLC registration.
 *
 * Last used id: 7.
 */
class CampaignRegistrationStatusSid
{
  /**
   * Campaign registration was deleted.
   *
   * @title Deleted
   */
  const DELETED = 6;

  /**
   * Campaign registration has not yet been submitted.
   *
   * @title Not available
   */
  const NOT_SUBMITTED = 1;

  /**
   * Campaign registration has been submitted and is pending approval.
   *
   * @title Pending
   */
  const PENDING = 2;

  /**
   * Campaign registration has been submitted and approved.
   *
   * @title Registered
   */
  const REGISTERED = 3;

  /**
   * Campaign registration has been rejected.
   *
   * @title Rejected
   */
  const REJECTED = 4;

  /**
   * Campaign is suspended.
   *
   * @title Suspended
   * @link https://www.twilio.com/docs/messaging/compliance/a2p-10dlc/troubleshooting-a2p-brands#11-brands-with-suspended-status-and-related-campaign-suspensions
   */
  const SUSPENDED = 7;

  /**
   * Status is unknown. Indicates that a status other than one defined in this file was returned by Twilio.
   *
   * @title Unknown
   */
  const UNKNOWN = 5;
}

?>