<?php

namespace WellnessLiving\Wl\Report;

/**
 * A list of reports.
 *
 * Do not add new reports here. Use New Report Generation instead.
 *
 * Last used ID: 267. -- See comments above.
 */
abstract class WlReportSid
{
  /**
   * Report with list of canceled appointments.
   */
  const APPOINTMENT_CANCEL = 163;

  /**
   * Report with list of requested appointments.
   */
  const APPOINTMENT_REQUEST = 54;

  /**
   * Report with list of requested appointments.
   * Short version for the dashboard.
   */
  const APPOINTMENT_REQUEST_SHORT = 55;

  /**
   * Booking metric.
   */
  const BOOK_METRIC_CHART = 204;

  /**
   * Report about revenue for application.
   */
  const BUSINESS_ACCOUNT_APPLICATION = 117;

  /**
   * Report with the list of 'Annual Application Fees' transactions.
   */
  const BUSINESS_ACCOUNT_APPLICATION_ANNUAL = 135;

  /**
   * Report about first paid application subscription.
   */
  const BUSINESS_ACCOUNT_APPLICATION_NEW = 221;

  /**
   * Report with the list of customers lost during the period.
   */
  const BUSINESS_ACCOUNT_CHURN = 81;

  /**/
  const BUSINESS_ACCOUNT_COUPON = 237;

  /**
   * The number of WellnessLiving customers.
   */
  const BUSINESS_ACCOUNT_CUSTOMER = 84;

  /**
   * The number of WellnessLiving customers during the selected period.
   */
  const BUSINESS_ACCOUNT_CUSTOMER_BEGIN = 85;

  /**
   * The list of all locations from WellnessLiving customers during the selected period including
   * locations, which are not customers and businesses, which are in a migration process.
   */
  const BUSINESS_ACCOUNT_CUSTOMER_LOCATION = 244;

  /**
   * Report with the list of customers that has failed payments.
   */
  const BUSINESS_ACCOUNT_DEBT = 105;

  /**
   * Report with list of changes to business account settings.
   */
  const BUSINESS_ACCOUNT_LOG = 248;

  /**
   * Report with list of changes to business account settings.
   */
  const BUSINESS_ACCOUNT_LOG_ALL = 267;

  /**
   * Report with the list of all payments from businesses to Wellnessliving Inc.
   */
  const BUSINESS_ACCOUNT_REVENUE = 227;

  /**
   * Report with the list of all subscription payments.
   */
  const BUSINESS_ACCOUNT_REVENUE_SUBSCRIPTION = 222;

  /**
   * Report with taxes of all payments from businesses.
   */
  const BUSINESS_ACCOUNT_REVENUE_TAX = 236;

  /**
   * Report with list of previous payments for business account.
   */
  const BUSINESS_ACCOUNT_SCHEDULE_PREVIOUS = 251;

  /**
   * Report with list of future payments for business account.
   */
  const BUSINESS_ACCOUNT_SCHEDULE_UPCOMING = 252;

  /**
   * Skipped customers (who skipped business subscription payment).
   */
  const BUSINESS_ACCOUNT_SKIP = 98;

  /**
   * Report with business subscription information.
   */
  const BUSINESS_ACCOUNT_SUBSCRIPTION = 254;

  /**
   * Report with business subscription information for churned businesses.
   */
  const BUSINESS_ACCOUNT_SUBSCRIPTION_CHURN = 256;

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
   */
  const BUSINESS_ALL = 107;

  /**
   * Achieve clients metric.
   */
  const BUSINESS_APPLICATION_METRIC_CHART = 208;

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
   * Report with list of customers' churn status history.
   */
  const BUSINESS_CUSTOMER_STATUS_HISTORY = 226;

  /**
   * Report with list of customers' statuses.
   */
  const BUSINESS_CUSTOMER_STATUS_LOCATION = 225;

  /**
   * List of franchisee business hours.
   *
   * @title Franchise Business Hours
   * @deprecated Report is refactored into new core.
   */
  const BUSINESS_FRANCHISE_HOURS = 247;

