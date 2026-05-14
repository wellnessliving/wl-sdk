<?php

namespace WellnessLiving\Wl\Login\Member;

/**
 * List of intents of the user in the business.
 * This means, why was user interested in the business, when first time came or called.
 *
 * Last ID: 16.
 */
class MemberIntentsSid
{
  /**
   * Customer asks about payment methods, financing, invoices, payment issues, or billing to insurance.
   *
   * @title Billing Inquiry
   */
  const BILLING_INQUIRY = 1;

  /**
   * Customer clearly expresses intent to schedule a new class, appointment, event, or asset.
   *
   * @title Booking
   */
  const BOOKING = 2;

  /**
   * Customer explicitly asks to cancel an existing booking with no intent to reschedule.
   *
   * @title Cancel Booking
   */
  const BOOKING_CANCELLATION = 3;

  /**
   * Customer explicitly asks to change the date, time, or provider for an existing booking.
   *
   * @title Reschedule Booking
   */
  const BOOKING_RESCHEDULE = 4;

  /**
   * Customer requests operational or logistical details about the business (address, hours, contacts).
   *
   * @title Business Inquiry
   */
  const BUSINESS_INFORMATION = 5;

  /**
   * Customer asks whether a specific instructor, staff member, or service is available.
   *
   * @title Service Inquiry
   */
  const CHECK_AVAILABILITY = 6;

  /**
   * Customer asks general wellness or fitness questions not tied to appointments, pricing, or availability.
   *
   * @title General Inquiry
   */
  const GENERAL_INQUIRY = 7;

  /**
   * Customer wants to leave a voicemail, voice note, or message for staff.
   *
   * @title Requested Staff Assistance
   */
  const LEAVE_MESSAGE = 8;

  /**
   * Customer requests cost or pricing details for services.
   *
   * @title Pricing Inquiry
   */
  const PRICING_INQUIRY = 9;

  /**
   * Customer asks about packages, session passes, or membership options.
   *
   * @title Purchase Options Inquiry
   */
  const PURCHASE_OPTIONS_INQUIRY = 10;

  /**
   * Customer mentions they were referred by someone.
   *
   * @title Referrals
   */
  const REFERRAL = 11;

  /**
   * Customer expresses interest in a service without asking about pricing or availability specifically.
   *
   * @title Service Inquiry
   */
  const SERVICE_INQUIRY = 12;

  /**
   * Customer requests to speak with a staff member, receive a callback, or staff follow-up is needed.
   *
   * @title Requested Staff Assistance
   */
  const STAFF_ASSISTANCE_REQUEST = 13;

  /**
   * Customer insists on immediate live transfer to a staff member.
   *
   * @title Requested Staff Assistance
   */
  const TRANSFER_CALL_TO_STAFF = 14;

  /**
   * Customer asks about their already scheduled or upcoming appointments.
   *
   * @title View Bookings
   */
  const VIEW_BOOKINGS = 15;

  /**
   * Customer asks about their purchased memberships, session passes, or packages.
   *
   * @title View Purchase Options
   */
  const VIEW_CLIENT_PO_DETAILS = 16;
}

?>