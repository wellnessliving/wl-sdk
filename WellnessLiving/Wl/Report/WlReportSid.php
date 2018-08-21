<?php

namespace WellnessLiving\Wl\Report;

/**
 * A list of reports.
 */
abstract class WlReportSid
{
  /**
   * Report with list of requested appointments.
   *
   * @see RsAppointmentRequestReport
   */
  const APPOINTMENT_REQUEST = 54;

  /**
   * Report with list of requested appointments.
   * Short version for the dashboard.
   *
   * @see RsAppointmentRequestShortReport
   */
  const APPOINTMENT_REQUEST_SHORT = 55;

  /**
   * Report about revenue for application.
   */
  const BUSINESS_ACCOUNT_APPLICATION = 117;

  /**
   * Report with the list of 'Annual Application Fees' transactions.
   */
  const BUSINESS_ACCOUNT_APPLICATION_ANNUAL = 135;

  /**
   * Report with the list of customers lost during the period.
   */
  const BUSINESS_ACCOUNT_CHURN = 81;

  /**
   * The number of WellnessLiving customers.
   */
  const BUSINESS_ACCOUNT_CUSTOMER = 84;

  /**
   * The number of WellnessLiving customers during the selected period.
   */
  const BUSINESS_ACCOUNT_CUSTOMER_BEGIN = 85;

  /**
   * Report with the list of customers that has failed payments.
   */
  const BUSINESS_ACCOUNT_DEBT = 105;

  /**
   * Skipped customers (who skipped business subscription payment).
   */
  const BUSINESS_ACCOUNT_SKIP = 98;

  /**
   * Report with the list of 'Annual merchant processing fees' and 'Annual PCI fees' transactions.
   */
  const BUSINESS_ACCOUNT_TRANSACTION_ANNUAL = 100;

  /**
   * Report with the list of bonus transactions.
   */
  const BUSINESS_ACCOUNT_TRANSACTION_BONUS = 88;

  /**
   * Report with the list of 'Direct Connect Bonuses' transactions.
   */
  const BUSINESS_ACCOUNT_TRANSACTION_BONUS_DIRECT = 114;

  /**
   * Report with the list of failed transactions.
   */
  const BUSINESS_ACCOUNT_TRANSACTION_FAIL = 87;

  /**
   * Report with the list of 'Optimal Merchant' transactions.
   */
  const BUSINESS_ACCOUNT_TRANSACTION_MERCHANT_REVENUE = 95;

  /**
   * Report with the list of 'NMI' transactions.
   */
  const BUSINESS_ACCOUNT_TRANSACTION_NMI = 89;

  /**
   * Report with the list of all businesses.
   *
   * @see \Wl\Business\All\Report
   */
  const BUSINESS_ALL = 107;

  /**
   * Report with the list of 'MP Approval Fee' transactions.
   */
  const BUSINESS_CHARGE_APPROVAL = 90;

  /**
   * Report with the list of 'Credit Card Import Fees' transactions.
   */
  const BUSINESS_CHARGE_CCIMPORT = 91;

  /**
   * Report with the list of 'Early Termination' transactions.
   */
  const BUSINESS_CHARGE_EARLY = 104;

  /**
   * Report with the list of 'Hardware' transactions.
   */
  const BUSINESS_CHARGE_HARDWARE = 92;

  /**
   * Report with the list of 'OTHER' transactions.
   */
  const BUSINESS_CHARGE_OTHER = 96;

  /**
   * Report with the list of 'Set Up Fees' transactions.
   */
  const BUSINESS_CHARGE_SETUP = 93;

  /**
   * Report with list of customer leads.
   *
   * Referral and referrer businesses can be specified in this report.
   */
  const BUSINESS_LEAD = 125;

  /**
   * The number of unique merchant accounts that have processed more than $100 from the beginning.
   */
  const BUSINESS_MERCHANT_PROCESS = 82;

  /**
   * The number of unique merchant accounts that processed greater than $100 for the first time during the selected period.
   */
  const BUSINESS_MERCHANT_PROCESS_BEGIN = 83;