  /**
   * List of franchisee locations.
   *
   * @title Franchise Locations
   */
  const BUSINESS_FRANCHISE_LOCATION = 141;

  /**
   * List of franchise region.
   *
   * @title Franchise Regions
   */
  const BUSINESS_FRANCHISE_REGION_LIST = 142;

  /**
   * Saba files report.
   *
   * @title SABA Files
   */
  const BUSINESS_FRANCHISE_REPORT_CURVES_SABA = 219;

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
   * Report with list of business having active Sms subscription.
   */
  const BUSINESS_MESSAGE = 260;

  /**
   * WellnessLiving Key Metrics.
   */
  const BUSINESS_METRIC = 94;

  /**
   * Report with amount that should be paid to partners for their referrals.
   */
  const BUSINESS_PARTNER_PAY = 126;

  /**
   * Report with list of all referrals of the given business.
   *
   * Includes information about all business that became our customers with special link of one of our existing
   * customer.
   */
  const BUSINESS_PARTNER_REFERRAL_DETAIL = 128;

  /**
   * Report with list of all businesses which gave us at least one new customer.
   */
  const BUSINESS_PARTNER_REFERRAL_SUMMARY = 129;

  /**
   * Report which allows to view list of classes that starts or ends within specific date range.
   */
  const CLASSES_SCHEDULE = 127;

  /**
   * Class capacity utilization metric.
   *
   * @title Class Capacity Utilization
   */
  const CLASSES_UTILIZATION_CHART = 205;

  /**
   * History of a contacts with clients.
   */
  const CONTACT_MEMBER_HISTORY = 110;

  /**
   * History of a contacts for one certain client.
   */
  const CONTACT_MEMBER_HISTORY_USER = 152;

  /**
   * Event capacity utilization metric.
   *
   * @title Event Capacity Utilization
   */
  const EVENT_UTILIZATION_CHART = 215;

  /**
   * List of all relatives in the business.
   */
  const FAMILY_ALL = 134;

  /**
   * Feedback report.
   */
  const FEEDBACK_DIALOG = 229;

  /**
   * Franchise membership transfer history report.
   *
   * @title Membership Transfer History
   */
  const FRANCHISE_TRANSFER_MEMBERSHIP_HISTORY_LIST = 159;

  /**
   * Franchise membership requested transfers report.
   *
   * @title Membership Requested Transfers
   */
  const FRANCHISE_TRANSFER_MEMBERSHIP_REQUESTED_LIST = 160;

  /**
   * Report to view list of locations with gympass integration status.
   *
   * @title Gympass Location Integration
   */
  const GYMPASS_LOCATION = 266;

  /**
   * List of all link that import could not process correctly even after max count of attempts.
   */
  const IMPORT_MIGRATION_COMPANY_URL_FAIL = 121;

  /**
   * A list of imported visits.
   */
  const IMPORT_MIGRATION_COMPANY_VISIT_LIST = 220;

  /**
   * "Wellness Program" report on user profile.
   *
   * @title Wellness Program
   */
  const INSURANCE_PROFILE_PROGRAM = 181;

  /**
   * Detail wellness program report on user profile.
   *
   * @title Wellness Program Details
   */
  const INSURANCE_PROFILE_PROGRAM_DETAIL = 184;

  /**
   * List of clients, which got reimbursement.
   */
  const INSURANCE_REIMBURSEMENT_DETAIL = 183;

  /**
   * List of clients, which got reimbursement.
   */
  const INSURANCE_REIMBURSEMENT_FRANCHISE_DETAIL = 217;

  /**
   * Total amounts of reimbursement by partner.
   */
  const INSURANCE_REIMBURSEMENT_FRANCHISE_SUMMARY = 218;

  /**
   * List of partner, which support reimbursement export and import.
   */
  const INSURANCE_REIMBURSEMENT_REBATE_FILE = 233;

  /**
   * Total amounts of reimbursement by partner.
   */
  const INSURANCE_REIMBURSEMENT_SUMMARY = 182;

