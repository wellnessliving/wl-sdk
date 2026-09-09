<?php

namespace WellnessLiving\Wl\Quiz\Variable;

/**
 * List of variables.
 *
 * Last used ID: 42.
 */
class VariableSid
{
  /**
   * The asset that is reserved for the individual client associated with the service
   */
  const ASSET = 1;

  /**
   * The address of the business, as input under Setup > Business > General Information > Legal Business Address.
   */
  const BUSINESS_ADDRESS = 2;

  /**
   * The business's name, as input under Setup > Business > General Information.
   */
  const BUSINESS_NAME = 3;

  /**
   * The phone number of the business, as input under Setup > Business > General Information > Phone Number.
   */
  const BUSINESS_PHONE = 4;

  /**
   * The date before which the client can cancel the service without incurring penalties.
   */
  const CANCEL_DATE_LONG = 5;

  /**
   * The time before which the client can cancel the service without incurring penalties.
   */
  const CANCEL_TIME = 6;

  /**
   * Displays the expiry date of the payment card or ACH account used to make the purchase.
   */
  const CARD_EXPIRY = 7;

  /**
   * Displays the last 4 digits of the payment card or ACH account used to make the purchase.
   */
  const CARD_LAST_DIGITS = 8;

  /**
   * Displays the type of payment card or ACH account used to make the purchase.
   */
  const CARD_TYPE = 9;

  /**
   * The full address of the client associated with the form.
   */
  const CLIENT_ADDRESS = 10;

  /**
   * The age in years of the client associated with the form.
   */
  const CLIENT_AGE = 11;

  /**
   * The date of birth of the client associated with the form.
   */
  const CLIENT_BIRTHDAY = 12;

  /**
   * The email address of the client associated with the form.
   */
  const CLIENT_EMAIL = 13;

  /**
   * The cell phone number of the client associated with the form.
   */
  const CLIENT_PHONE = 14;

  /**
   * The current date in long format.
   */
  const CURRENT_DATE_LONG = 15;

  /**
   * The current date in short format,
   */
  const CURRENT_DATE_SHORT = 16;

  /**
   * The current day of the week.
   */
  const CURRENT_DAY = 17;

  /**
   * The date of the service.
   */
  const DATE_DAY = 18;

  /**
   * The time of the service.
   */
  const DATE_TIME = 19;

  /**
   * Expiry date of the payment card or ACH account marked as Default on the client’s profile.
   */
  const DEFAULT_CARD_EXPIRY = 20;

  /**
   * Last 4 digits of the payment card or ACH account marked as Default on the client’s profile
   */
  const DEFAULT_CARD_LAST_DIGITS = 21;

  /**
   * Type of payment card or ACH account marked as Default on the client’s profile
   */
  const DEFAULT_CARD_TYPE = 22;

  /**
   * The duration of the service.
   */
  const DURATION = 23;

  /**
   * Purchase Option expiration date.
   */
  const EXPIRATION = 24;

  /**
   * The first name of the client associated with the form.
   */
  const FIRST_NAME = 25;

  /**
   * The value of the first scheduled payment.
   */
  const FIRST_PAYMENT = 26;

  /**
   * The date the form was added in long format.
   */
  const FORM_DATE_LONG = 27;

  /**
   * The date the form was added in short format.
   */
  const FORM_DATE_SHORT = 28;

  /**
   * The first and last name of the client associated with the form.
   */
  const FULL_NAME = 29;

  /**
   * The home location of the client associated with the form.
   */
  const HOME_LOCATION = 30;

  /**
   * The last name of the client associated with the form.
   */
  const LAST_NAME = 31;

  /**
   * The name of the location the service is hosted at.
   */
  const LOCATION = 32;

  /**
   * The street address of the location the service is hosted at.
   */
  const LOCATION_ADDRESS = 33;

  /**
   * Amount of scheduled payments.
   */
  const NUMBER_OF_PAYMENTS = 34;

  /**
   * Scheduled billing amount.
   */
  const PAYMENT_AMOUNT = 35;

  /**
   * The payment method used for the purchase.
   */
  const PAY_METHOD = 36;

  /**
   * The date of the purchase associated with the form.
   */
  const PURCHASE_DATE = 37;

  /**
   * The purchase item associated with the form.
   */
  const PURCHASE_ITEM = 38;

  /**
   * The name of the staff member who processed the sale of the purchase item associated with the form.
   */
  const SALE_STAFF = 39;

  /**
   * The name of the service associated with the form.
   */
  const SERVICE = 40;

  /**
   * The name of the staff member providing the service associated with the form.
   */
  const SERVICE_STAFF = 41;

  /**
   * Start date of the Purchase Option.
   */
  const START_DATE = 42;
}

?>