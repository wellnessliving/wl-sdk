<?php

namespace WellnessLiving\Wl\Import\Migration\Company\Url;

use WellnessLiving\Wl\Import\Wizard\ImportWizardSid;
use WellnessLiving\Wl\Member\Import\File\ImportFileSid;

/**
 * List of urls that can be downloaded to get more urls or data.
 *
 * If url starts with 'data', means that this page does not include new urls.
 * If url starts with 'list', means that this is a list of other urls.
 * If url starts with 'mixed', means that this is a page with new urls and data.
 *
 * Last used ID: 68.
 */
class UrlSid
{
  /**
   * Page with information about one class.
   */
  const DATA_CLASS_EDIT = 6;

  /**
   * Page with details about class schedule.
   */
  const DATA_CLASS_SCHEDULE_EDIT = 8;

  /**
   * List of payments from the past for one contract.
   */
  const DATA_CLIENT_CONTRACT_HISTORY = 23;

  /**
   * Page with information about all Gift Cards in the mindbody business.
   *
   * @link https://clients.mindbodyonline.com/productmanagement/giftcardsummary
   * @see ImportWizardSid::COUPON
   */
  const DATA_COUPON = 54;

  /**
   * Page with information about particular Discount Code.
   *
   * @link https://clients.mindbodyonline.com/asp/adm/adm_tlbx_promotion.asp
   * @see ImportWizardSid::DISCOUNT_CODE
   */
  const DATA_DISCOUNT_CODE_EDIT = 56;

  /**
   * Page with information about one enrollment.
   */
  const DATA_EVENT_EDIT = 11;

  /**
   * Page with information about one enrollment schedule.
   */
  const DATA_EVENT_SCHEDULE = 12;

  /**
   * Information lead members from curves.
   */
  const DATA_LEAD_REPORT = 68;

  /**
   * Form to edit a Login Type.
   *
   * Page should be submitted with POST request.
   */
  const DATA_LOGIN_TYPE_EDIT = 28;

  /**
   * Form to edit a membership.
   *
   * This is the same form as package edit form, but with only one item.
   *
   * @link https://clients.mindbodyonline.com/Contract/?id=276
   */
  const DATA_MEMBERSHIP_EDIT = 18;

  /**
   * Information about client notes.
   */
  const DATA_MEMBER_COMMENT = 63;

  /**
   * Measurements information for member's goal.
   */
  const DATA_MEMBER_MEASUREMENT_GOAL = 61;

  /**
   * Measurements information for member's history.
   */
  const DATA_MEMBER_MEASUREMENT_HISTORY = 62;

  /**
   * Information about one of the members in the business.
   */
  const DATA_MEMBER_PROFILE = 59;

  /**
   * List of pricing option of the member in the business.
   */
  const DATA_MEMBER_PROMOTION_LIST = 60;

  /**
   * Reimbursement history.
   */
  const DATA_MEMBER_REIMBURSEMENT = 67;

  /**
   * List of sales of the member in the business.
   */
  const DATA_MEMBER_SALES_LIST = 64;

  /**
   * Form to edit a membership.
   *
   * This is the same form as package edit form, but with more than one item.
   *
   * @link https://clients.mindbodyonline.com/Contract/?id=276
   */
  const DATA_PACKAGE_EDIT = 21;

  /**
   * Form with pay rate information.
   *
   * @see ImportFileSid::BALANCE
   */
  const DATA_PAY_RATE = 55;

  /**
   * Page with Booking Policy information.
   */
  const DATA_POLICY = 25;

  /**
   * Page with information about one product item.
   *
   * @link https://clients.mindbodyonline.com/productmanagement/editproduct?descriptionId=
   */
  const DATA_PRODUCT_EDIT = 53;

  /**
   * Page with full information about promotion.
   */
  const DATA_PROMOTION_EDIT = 15;