  /**
   * Isaac control report.
   */
  const ISAAC_CONTROL = 241;

  /**
   * Franchise leads from lead capture forms. Chart representation.
   *
   * @title Leads by Location
   * @deprecated Report is refactored into new core.
   */
  const LEAD_FRANCHISE_REPORT_CHART = 173;

  /**
   * Franchise leads from lead capture forms. Table representation.
   *
   * @title Leads by Location
   * @deprecated Report is refactored into new core.
   */
  const LEAD_FRANCHISE_REPORT_LIST = 167;

  /**
   * Franchise leads from lead capture forms. Year-by-year chart representation.
   *
   * @title Leads by Location
   */
  const LEAD_FRANCHISE_REPORT_YOY = 176;

  /**
   * Leads from lead capture forms.
   */
  const LEAD_LIST = 42;

  /**
   * New leads metric.
   *
   * @title New Leads
   */
  const LEAD_NEWEST_METRIC_CHART = 200;

  /**
   * New leads YOY metric.
   *
   * @title New Leads YOY
   */
  const LEAD_NEWEST_METRIC_YOY = 203;

  /**
   * Leads from lead capture forms.
   */
  const LEAD_REPORT_CHART = 166;

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
   * For the past 4 years, shows the number of clients whose
   * status changed from "Prospect" to any other in each year
   *
   * @title New Clients
   */
  const LOGIN_CLIENT_NEWEST_METRIC_CHART = 199;

  /**
   * List of all Gift Cards purchased.
   */
  const LOGIN_COUPON = 76;

  /**
   * Detail franchise client report table.
   *
   * @title Corporate Client Details
   * @deprecated Report is refactored into new core.
   */
  const LOGIN_FRANCHISE_DETAIL_LIST = 156;

  /**
   * Franchise client status report table.
   *
   * @title Corporate Status Report
   * @deprecated Report is refactored into new core.
   */
  const LOGIN_FRANCHISE_STATUS_LIST = 162;

  /**
   * Login list.
   */
  const LOGIN_LIST = 22;

  /**
   * Login list all.
   */
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
   */
  const LOGIN_RANK = 40;

  /**
   * List of clients that are at churn risk according to isaac prediction.
   *
   * @title Isaac Churn Risk
   */
  const LOGIN_RISK = 261;

  /**
   * Report with client's attendance history.
   *
   * @deprecated Has been replaced with {@link WlReportSid::PROFILE_ATTENDANCE_SCHEDULE_HISTORY}. Kept only to retain
   * compatibility with old saved reports.
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
   * Member progress body fat report in chart view.
   *
   * @title Member Body Fat progress.
   */
  const MEMBER_PROGRESS_LOG_BODY_FAT = 149;

  /**
   * Member progress report collection for charts.
   *
   * @title Member Transformation Log chart collection.
   */
  const MEMBER_PROGRESS_LOG_CHART = 146;

  /**
   * Report with list of progress log per client.
   *
   * @title Transformation Log
   */
  const MEMBER_PROGRESS_LOG_CLIENT = 150;

  /**
   * Member progress main report in table view.
   *
   * @title Member Transformation Log.
   */
  const MEMBER_PROGRESS_LOG_LIST = 147;

  /**
   * Member progress report collection for table.
   *
   * @title Member Transformation Log report collection.
   */
  const MEMBER_PROGRESS_LOG_TABLE = 145;

  /**
   * Member progress weight report in chart view.
   *
   * @title Member Weight progress.
   */
  const MEMBER_PROGRESS_LOG_WEIGHT = 148;

  /**
   * List of clients' credit cards with expiration date.
   */
  const PAY_BANK_CARD_EXPIRE = 44;

  /**
   * Total Sum Processed by all Businesses.
   */
  const PAY_METHOD_BUSINESS = 235;

  /**
   * Total Sum Processed from all Businesses to wellnessliving.
   */
  const PAY_METHOD_SYSTEM = 78;

  /**
   * Processing per Business with Login Date.
   */
  const PAY_METHOD_SYSTEM_LOGIN = 242;

