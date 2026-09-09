<?php

namespace WellnessLiving\Wl\Member\Import\File;

use WellnessLiving\Wl\Import\Migration\Company\Url\UrlSid;
use WellnessLiving\Wl\Import\Process\ProcessSid;

/**
 * List of files to upload to import business members.
 *
 * Last used ID: 34.
 */
class ImportFileSid
{
  /**
   * All sales report results in an accrual mode. Each row is a purchased item.
   * In this file can be found products, single visits and purchase options that have been bought no with a real
   * payment methods like cash or CC, but with reward points or account balance.
   *
   * @see UrlSid::MIXED_REPORT_ACCRUAL
   */
  const ACCRUAL = 16;

  /**
   * Report with information about Client Arrivals. (Gym Visits).
   *
   * @see UrlSid::MIXED_REPORT_ARRIVAL
   */
  const ARRIVAL = 24;

  /**
   * List of visits with revenues by visits.
   *
   * @see UrlSid::MIXED_REPORT_ATTENDANCE_REVENUE
   */
  const ATTENDANCE_REVENUE = 20;

  /**
   * List of account balances.
   * Each row is a separate client with his balance value on the moment of import.
   * Each client should has only one row in this file.
   * Clients with zero balance, can be not included in this file.
   *
   * @see UrlSid::DATA_REPORT_BALANCE
   */
  const BALANCE = 1;

  /**
   * List of "Assignable Gift cards".
   * Each row is a separate gift card with information: who bought, when bought, amount of the card,
   * who is receiver of the card.
   * More information: {@link https://wellnessliving.atlassian.net/browse/WL-3993}
   *
   * @see UrlSid::MIXED_REPORT_COUPON_ASSIGN
   */
  const COUPON_ASSIGN = 12;

  /**
   * List of "Prepaid Gift cards".
   * Each row is a separate gift card with information: who bought, when bought, amount of the card.
   * More information: {@link https://wellnessliving.atlassian.net/browse/WL-3993}
   *
   * @see UrlSid::MIXED_REPORT_COUPON_PREPAID
   */
  const COUPON_PREPAID = 13;

  /**
   * List of redeemed gift cards with redemption date.
   *
   * @see UrlSid::MIXED_REPORT_COUPON_REDEEM
   */
  const COUPON_REDEEM = 14;

  /**
   * This constant use in custom member import. List of client's data.
   * Each row in the file includes all personal information about client.
   * This file can include different custom columns if business uses custom fields.
   */
  const CUSTOM_CLIENT_DATA = 25;

  /**
   * List of expiration dates for purchased options.
   * Each row is a separate purchase option with activation and expiration.
   * Memberships can be excluded from this file. If item is included in this file, mostly, this means
   * that this item is Time-Based, Unlimited Pass or Package.
   *
   * @see UrlSid::MIXED_REPORT_EXPIRE
   */
  const EXPIRE = 2;

  /**
   * List of clients that is paid by someone else.
   * Each row is a separate client with all his information. This information does not matter, import
   * uses only fact, that client is included in this file. This fact will be used to create family relationship map.
   *
   * @see UrlSid::MIXED_REPORT_FAMILY_DEPENDENT
   */
  const FAMILY_DEPENDENT = 10;

  /**
   * List of clients that pay for someone else.
   * Each row is a separate client with all his information. This information does not matter, import
   * uses only fact, that client is included in this file. This fact will be used to create family relationship map.
   *
   * @see UrlSid::MIXED_REPORT_FAMILY_DEPENDENT
   */
  const FAMILY_PAYER = 9;

  /**
   * List of family relationships.
   * Each row is a couple of clients with the relationship type between this clients.
   */
  const FAMILY_RELATIONSHIP = 15;

  /**
   * List of clients that have male gender. All clients that are not presented in this file are women.
   *
   * @see UrlSid::MIXED_REPORT_GENDER
   */
  const GENDER = 11;

  /**
   * List of inactive clients. Information about clients in this file is not used. Import only used the fact,
   * that client is included in this file. This means that this client should be imported as not active.
   *
   * @see UrlSid::MIXED_REPORT_INACTIVE
   */
  const INACTIVE = 8;