  /**
   * WellnessLiving Key Metrics.
   */
  const BUSINESS_METRIC = 94;

  /**
   * Report with amount that should be paid to partners for their referrals.
   *
   * @see \Wl\Business\Partner\Pay\Report
   */
  const BUSINESS_PARTNER_PAY = 126;

  /**
   * Report with list of all referrals of the given business.
   *
   * Includes information about all business that became our customers with special link of one of our existing
   * customer.
   *
   * @see \Wl\Business\Partner\Referral\Detail\Report
   */
  const BUSINESS_PARTNER_REFERRAL_DETAIL = 128;

  /**
   * Report with list of all businesses which gave us at least one new customer.
   *
   * @see \Wl\Business\Partner\Referral\Summary\Report
   */
  const BUSINESS_PARTNER_REFERRAL_SUMMARY = 129;

  /**
   * Report which allows to view list of classes that starts or ends within specific date range.
   *
   * @see \Wl\Classes\Schedule\Report
   */
  const CLASSES_SCHEDULE = 127;

  /**
   * History of a contacts with clients.
   */
  const CONTACT_MEMBER_HISTORY = 110;

  /**
   * List of all relatives in the business.
   *
   * @see \Wl\Family\All\Report
   */
  const FAMILY_ALL = 134;

  /**
   * List of all link that import could not process correctly even after max count of attempts.
   */
  const IMPORT_MIGRATION_COMPANY_URL_FAIL = 121;

  /**
   * Leads from lead capture forms.
   */
  const LEAD_LIST = 42;

  const LOCATION_MARKET = 35;

  /**
   * Log report of staff activity.
   */
  const LOG = 136;

  /**
   * List of clients with information about account state.
   */
  const LOGIN_ACCOUNT = 43;

  /**
   * List of clients with upcoming birthdays within a specified date range.
   */
  const LOGIN_BIRTHDAY = 75;

  /**
   * List of all Gift Cards purchased.
   */
  const LOGIN_COUPON = 76;

  const LOGIN_LIST = 22;
  const LOGIN_LIST_ALL = 33;

  /**
   * Report with conversions of Login Types.
   */
  const LOGIN_MEMBER_TYPE_HISTORY = 122;

  /**
   * Report "Client Data".
   */
  const LOGIN_PROFILE = 72;

  /**
   * Report about client's ranks.
   *
   * @see RsLoginRankReport
   */
  const LOGIN_RANK = 40;

  /**
   * Report with client's attendance history.
   *
   * @see RsLoginVisitReport
   */
  const LOGIN_VISIT = 52;

  /**
   * Count of sent mail and sms per business.
   */
  const MAIL_BUSINESS_LIST = 46;

  /**
   * Mail campaign details list report.
   */
  const MAIL_CAMPAIGN_DETAIL = 37;

  /**
   * Mail campaign history list report.
   */
  const MAIL_CAMPAIGN_LIST = 36;

  /**
   * Mail history list report.
   */
  const MAIL_HISTORY_LIST = 38;

  /**
   * List of clients' credit cards with expiration date.
   *
   * @see RsPayBankCardExpireReport
   */
  const PAY_BANK_CARD_EXPIRE = 44;

  /**
   * Total Sum Processed by all Businesses.
   */
  const PAY_METHOD_SYSTEM = 78;

  /**
   * A report to track history of refunds.
   *
   * @see RsPayTransactionListReport
   */
  const PAY_REFUND = 45;

  /**
   * A list of payment transactions that are in the NMI batches.
   */
  const PAY_TRANSACTION_BATCH = 77;

  /**
   * List of Cash Outs.
   */
  const PAY_TRANSACTION_CASH = 113;

  /**
   * If the report is opened in backend it shows a list of transactions for the current business.
   * If the report is opened outside backend it shows a list of all system transactions.
   *
   * This report is available for the staff and all administrators.
   */
  const PAY_TRANSACTION_LIST = 34;

  /**
   * If the report is opened in backend it shows a list of transactions for the current business.
   * If the report is opened outside backend it shows a list of all system transactions.
   *
   * This report is available for the staff and all administrators.
   */
  const PAY_TRANSACTION_SUM = 119;