  /**
   * A report to track history of refunds.
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
   */
  const PAY_TRANSACTION_SYSTEM_REFUND = 106;

  /**
   * Sum of all transactions from businesses to system merchants.
   *
   * This report is available only for administrators with special privilege.
   */
  const PAY_TRANSACTION_SYSTEM_SUMMARY = 143;

  /**
   * If the report is opened in backend it shows a list of transactions for the one given user in the current business.
   * If the report is opened outside backend it shows a list of all system transactions for the given user.
   *
   * This report is available for the staff and all administrators.
   */
  const PAY_TRANSACTION_USER = 120;

  /**
   * This report is available for user in client app.
   */
  const PAY_TRANSACTION_USER_CLIENT = 253;

  /**
   * Postcard history list report.
   *
   * This report contains all sent postcards in the business with information
   * about price of postcard, content and status.
   */
  const POSTCARD_HISTORY = 103;

  /**
   * Attendance history report in frontend.
   */
  const PROFILE_ATTENDANCE_SCHEDULE_FRONTEND_HISTORY = 180;

  /**
   * Upcoming schedule report in frontend.
   */
  const PROFILE_ATTENDANCE_SCHEDULE_FRONTEND_UPCOMING = 179;

  /**
   * Attendance history report.
   */
  const PROFILE_ATTENDANCE_SCHEDULE_HISTORY = 178;

  /**
   * Attendance history report for given login promotion.
   */
  const PROFILE_ATTENDANCE_SCHEDULE_LOGIN_PROMOTION_HISTORY = 262;

  /**
   * Upcoming schedule report for given login promotion.
   */
  const PROFILE_ATTENDANCE_SCHEDULE_LOGIN_PROMOTION_UPCOMING = 263;

  /**
   * Upcoming schedule report.
   */
  const PROFILE_ATTENDANCE_SCHEDULE_UPCOMING = 177;

  /**
   * Contract list report in client profile.
   */
  const PROFILE_CONTRACT_LIST = 255;

  /**
   * Report to view list of responses for specific user in client profile.
   */
  const PROFILE_FORM_RESPONSE = 265;

  /**
   * Gift Card report in client profile.
   */
  const PROFILE_PURCHASE_REPORT_COUPON = 193;

  /**
   * Session Pass report in client profile.
   */
  const PROFILE_PURCHASE_REPORT_EVENT = 192;

  /**
   * Groupon report in client profile.
   */
  const PROFILE_PURCHASE_REPORT_GROUPON = 213;

  /**
   * Membership report in client profile.
   */
  const PROFILE_PURCHASE_REPORT_MEMBERSHIP = 188;

  /**
   * Package report in client profile.
   */
  const PROFILE_PURCHASE_REPORT_PACKAGE = 189;

  /**
   * Duration Pass report in client profile.
   */
  const PROFILE_PURCHASE_REPORT_SESSION_DURATION = 190;

  /**
   * Session Pass report in client profile.
   */
  const PROFILE_PURCHASE_REPORT_SESSION_PASS = 191;

  /**
   * Single Session report in client profile.
   */
  const PROFILE_PURCHASE_REPORT_SESSION_SINGLE = 194;

  /**
   * Intro offers metric.
   */
  const PROMOTION_INTRODUCTORY_METRIC_CHART = 206;

  /**
   * Shows list of memberships with negative balances.
   */
  const PROMOTION_MEMBERSHIP_NEGATIVE = 130;

  /**
   * Shows list of pricing options from that were imported mindbody and converted into memberships.
   *
   * Such pricing options are created as passes but they are marked as removed. During migration process all their names
   * are used to create connected memberships.
   */
  const PROMOTION_PASS_MEMBERSHIP = 108;

  /**
   * A list of payment transactions including scheduled transaction (recurrent payments for memberships and renewals of
   * promotions).
   */
  const PURCHASE_AUTO_LIST = 60;

  /**
   * Report with list of sales per client.
   */
  const PURCHASE_CLIENT_SUMMARY = 115;