  /**
   * Report with information about Account Balances.
   *
   * @see ImportFileSid::BALANCE
   */
  const DATA_REPORT_BALANCE = 32;

  /**
   * Report with information about Product Inventories.
   *
   * @see ImportFileSid::INVENTORY
   */
  const DATA_REPORT_INVENTORY = 46;

  /**
   * Page with information about one appointment type.
   */
  const DATA_SERVICE_EDIT = 9;

  /**
   * Page with list of staff connected to the appointment type.
   */
  const DATA_SERVICE_STAFF = 10;

  /**
   * Page with information about staff.
   */
  const DATA_STAFF_EDIT = 2;

  /**
   * Page with information about staff working hours.
   */
  const DATA_STAFF_WORK = 26;

  /**
   * Information about appointment visits for members from curves.
   */
  const DATA_VISIT_APPOINTMENT = 65;

  /**
   * Information about gym visits for members from curves.
   */
  const DATA_VISIT_GYM = 66;

  /**
   * Page with Liability Waiver information.
   */
  const DATA_WAIVER = 24;

  /**
   * Page with list the schedule of the class.
   */
  const LIST_CLASS_SCHEDULE = 7;

  /**
   * Page with information about list of Discount Codes.
   *
   * @link https://clients.mindbodyonline.com/asp/adm/adm_tlbx_promotion.asp
   *
   * @see ImportWizardSid::DISCOUNT_CODE
   */
  const LIST_DISCOUNT_CODE_LIST = 57;

  /**
   * Page with list of Login Types.
   */
  const LIST_LOGIN_TYPE_LIST = 27;

  /**
   * List with all memberships divided on pages. Count of the pages should be taken from this page.
   *
   * @link https://clients.mindbodyonline.com/paginatedcontracts/index
   */
  const LIST_MEMBERSHIP_INDEX = 16;

  /**
   * List with all packages divided on pages. Count of the pages should be taken from this page.
   *
   * @link https://clients.mindbodyonline.com/paginatedcontracts/index
   */
  const LIST_PACKAGE_INDEX = 19;

  /**
   * One page with the list of staff.
   */
  const LIST_STAFF_LIST = 1;

  /**
   * One page with the list of classes and name of "Book Now" tabs.
   */
  const MIXED_CLASS_LIST = 3;

  /**
   * Page with information about one class.
   */
  const MIXED_CLIENT_PURCHASE = 22;

  /**
   * One page with the list of enrollments and events.
   */
  const MIXED_EVENT_LIST = 5;

  /**
   * One page with memberships.
   * Page should be submitted with POST request.
   *
   * @link https://clients.mindbodyonline.com/paginatedcontracts/index
   */
  const MIXED_MEMBERSHIP_LIST = 17;

  /**
   * List of members in the business.
   */
  const MIXED_MEMBER_LIST = 58;

  /**
   * One page with packages.
   * Page should be submitted with POST request.
   *
   * @link https://clients.mindbodyonline.com/paginatedcontracts/index
   */
  const MIXED_PACKAGE_LIST = 20;

  /**
   * Report with information about Product Inventories.
   *
   * @link https://clients.mindbodyonline.com/asp/adm/adm_tlbx_prod.asp
   *
   * @see ImportFileSid::INVENTORY
   */
  const MIXED_PRODUCT_LIST = 52;

  /**
   * List with all pricing options. Links to all pricing options can be got here.
   */
  const MIXED_PROMOTION_INDEX = 13;

  /**
   * One page with the list of pricing options. Links to the pricing options and status of the options should be taken here.
   *
   * @link https://clients.mindbodyonline.com/paginatedcontracts/index
   */
  const MIXED_PROMOTION_LIST = 14;

  /**
   * Report with information about Accrual Sales.
   *
   * @see ImportFileSid::ACCRUAL
   */
  const MIXED_REPORT_ACCRUAL = 34;

