<?php

namespace WellnessLiving\Wl\Import\Wizard;

/**
 * Full list of different imports.
 *
 * Last used ID: 25
 */
class ImportWizardSid
{
  /**
   * Import of the created past and future appointment reservations.
   *
   * Requires staff, services, purchase options and members.
   */
  const APPOINTMENT = 8;

  /**
   * Import of past and future classes and events booking.
   * Creates class schedule also.
   *
   * Requires staff, classes, events, purchase options and members.
   */
  const ATTENDANCE = 7;

  /**
   * Credit card and ACH accounts import.
   *
   * Requires members.
   */
  const BANK = 9;

  /**
   * Import of the Gift Cards.
   */
  const COUPON = 16;

  /**
   * Operator can add credentials for the importing business in the foreign system.
   *
   * This allows to perform some steps with robots instead of human operator.
   */
  const CREDENTIAL = 10;

  /**
   * Import of discount codes.
   */
  const DISCOUNT_CODE = 18;

  /**
   * Import of the Login Types.
   */
  const LOGIN_TYPE = 14;

  /**
   * Import client member measurements.
   */
  const MEASUREMENT_CURVES = 25;

  /**
   * Import of the whole list of members of the business. With all purchases and payments.
   *
   * Requires purchase options.
   */
  const MEMBER = 1;

  /**
   * Import of the memberships.
   *
   * Requires services and promotions.
   */
  const MEMBERSHIP = 11;

  /**
   * Import of the whole list of members of the business from Curves Software.
   */
  const MEMBER_CURVES = 19;

  /**
   * Import of the list of leads of the business from Curves Software.
   */
  const MEMBER_LEAD_CURVES = 23;

  /**
   * Import of the client's pricing options.
   */
  const MEMBER_PURCHASE = 24;

  /**
   * Starts import of the step {@link ImportWizardSid::MEMBER}.
   * This step should starts after all other steps to make sure that pre import processes are finished.
   */
  const MEMBER_START = 17;

  /**
   * Import of the packages.
   *
   * Requires promotions.
   */
  const PACKAGE = 4;

  /**
   * Import of the products.
   */
  const PRODUCT = 5;

  /**
   * Import of the promotions.
   *
   * Requires services.
   */
  const PROMOTION = 3;

  /**
   * Import history of reimbursement history.
   *
   * Requires members.
   */
  const REIMBURSEMENT_CURVES = 21;

  /**
   * Import of the <tt>MindBody</tt> reports.
   */
  const REPORT = 15;

  /**
   * Import of the classes, events and services.
   */
  const SERVICE = 6;

  /**
   * Import of the staff members.
   */
  const STAFF = 2;

  /**
   * Import gym visits history.
   */
  const VISIT = 12;

  /**
   * Import appointment visit history.
   */
  const VISIT_APPOINTMENT_CURVES = 20;

  /**
   * Import gym visit history.
   */
  const VISIT_GYM_CURVES = 22;

  /**
   * Import of Liability Waiver.
   */
  const WAIVER = 13;
}

?>