  /**
   * Summary franchise memberships report (chart view).
   *
   * @title Memberships by Location
   * @deprecated Report is refactored into new core.
   */
  const PURCHASE_FRANCHISE_MEMBERSHIP_CHART = 175;

  /**
   * Summary franchise memberships report.
   *
   * @title Enterprise Memberships by Location Details
   * @deprecated Report is refactored into new core.
   * @link https://wellnessliving.atlassian.net/browse/WL-46987
   */
  const PURCHASE_FRANCHISE_MEMBERSHIP_DETAIL = 257;

  /**
   * Summary franchise memberships report.
   *
   * @title Memberships by Location
   * @deprecated Report is refactored into new core.
   */
  const PURCHASE_FRANCHISE_MEMBERSHIP_LIST = 174;

  /**
   * Purchases that have been bought divided by payment methods.
   *
   * @link https://wellnessliving.atlassian.net/browse/WL-12593
   */
  const PURCHASE_ITEM_ACCRUAL_CASH = 123;

  /**
   * Purchases that have been bought divided by time.
   *
   * @title All Sales
   */
  const PURCHASE_ITEM_ACCRUAL_CASH_CHART = 171;

  /**
   * Special quick purchases report for migration.
   */
  const PURCHASE_ITEM_ACCRUAL_MIGRATION = 132;

  /**
   * Summaries of the sales divided by days, months or years.
   */
  const PURCHASE_ITEM_ACCRUAL_SUMMARY = 133;

  /**
   * Purchase item count.
   */
  const PURCHASE_ITEM_COUNT = 27;

  /**
   * Purchase item count product.
   */
  const PURCHASE_ITEM_COUNT_PRODUCT = 50;

  /**
   * Purchase item count revenue.
   *
   * @deprecated Report is refactored into new core.
   */
  const PURCHASE_ITEM_COUNT_REVENUE = 51;

  /**
   * Purchase item list.
   */
  const PURCHASE_ITEM_LIST = 26;

  /**
   * All sales report.
   */
  const PURCHASE_ITEM_LIST_PRODUCT = 48;

  /**
   * Sales With Revenue Categories report.
   *
   * @deprecated Report is refactored into new core.
   */
  const PURCHASE_ITEM_LIST_REVENUE = 49;

  /**
   * List of sale for the one user.
   */
  const PURCHASE_ITEM_LIST_USER = 118;

  /**
   * List of memberships in chart format.
   *
   * @title Memberships
   */
  const PURCHASE_MEMBERSHIP_CHART = 165;

  /**
   * List of memberships.
   */
  const PURCHASE_MEMBERSHIP_LIST = 71;

  /**
   * Lost members metric.
   *
   * @title Lost Members
   */
  const PURCHASE_MEMBERSHIP_METRIC_CHART = 198;

  /**
   * Recurring revenue metric.
   *
   * @title Recurring Revenue
   */
  const PURCHASE_MEMBERSHIP_RECURRING_METRIC_CHART = 202;

  /**
   * All sales metric.
   *
   * @title All Sales.
   */
  const PURCHASE_METRIC_CHART = 195;

  /**
   * All sales YOY metric.
   *
   * @title All Sales YOY
   */
  const PURCHASE_METRIC_YOY = 201;

  /**
   * Report with list of sales grouped by purchase options. Products and drop-ins are not included.
   */
  const PURCHASE_OPTION_SUMMARY = 109;

  /**
   * Purchase tag count.
   *
   * @deprecated Report is refactored into new core.
   */
  const PURCHASE_TAG_COUNT = 30;

  /**
   * Purchase tag list.
   *
   * @deprecated Report is refactored into new core.
   */
  const PURCHASE_TAG_LIST = 31;

  /**
   * Report taxes of business in list format.
   */
  const PURCHASE_TAX_COUNT = 29;

  /**
   * Report taxes of business in chart format.
   */
  const PURCHASE_TAX_LIST = 28;

  /**
   * List of sales with non zero tips.
   */
  const PURCHASE_TIP = 99;