  /**
   * Revenue Report for WellnessLiving Accounting.
   * Shows a list of all system transactions. Contains a list of special totals.
   *
   * This report is available only for administrators with special privilege.
   * See more: {@link \Wl\Pay\Transaction\System\All\Report::can()}.
   */
  const PAY_TRANSACTION_SYSTEM_ALL = 79;

  /**
   * If the report is opened in backend it shows a list of system transactions for the current business.
   * If the report is opened outside backend it shows a list of all system transactions.
   *
   * This report is available for all administrators.
   */
  const PAY_TRANSACTION_SYSTEM_LIST = 62;

  /**
   * Revenue Report for WellnessLiving Accounting.
   * Shows a list of refund and void system transactions.
   *
   * This report is available only for administrators with special privilege.
   * See more: {@link \Wl\Pay\Transaction\System\All\Report::can()}.
   */
  const PAY_TRANSACTION_SYSTEM_REFUND = 106;

  /**
   * If the report is opened in backend it shows a list of transactions for the one given user in the current business.
   * If the report is opened outside backend it shows a list of all system transactions for the given user.
   *
   * This report is available for the staff and all administrators.
   */
  const PAY_TRANSACTION_USER = 120;

  /**
   * Postcard history list report.
   *
   * This report contains all sent postcards in the business with information
   * about price of postcard, content and status.
   *
   * @see \Wl\Postcard\Sql
   */
  const POSTCARD_HISTORY = 103;

  /**
   * Shows list of memberships with negative balances.
   *
   * @see \Wl\Promotion\Pass\Membership\Report
   */
  const PROMOTION_MEMBERSHIP_NEGATIVE = 130;

  /**
   * Shows list of pricing options from that were imported mindbody and converted into memberships.
   *
   * Such pricing options are created as passes but they are marked as removed. During migration process all their names
   * are used to create connected memberships.
   *
   * @see \Wl\Promotion\Pass\Membership\Report
   */
  const PROMOTION_PASS_MEMBERSHIP = 108;

  /**
   * A list of payment transactions including scheduled transaction (recurrent payments for memberships and renewals of
   * promotions).
   *
   * @see RsPurchaseAutoListReport Report controller class.
   */
  const PURCHASE_AUTO_LIST = 60;

  /**
   * Report with list of sales per client.
   *
   * @see \Wl\Purchase\Client\Summary\Report
   */
  const PURCHASE_CLIENT_SUMMARY = 115;

  /**
   * Purchases that have been bought divided by payment methods.
   *
   * @link https://wellnessliving.atlassian.net/browse/WL-12593
   * @see \Wl\Purchase\Item\Accrual\CashReport
   */
  const PURCHASE_ITEM_ACCRUAL_CASH = 123;

  /**
   * Special quick purchases report for migration.
   *
   * @see \Wl\Purchase\Item\Accrual\MigrationReport
   */
  const PURCHASE_ITEM_ACCRUAL_MIGRATION = 132;

  /**
   * Summaries of the sales divided by days, months or years.
   *
   * @see \Wl\Purchase\Item\Accrual\SummaryReport
   */
  const PURCHASE_ITEM_ACCRUAL_SUMMARY = 133;

  const PURCHASE_ITEM_COUNT = 27;
  const PURCHASE_ITEM_COUNT_PRODUCT = 50;
  const PURCHASE_ITEM_COUNT_REVENUE = 51;

  const PURCHASE_ITEM_LIST = 26;

  /**
   * All sales report.
   *
   * @see RsPurchaseItemListProductReport
   */
  const PURCHASE_ITEM_LIST_PRODUCT = 48;
  const PURCHASE_ITEM_LIST_REVENUE = 49;

  /**
   * List of sale for the one user.
   */
  const PURCHASE_ITEM_LIST_USER = 118;

  /**
   * List of memberships.
   *
   * @see RsPurchaseMembershipListReport
   */
  const PURCHASE_MEMBERSHIP_LIST = 71;

