<?php

namespace WellnessLiving\Wl\Business\Account\Agreement;

/**
 * The set of variables that can be represented in the service agreement.
 *
 * Last ID: 17.
 */
abstract class AgreementVariableSid
{
  /**
   * Account type.
   */
  const ACCOUNT = 1;

  /**
   * WellnessLiving’s monthly subscription fee.
   */
  const AMOUNT_MONTH = 2;

  /**
   * The prorated fee for the customer’s first month of WellnessLiving.
   */
  const AMOUNT_START = 3;

  /**
   * Displays the address of the business.
   */
  const BUSINESS_ADDRESS = 4;

  /**
   * Displays the name of the business.
   */
  const BUSINESS_NAME = 5;

  /**
   * Subscription fee schedule table.
   */
  const CALCULATION_TABLE = 15;

  /**
   * The IP address of the customer when they accepted the service agreement.
   */
  const CUSTOMER_IP = 6;

  /**
   * The full name of the customer who accepted the service agreement.
   */
  const CUSTOMER_NAME = 7;

  /**
   * The date on which the customer will gain access to the WellnessLiving software in the following format: May 15, 2019.
   */
  const DATE_ACCESS = 8;

  /**
   * Displays the date when the contract was agreed.
   */
  const DATE_AGREE = 9;

  /**
   * The ending date of the customer’s WellnessLiving subscription in the following format: May 15, 2019.
   */
  const DATE_END = 10;

  /**
   * The starting date of the customer’s WellnessLiving subscription in the following format: May 15, 2019.
   */
  const DATE_START = 11;

  /**
   * The current date in the following format: May 15, 2019.
   */
  const DATE_TODAY = 12;

  /**
   * Period of regenerate term.
   */
  const TERM_GENERATE_PERIOD = 16;

  /**
   * Text for selected period of regenerate term.
   */
  const TERM_GENERATE_TEXT = 17;

  /**
   * Preview link on full service agreement.
   */
  const URL_FULL_DISPLAY = 13;

  /**
   * Link on full service agreement.
   */
  const URL_FULL_HREF = 14;
}

?>