  /**
   * Tips summary by staff.
   */
  const PURCHASE_TIP_SUM = 101;

  /**
   * Report to view list of responses for specific quiz.
   */
  const QUIZ_RESPONSE = 264;

  /**
   * Report with list of generated reports.
   */
  const REPORT_BACKGROUND_GENERATE = 246;

  /**
   * Report with list of customers reviews. Available only in business backend and contains reviews on this business.
   */
  const REVIEW_LIST = 47;

  /**
   * Report with list of customers reviews. Available out of the backend and contains reviews on all businesses.
   */
  const REVIEW_ROOT = 53;

  /**
   * Report client's reward points.
   */
  const REWARD_BOARD = 56;

  /**
   * Schedule prospect count.
   */
  const SCHEDULE_PROSPECT_COUNT = 9;

  /**
   * Daily Tracker.
   */
  const SCHEDULE_PROSPECT_LIST = 10;

  /**
   * Report about daily booking activity special for dashboard.
   */
  const SCHEDULE_PROSPECT_LIST_TODAY = 39;

  /**
   * Schedule wait list.
   */
  const SCHEDULE_WAIT_LIST = 11;

  /**
   * Products, Purchase Options and Packages with Barcode.
   */
  const SHOP_BARCODE = 102;

  /**
   * Inventory On Hand.
   */
  const SHOP_PRODUCT = 80;

  /**
   * Physical Inventory Count.
   */
  const SHOP_PRODUCT_OPTION_INVENTORY_COUNT = 243;

  /**
   * SMS history report.
   */
  const SMS_HISTORY = 116;

  /**
   * Social sharing details.
   *
   * @title Social sharing details.
   */
  const SOCIAL_SHARE_DETAILS_LIST = 212;

  /**
   * All social sharing.
   *
   * @title All social sharing.
   */
  const SOCIAL_SHARE_METRIC_CHART = 197;

  /**
   * Social sharing summary by user.
   *
   * @title Social sharing summary by user.
   */
  const SOCIAL_SHARE_SUMMARY_LIST = 214;

  /**
   * Chart version of {@link WlReportSid::STAFF_PAY_LIST} report.
   *
   * @see WlReportSid::STAFF_PAY_LIST
   */
  const STAFF_PAY_COUNT = 24;

  /**
   * Report that contains detail information about staff payments for each option.
   */
  const STAFF_PAY_DETAIL = 25;

  /**
   * Report that contains general information about payments for each staff.
   *
   * @see WlReportSid::STAFF_PAY_COUNT
   */
  const STAFF_PAY_LIST = 23;

  /**
   * Staff retention report collection.
   */
  const STAFF_RETENTION = 137;

  /**
   * Staff Member New Clients Retention report.
   */
  const STAFF_RETENTION_CLIENT_NEW = 138;

  /**
   * Staff Member Repeat Clients Retention report.
   */
  const STAFF_RETENTION_CLIENT_REPEAT = 139;

  /**
   * Staff Member Client Retention Summary report.
   */
  const STAFF_RETENTION_CLIENT_SUMMARY = 140;

  /**
   * Report that contains detailed information about staff clock-in and clock-out, total load, hourly pay rates, average
   * hourly and additional payments and others for a day.
   */
  const STAFF_TIME_DETAIL = 111;

  /**
   * Report that contains summary information about staff clock-in and clock-out, total load, hourly pay rates, average
   * hourly and additional payments and others for a specified period.
   */
  const STAFF_TIME_SUMMARY = 112;

  /**
   * Staff task manager.
   */
  const TASK_MANAGER = 86;

  /**
   * Report that contains regional taxes.
   */
  const TAX_REGION = 234;

  /**
   * Report with potential client duplicates.
   */
  const USER_DUPLICATE = 185;

  /**
   * Report with all businesses, which has videos and count of videos and total size of the videos.
   */
  const VIDEO_BUSINESS_ALL = 239;

  /**
   * Report with all businesses, which has videos and count of videos and total size of the videos
   * filtered with upload date.
   */
  const VIDEO_BUSINESS_UPLOAD = 240;

