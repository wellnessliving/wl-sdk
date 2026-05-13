<?php

namespace WellnessLiving\Wl\Login\Member;

/**
 * List of intents of the user in the business.
 * This means, why was user interested in the business, when first time came or called.
 *
 * Last ID: 19.
 */
class MemberIntentsSid
{
  /**
   * Customer asks about payment methods, financing, invoices, payment issues, or billing to insurance.
   *
   * @title Billing Inquiry
   */
  const BILLING_INQUIRY = 8;

  /**
   * Customer clearly expresses intent to schedule a new class, appointment, event, or asset.
   *
   * @title Booking
   */
  const BOOKING = 1;

  /**
   * Customer explicitly asks to cancel an existing booking with no intent to reschedule.
   *
   * @title Booking Cancellation
   */
  const BOOKING_CANCELLATION = 3;

  /**
   * Customer explicitly asks to change the date, time, or provider for an existing booking.
   *
   * @title Booking Reschedule
   */
  const BOOKING_RESCHEDULE = 2;

  /**
   * Customer requests operational or logistical details about the business (address, hours, contacts).
   *
   * @title Business Information
   */
  const BUSINESS_INFORMATION = 14;

  /**
   * Customer asks whether a specific instructor, staff member, or service is available.
   *
   * @title Check Availability
   */
  const CHECK_AVAILABILITY = 10;

  /**
   * Customer asks general wellness or fitness questions not tied to appointments, pricing, or availability.
   *
   * @title General Inquiry
   */
  const GENERAL_INQUIRY = 11;

  /**
   * Customer wants to leave a voicemail, voice note, or message for staff.
   *
   * @title Leave Message
   */
  const LEAVE_MESSAGE = 6;

  /**
   * Customer provides neutral acknowledgments or silence with no specific goal.
   *
   * @title No Intent
   */
  const NO_INTENT = 18;

  /**
   * Customer asks questions unrelated to wellness, fitness, or the business.
   *
   * @title Out of Scope
   */
  const OUT_OF_SCOPE = 17;

  /**
   * Customer requests cost or pricing details for services.
   *
   * @title Pricing Inquiry
   */
  const PRICING_INQUIRY = 5;

  /**
   * Customer asks about packages, session passes, or membership options.
   *
   * @title Purchase Options Inquiry
   */
  const PURCHASE_OPTIONS_INQUIRY = 13;

  /**
   * Customer mentions they were referred by someone.
   *
   * @title Referral
   */
  const REFERRAL = 12;

  /**
   * Customer expresses interest in a service without asking about pricing or availability specifically.
   *
   * @title Service Inquiry
   */
  const SERVICE_INQUIRY = 15;

  /**
   * Customer behavior is clearly non-genuine: spam, prank, bot, test call, or marketing.
   *
   * @title Spam
   */
  const SPAM = 16;

  /**
   * Customer requests to speak with a staff member, receive a callback, or staff follow-up is needed.
   *
   * @title Staff Assistance Request
   */
  const STAFF_ASSISTANCE_REQUEST = 4;

  /**
   * Customer insists on immediate live transfer to a staff member.
   *
   * @title Transfer Call to Staff
   */
  const TRANSFER_CALL_TO_STAFF = 7;

  /**
   * Customer asks about their already scheduled or upcoming appointments.
   *
   * @title View Bookings
   */
  const VIEW_BOOKINGS = 9;

  /**
   * Customer asks about their purchased memberships, session passes, or packages.
   *
   * @title View Client Purchase Options Details
   */
  const VIEW_CLIENT_PO_DETAILS = 19;
}

?>