  /**
   * Report with inventory levels of products.
   *
   * @see UrlSid::DATA_REPORT_INVENTORY
   */
  const INVENTORY = 19;

  /**
   * List of client's data.
   * Each row in ths file includes all personal information about client.
   * This file can include different custom columns if business uses custom fields.
   *
   * @see UrlSid::MIXED_REPORT_MAIL
   */
  const MAIL = 3;

  /**
   * List of memberships.
   * Each row is a separate membership with planned expiration date and last auto-payment date.
   * Planned expiration in this file can be not actual expiration date, if membership has been cancelled.
   *
   * @see UrlSid::MIXED_REPORT_MEMBERSHIP
   */
  const MEMBERSHIP = 4;

  /**
   * List of auto-payments.
   * Each row is an automatic payment - membership re-fill or membership auto-renew.
   * File includes not only processed payments, but also scheduled, cancelled and postponed payments.
   *
   * @see UrlSid::MIXED_REPORT_PAYMENT
   */
  const PAYMENT = 5;

  /**
   * File, which includes information about current client's balance from mindbody prepaid dataset.
   */
  const PREPAID_ACCOUNT_BALANCES = 27;

  /**
   * File, which includes all information about clients from mindbody prepaid dataset.
   */
  const PREPAID_CLIENTS = 26;

  /**
   * File, which includes all information about clients' auto-payments from mindbody prepaid dataset.
   */
  const PREPAID_CLIENT_AUTOPAY_CONTRACTS = 30;

  /**
   * File, which includes all information about clients' notification settings.
   *
   * @see ProcessSid::COLLECT_SUBSCRIPTIONS
   */
  const PREPAID_CLIENT_NOTIFICATIONS = 33;

  /**
   * File, which includes all information about clients' pricing options from mindbody prepaid dataset.
   */
  const PREPAID_CLIENT_PRICING_OPTIONS = 29;

  /**
   * File, which includes all information about clients' relationships.
   *
   * One row of the file is two clients with relationships from - to.
   *
   * @see ProcessSid::COLLECT_FAMILY_RELATIONSHIP
   */
  const PREPAID_CLIENT_RELATIONSHIPS = 34;

  /**
   * File, which include information about clients' purchases from mindbody prepaid dataset.
   */
  const PREPAID_CLIENT_SALES = 28;

  /**
   * File, which includes list of locations.
   */
  const PREPAID_LOCATIONS = 31;

  /**
   * File, which includes all information about clients' transactions from mindbody prepaid dataset.
   *
   * @see ProcessSid::COLLECT_TRANSACTIONS
   */
  const PREPAID_PAYMENTS = 32;

  /**
   * Sales report results. Each row is a purchased item.
   * In this file can be found products, single visits and purchase options. It cannot be defined type of the
   * purchase option using only information from this file. To define, what is product, purchase option and etc. import
   * uses other files to associate sales with remaining, expiration dates and auto-payments.
   *
   * @see UrlSid::MIXED_REPORT_SALE
   */
  const SALE = 6;

  /**
   * Report with information about Schedule at a Glance for Appointments only.
   *
   * @see UrlSid::MIXED_REPORT_SCHEDULE_APPOINTMENT
   */
  const SCHEDULE_APPOINTMENT = 21;

  /**
   * Report with information about Schedule at a Glance for Classes/Enrollments only.
   *
   * @see UrlSid::MIXED_REPORT_SCHEDULE_CLASS
   */
  const SCHEDULE_CLASS = 22;

  /**
   * List of client's who shares pricing options with other clients.
   *
   * @see UrlSid::MIXED_REPORT_SHARE
   */
  const SHARE = 18;

  /**
   * List of client's data who is not subscribed to get emails and notifications.
   *
   * @see UrlSid::MIXED_REPORT_VISIT
   */
  const SUBSCRIPTION = 17;

  /**
   * List of visit remains for purchase options.
   *
   * @see UrlSid::MIXED_REPORT_VISIT
   */
  const VISIT = 7;

  /**
   * List of visit without payment.
   *
   * @see UrlSid::MIXED_REPORT_VISIT_UNPAID
   */
  const VISIT_UNPAID = 23;
}

?>