  /**
   * Report with list of sales grouped by purchase options. Products and drop-ins are not included.
   *
   * @see \Wl\Purchase\Option\Summary\Report
   */
  const PURCHASE_OPTION_SUMMARY = 109;

  const PURCHASE_TAG_COUNT = 30;
  const PURCHASE_TAG_LIST = 31;

  /**
   * Report taxes of business in list format.
   *
   * @see RsPurchaseTaxCountReport
   */
  const PURCHASE_TAX_COUNT = 29;

  /**
   * Report taxes of business in chart format.
   *
   * @see RsPurchaseTaxListReport
   */
  const PURCHASE_TAX_LIST = 28;

  /**
   * List of sales with non zero tips.
   *
   * @see \Wl\Purchase\Tip\Report
   */
  const PURCHASE_TIP = 99;

  /**
   * Tips summary by staff.
   *
   * @see \Wl\Purchase\Tip\Sum\Report
   */
  const PURCHASE_TIP_SUM = 101;

  /**
   * Report with list of customers reviews. Available only in business backend and contains reviews on this business.
   *
   * @see RsReviewListReport
   */
  const REVIEW_LIST = 47;

  /**
   * Report with list of customers reviews. Available out of the backend and contains reviews on all businesses.
   *
   * @see RsReviewListReport
   */
  const REVIEW_ROOT = 53;

  /**
   * Report client's reward points.
   */
  const REWARD_BOARD = 56;

  const SCHEDULE_PROSPECT_COUNT = 9;
  const SCHEDULE_PROSPECT_LIST = 10;

  /**
   * Report about daily booking activity special for dashboard.
   *
   * @see RsScheduleProspectListTodayReport
   */
  const SCHEDULE_PROSPECT_LIST_TODAY = 39;

  const SCHEDULE_WAIT_LIST = 11;

  /**
   * Products, Purchase Options and Packages with Barcode.
   *
   * @see \Wl\Shop\Barcode\Report
   */
  const SHOP_BARCODE = 102;

  /**
   * Inventory On Hand.
   *
   * @see \Wl\Shop\Product\Report
   */
  const SHOP_PRODUCT = 80;

  /**
   * SMS history report.
   *
   * @see \Wl\Sms\History\Report
   */
  const SMS_HISTORY = 116;

  /**
   * Chart version of {@link RsReportSid::STAFF_PAY_LIST} report.
   *
   * @see RsReportSid::STAFF_PAY_LIST
   * @see RsStaffPayCountReport
   */
  const STAFF_PAY_COUNT = 24;

  /**
   * Report that contains detail information about staff payments for each option.
   *
   * @see RsStaffPayDetailReport
   */
  const STAFF_PAY_DETAIL = 25;

  /**
   * Report that contains general information about payments for each staff.
   *
   * @see RsReportSid::STAFF_PAY_COUNT
   * @see RsStaffPayListReport
   */
  const STAFF_PAY_LIST = 23;

  /**
   * Staff retention report collection.
   *
   * @see \Wl\Staff\Retention\StaffRetentionReportCollection
   */
  const STAFF_RETENTION = 137;

  /**
   * Staff Member New Clients Retention report.
   *
   * @see \Wl\Staff\Retention\Client\NewReport
   */
  const STAFF_RETENTION_CLIENT_NEW = 138;

  /**
   * Staff Member Repeat Clients Retention report.
   *
   * @see \Wl\Staff\Retention\Client\RepeatReport
   */
  const STAFF_RETENTION_CLIENT_REPEAT = 139;

  /**
   * Staff Member Client Retention Summary report.
   *
   * @see \Wl\Staff\Retention\Client\SummaryReport
   */
  const STAFF_RETENTION_CLIENT_SUMMARY = 140;

  /**
   * Report that contains detailed information about staff clock-in and clock-out, total load, hourly pay rates, average
   * hourly and additional payments and others for a day.
   *
   * @see \Wl\Staff\Time\Detail\Report
   */
  const STAFF_TIME_DETAIL = 111;