  /**
   * Report with all business videos and basic information about these videos.
   */
  const VIDEO_DETAIL = 238;

  /**
   * Report with all business videos and detail information about these videos.
   */
  const VIDEO_SUMMARY = 250;

  /**
   * Report with all views of videos and information about a viewers.
   */
  const VIDEO_VIEW_DETAIL = 249;

  /**
   * Report with list of canceled appointments.
   */
  const VIRTUAL_ZOOM_USER_HISTORY = 245;

  /**
   * Controls visit appointment report in chart format.
   */
  const VISIT_APPOINTMENT_COUNT = 70;

  /**
   * Appointment details analysis report
   */
  const VISIT_APPOINTMENT_DETAIL = 66;

  /**
   * Appointment details analysis report
   */
  const VISIT_APPOINTMENT_LIST = 65;

  /**
   * List of visits in attended state.
   */
  const VISIT_ATTEND_LIST = 64;

  /**
   * Visit book count.
   */
  const VISIT_BOOK_COUNT = 4;

  /**
   * Visit book list.
   */
  const VISIT_BOOK_LIST = 6;

  /**
   * Visit class average count.
   */
  const VISIT_CLASS_AVERAGE_COUNT = 20;

  /**
   * Visit class average list.
   */
  const VISIT_CLASS_AVERAGE_LIST = 18;

  /**
   * Visit class buy.
   */
  const VISIT_CLASS_BUY = 32;

  /**
   * Controls list report for attendance. With information about usage purchase option.
   */
  const VISIT_CLASS_BUY_DETAIL = 61;

  /**
   * Controls visit class report in chart format.
   */
  const VISIT_CLASS_COUNT = 16;

  /**
   * Class analysis report.
   */
  const VISIT_CLASS_DETAIL = 59;

  /**
   * Simplified variation of report {@link WlReportSid::VISIT_CLASS_DETAIL}.
   */
  const VISIT_CLASS_LIST = 14;

  /**
   * Report with list of duplicated visits.
   */
  const VISIT_DUPLICATE = 131;

  /**
   * Controls visit event report in chart format.
   */
  const VISIT_EVENT_COUNT = 69;

  /**
   * Event details analysis report
   */
  const VISIT_EVENT_DETAIL = 68;

  /**
   * Event analysis report
   */
  const VISIT_EVENT_LIST = 67;

  /**
   * Old first visits report.
   *
   * @deprecated Has been replaced with {@link WlReportSid::VISIT_FIRST_SCOPED_COUNT}. Kept only to retain compatibility
   * with old saved reports.
   */
  const VISIT_FIRST_COUNT = 3;

  /**
   * Old first visits report.
   *
   * @deprecated Has been replaced with {@link WlReportSid::VISIT_FIRST_SCOPED_LIST}. Kept only to retain compatibility
   * with old saved reports.
   */
  const VISIT_FIRST_LIST = 2;

  /**
   * Filterable first visit list report, allowing to see first visits to certain criteria (locations/events/etc.)
   * rather than first visits ever. Chart version.
   *
   * @title First Visits
   */
  const VISIT_FIRST_SCOPED_COUNT = 224;

  /**
   * Filterable first visit list report, allowing to see first visits to certain criteria (locations/events/etc.)
   * rather than first visits ever. Table version.
   *
   * @title First Visits
   */
  const VISIT_FIRST_SCOPED_LIST = 223;

  /**
   * Detail franchise cross-location visits table for franchisee.
   *
   * @title Cross-Location Visits Details
   */
  const VISIT_FRANCHISE_LOCATION_CROSS_DETAIL_FRANCHISEE = 186;

  /**
   * Detail franchise cross-location visits table.
   *
   * @title Cross-Location Visits Details
   * @deprecated Report is refactored into new core.
   */
  const VISIT_FRANCHISE_LOCATION_CROSS_DETAIL_LIST = 157;