  /**
   * Report with information about Client Arrivals. (Gym Visits).
   *
   * @see ImportFileSid::ARRIVAL
   */
  const MIXED_REPORT_ARRIVAL = 51;

  /**
   * Report with information about Attendance With Revenue.
   *
   * @see ImportFileSid::ATTENDANCE_REVENUE
   */
  const MIXED_REPORT_ATTENDANCE_REVENUE = 47;

  /**
   * Report with information about assigned Gift cards.
   *
   * @see ImportFileSid::COUPON_ASSIGN
   */
  const MIXED_REPORT_COUPON_ASSIGN = 41;

  /**
   * Report with information about prepaid Gift cards.
   *
   * @see ImportFileSid::COUPON_PREPAID
   */
  const MIXED_REPORT_COUPON_PREPAID = 42;

  /**
   * Report with information about redeemed Gift cards.
   *
   * @see ImportFileSid::COUPON_REDEEM
   */
  const MIXED_REPORT_COUPON_REDEEM = 43;

  /**
   * Report with information about purchase options with expiration.
   *
   * @see ImportFileSid::EXPIRE
   */
  const MIXED_REPORT_EXPIRE = 36;

  /**
   * Report with client data information for clients that paid by other client.
   *
   * @see ImportFileSid::FAMILY_DEPENDENT
   */
  const MIXED_REPORT_FAMILY_DEPENDENT = 35;

  /**
   * Report with client data information for clients that pays for other clients.
   *
   * @see ImportFileSid::FAMILY_PAYER
   */
  const MIXED_REPORT_FAMILY_PAYER = 38;

  /**
   * Report with client data information for male clients.
   *
   * @see ImportFileSid::GENDER
   */
  const MIXED_REPORT_GENDER = 39;

  /**
   * Report with client data information for inactive clients.
   *
   * @see ImportFileSid::INACTIVE
   */
  const MIXED_REPORT_INACTIVE = 37;

  /**
   * Report with client data information for all clients.
   *
   * @see ImportFileSid::MAIL
   */
  const MIXED_REPORT_MAIL = 29;

  /**
   * Report with information about expiration for memberships.
   *
   * @see ImportFileSid::MEMBERSHIP
   */
  const MIXED_REPORT_MEMBERSHIP = 44;

  /**
   * Report with information about Auto-pays.
   *
   * @see ImportFileSid::PAYMENT
   */
  const MIXED_REPORT_PAYMENT = 33;

  /**
   * Report with information about Sales.
   *
   * @see ImportFileSid::SALE
   */
  const MIXED_REPORT_SALE = 30;

  /**
   * Report with information about Schedule at a Glance for Appointments only.
   *
   * @see ImportFileSid::SCHEDULE_APPOINTMENT
   */
  const MIXED_REPORT_SCHEDULE_APPOINTMENT = 48;

  /**
   * Report with information about Schedule at a Glance for Classes/Enrollments only.
   *
   * @see ImportFileSid::SCHEDULE_CLASS
   */
  const MIXED_REPORT_SCHEDULE_CLASS = 49;

  /**
   * Report with client data information for clients that share pricing options.
   *
   * @see ImportFileSid::SHARE
   */
  const MIXED_REPORT_SHARE = 45;

  /**
   * Report with client data information for clients that are not subscribed to get emails.
   *
   * @see ImportFileSid::SUBSCRIPTION
   */
  const MIXED_REPORT_SUBSCRIPTION = 40;

  /**
   * Report with information about remaining visits for purchase options.
   *
   * @see ImportFileSid::VISIT
   */
  const MIXED_REPORT_VISIT = 31;

  /**
   * Report with information about remaining visits for purchase options.
   *
   * @see ImportFileSid::VISIT_UNPAID
   */
  const MIXED_REPORT_VISIT_UNPAID = 50;

  /**
   * One page with the list of services and service categories.
   */
  const MIXED_SERVICE_LIST = 4;
}

?>