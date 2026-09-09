<?php

namespace WellnessLiving\Wl;

/**
 * Manages mails groups.
 *
 * Last used ID: 47.
 */
abstract class RsMailGroupSid
{
  /**
   * Abandoned checkout automation mails.
   */
  const ABANDONED_CHECKOUT = 45;

  /**
   * Notification mails for administrator.
   */
  const ADMIN = 1;

  /**
   * AI Agent–triggered notifications.
   */
  const AI_AGENT = 41;

  /**
   * Appointment notification mails for client.
   */
  const APPOINTMENT_CLIENT = 2;

  /**
   * Appointment notification mails for staff.
   */
  const APPOINTMENT_STAFF = 3;

  /**
   * Attendance list notification mail.
   */
  const ATTENDANCE = 4;

  /**
   * Automation mails.
   */
  const AUTOMATION = 5;

  /**
   * Billing mails fo client.
   */
  const BILLING_CLIENT = 7;

  /**
   * Billing memberships mails for staff.
   */
  const BILLING_MEMBERSHIP = 40;

  /**
   * Billing mails for staff.
   */
  const BILLING_STAFF = 8;

  /**
   * Notification mails for business.
   */
  const BUSINESS = 6;

  /**
   * Business message chat notifications.
   */
  const BUSINESS_SMS_CHAT = 30;

  /**
   * Class notification mails for client.
   */
  const CLASS_CLIENT = 9;

  /**
   * Group of emails with a type {@link RsMailSid::CLASSES_PROMOTE}.
   */
  const CLASS_PROMOTE = 25;

  /**
   * Class notification mails for staff.
   */
  const CLASS_STAFF = 10;

  /**
   * Client Birthday automation mails.
   */
  const CLIENT_BIRTHDAY = 46;

  /**
   * Custom templates.
   */
  const CUSTOM = 21;

  /**
   * Review notification for client.
   */
  const CUSTOMER_REVIEW_CLIENT = 11;

  /**
   * Review notification for staff.
   */
  const CUSTOMER_REVIEW_STAFF = 12;

  /**
   * Deprecated emails.
   */
  const DEPRECATED = 37;

  /**
   * Enrollment notification mails for client.
   */
  const ENROLLMENT_CLIENT = 13;

  /**
   * Enrollment notification mails for staff.
   */
  const ENROLLMENT_STAFF = 14;

  /**
   * Group of emails with a type {@link RsMailSid::EVENT_PROMOTE}.
   */
  const EVENT_PROMOTE = 31;

  /**
   * Fitbuilder.
   */
  const FITBUILDER = 38;

  /**
   * Forms group for clients.
   */
  const FORM_CLIENT = 34;

  /**
   * Forms group for staff.
   */
  const FORM_STAFF = 33;

  /**
   * Guest Pass notifications group for clients.
   */
  const GUEST_PASS_NOTIFICATIONS = 44;

  /**
   * Isaac AI Assistant.
   */
  const ISAAC = 39;

  /**
   * Lead capture group.
   */
  const LEAD_CAPTURE = 20;

  /**
   * Lead capture group staff.
   */
  const LEAD_CAPTURE_STAFF = 32;

  /**
   * Members groups for clients.
   */
  const MEMBER_GROUP_CLIENT = 42;

  /**
   * Notify staff automation action group.
   */
  const NOTIFY_STAFF = 47;

  /**
   * Online Store Group.
   */
  const ONLINE_STORE = 23;

  /**
   * Other notifications for client
   */
  const PROFILE_NOTIFICATION = 15;

  /**
   * Purchases for staff.
   */
  const PURCHASES_STAFF = 29;

  /**
   * Purchase campaign group.
   */
  const PURCHASE_CAMPAIGN = 19;

  /**
   * Group of mails that been used in registration
   */
  const REGISTRATION = 16;

  /**
   * Retention mails.
   */
  const RETENTION = 17;

  /**
   * Client review group.
   */
  const REVIEW_CLIENT = 43;

  /**
   * Client reward points group.
   */
  const REWARD_POINTS_CLIENT = 27;

  /**
   * Staff reward points group.
   */
  const REWARD_POINTS_STAFF = 28;

  /**
   * Staff tasks.
   */
  const STAFF_TASK = 24;

  /**
   * For emails from Wellnessliving to businesses on the issues of conducting their business with the help of our software.
   */
  const SUPPORT = 36;

  /**
   * System emails about businesses and subscriptions.
   */
  const SYSTEM_NOTIFICATION = 35;

  /**
   * Group for {@link RsMailSid::USER_CAMPAIGN} emails.
   */
  const USER_CAMPAIGN = 26;

  /**
   * Visit campaign group.
   */
  const VISIT_CAMPAIGN = 22;

  /**
   * Win bach group of mails.
   */
  const WIN_BACK = 18;
}

?>