  /**
   * Summary franchise cross-location visits chart.
   *
   * @title Cross-Location Visits Summary
   * @deprecated Report is refactored into new core.
   */
  const VISIT_FRANCHISE_LOCATION_CROSS_SUMMARY_CHART = 164;

  /**
   * Summary franchise cross-location visits table for franchisee.
   *
   * @title Cross-Location Visits Summary
   */
  const VISIT_FRANCHISE_LOCATION_CROSS_SUMMARY_FRANCHISEE = 187;

  /**
   * Summary franchise cross-location visits table.
   *
   * @title Cross-Location Visits Summary
   * @deprecated Report is refactored into new core.
   */
  const VISIT_FRANCHISE_LOCATION_CROSS_SUMMARY_LIST = 158;

  /**
   * Expired passes report in chart format.
   */
  const VISIT_LAST_COUNT = 8;

  /**
   * Expired passes report in list format.
   */
  const VISIT_LAST_LIST = 7;

  /**
   * Detail cross-location visits table. For regular businesses.
   *
   * @title Cross-Location Visits Details
   * @deprecated Report is refactored into new core.
   */
  const VISIT_LOCATION_CROSS_DETAIL_LIST = 168;

  /**
   * Summary cross-location visits chart. For regular businesses.
   *
   * @title Cross-Location Visits Summary
   * @deprecated Report is refactored into new core.
   */
  const VISIT_LOCATION_CROSS_SUMMARY_CHART = 170;

  /**
   * Summary cross-location visits table. For regular businesses.
   *
   * @title Cross-Location Visits Summary
   * @deprecated Report is refactored into new core.
   */
  const VISIT_LOCATION_CROSS_SUMMARY_LIST = 169;

  /**
   * Visit login list.
   */
  const VISIT_LOGIN_LIST = 12;

  /**
   * Visits Remaining.
   */
  const VISIT_REMAIN_LIST = 63;

  /**
   * Visits Remaining.
   * Temporary copy of the report {@link WlReportSid::VISIT_REMAIN_LIST} should be removed after Sprint 33 release.
   */
  const VISIT_REMAIN_LIST_TEMP = 144;

  /**
   * Detailed revenue by service.
   */
  const VISIT_REVENUE_DETAIL = 58;

  /**
   * Service revenue analysis.
   */
  const VISIT_REVENUE_LIST = 57;

  /**
   * Risky clients.
   */
  const VISIT_RISK = 41;

  /**
   * Event capacity utilization metric.
   *
   * @title Isaac Churn Prediction
   */
  const VISIT_RISK_ISAAC = 216;

  /**
   * Visit staff average count.
   */
  const VISIT_STAFF_AVERAGE_COUNT = 19;

  /**
   * Visit staff average list.
   */
  const VISIT_STAFF_AVERAGE_LIST = 17;

  /**
   * Visit staff count.
   */
  const VISIT_STAFF_COUNT = 15;

  /**
   * Visit staff list.
   */
  const VISIT_STAFF_LIST = 13;

  /**
   * Detail list of unpaid visits.
   */
  const VISIT_UNPAID_DETAIL = 74;

  /**
   * List of unpaid visits.
   */
  const VISIT_UNPAID_LIST = 73;

  /**
   * Monthly coaching sessions YOY report for Curves business.
   */
  const VISIT_WORKOUT_APPOINTMENT_LIST = 210;

  /**
   * Monthly coaching sessions YOY report for Curves business.
   */
  const VISIT_WORKOUT_APPOINTMENT_YOY = 211;

  /**
   * Workout list report for Curves business.
   */
  const VISIT_WORKOUT_GYM_LIST = 209;

  /**
   * Workout YOY report for Curves business.
   */
  const VISIT_WORKOUT_GYM_YOY = 207;

  /**
   * Report with list of businesses connected to FitLIVE.
   *
   * @title FitLIVE for business
   */
  const ZOOM_SYSTEM_BUSINESS = 258;

  /**
   * Report with list of businesses connected to FitLIVE.
   *
   * @title FitLIVE for business
   */
  const ZOOM_SYSTEM_COUNT = 259;
}

?>