  /**
   * Report that contains summary information about staff clock-in and clock-out, total load, hourly pay rates, average
   * hourly and additional payments and others for a specified period.
   *
   * @see \Wl\Staff\Time\Detail\Report
   */
  const STAFF_TIME_SUMMARY = 112;

  /**
   * Staff task manager.
   */
  const TASK_MANAGER = 86;

  const TEST_CHART = 1;
  const TEST_GAUGE = 21;
  const TEST_TABLE = 5;

  /**
   * Controls visit appointment report in chart format.
   *
   * @see RsVisitAppointmentCountReport
   */
  const VISIT_APPOINTMENT_COUNT = 70;

  /**
   * Appointment details analysis report
   *
   * @see RsVisitAppointmentDetailReport
   */
  const VISIT_APPOINTMENT_DETAIL = 66;

  /**
   * Appointment details analysis report
   *
   * @see RsVisitAppointmentListReport
   */
  const VISIT_APPOINTMENT_LIST = 65;

  /**
   * List of visits in attended state.
   *
   * @see RsVisitAttendListReport
   */
  const VISIT_ATTEND_LIST = 64;

  const VISIT_BOOK_COUNT = 4;
  const VISIT_BOOK_LIST = 6;

  const VISIT_CLASS_AVERAGE_COUNT = 20;
  const VISIT_CLASS_AVERAGE_LIST = 18;
  const VISIT_CLASS_BUY = 32;

  /**
   * @see RsVisitClassBuyDetailReport
   */
  const VISIT_CLASS_BUY_DETAIL = 61;

  /**
   * Controls visit class report in chart format.
   *
   * @see RsVisitClassCountReport
   */
  const VISIT_CLASS_COUNT = 16;

  /**
   * Class analysis report.
   *
   * @see RsVisitClassDetailReport
   */
  const VISIT_CLASS_DETAIL = 59;

  /**
   * Simplified variation of report {@link RsVisitClassDetailReport}.
   *
   * @see RsVisitClassListReport
   */
  const VISIT_CLASS_LIST = 14;

  /**
   * Report with list of duplicated visits.
   *
   * @see \Wl\Visit\Duplicate\Report
   */
  const VISIT_DUPLICATE = 131;

  /**
   * Controls visit event report in chart format.
   *
   * @see RsVisitEventCountReport
   */
  const VISIT_EVENT_COUNT = 69;

  /**
   * Event details analysis report
   *
   * @see RsVisitEventDetailReport
   */
  const VISIT_EVENT_DETAIL = 68;

  /**
   * Event analysis report
   *
   * @see RsVisitEventListReport
   */
  const VISIT_EVENT_LIST = 67;

  const VISIT_FIRST_COUNT = 3;
  const VISIT_FIRST_LIST = 2;

  /**
   * Expired passes report in chart format.
   *
   * @see RsVisitLastCountReport
   */
  const VISIT_LAST_COUNT = 8;

  /**
   * Expired passes report in list format.
   *
   * @see RsVisitLastListReport
   */
  const VISIT_LAST_LIST = 7;
  const VISIT_LOGIN_LIST = 12;

  /**
   * Visits Remaining.
   */
  const VISIT_REMAIN_LIST = 63;

  /**
   * Detailed revenue by service.
   *
   * @see RsVisitRevenueDetailReport
   */
  const VISIT_REVENUE_DETAIL = 58;

  /**
   * Service revenue analysis.
   *
   * @see RsVisitRevenueListReport
   */
  const VISIT_REVENUE_LIST = 57;

  /**
   * Risky clients.
   *
   * @see RsVisitRiskReport
   */
  const VISIT_RISK = 41;

  const VISIT_STAFF_AVERAGE_COUNT = 19;
  const VISIT_STAFF_AVERAGE_LIST = 17;
  const VISIT_STAFF_COUNT = 15;
  const VISIT_STAFF_LIST = 13;

  /**
   * Detail list of unpaid visits.
   */
  const VISIT_UNPAID_DETAIL = 74;

  /**
   * List of unpaid visits.
   */
  const VISIT_UNPAID_LIST = 73;
}

?>