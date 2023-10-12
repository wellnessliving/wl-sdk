<?php

namespace WellnessLiving\Wl;
/**
 * Wellnessliving-wide privileges.
 */
class WlPrivilegeSid
{
  /**
   * View banner alert message on dashboard.
   */
  const ALERT_MESSAGE = 142;

  /**
   * Unpaid appointment booking.
   */
  const APPOINTMENT_BOOK_UNPAID = 167;

  /**
   * Edit appointment at my location.
   */
  const APPOINTMENT_EDIT = 50;

  /**
   * Change/View all appointment.
   */
  const APPOINTMENT_FOREIGN = 49;

  /**
   * Edit appointment schedule.
   *
   * @deprecated {@link \WlPrivilegeSid::SCHEDULE_FUTURE_APPOINTMENT} and {@link \WlPrivilegeSid::SCHEDULE_PAST_APPOINTMENT} are used now.
   */
  const APPOINTMENT_PERIOD = 51;

  /**
   * View appointment.
   */
  const APPOINTMENT_VIEW = 52;

  /**
   * Ability to book clients outside of their current paid period.
   */
  const BOOK_OUTSIDE_PAID_PERIOD = 141;

  /**
   * Ability to book clients over capacity during or after the services have been scheduled.
   */
  const BOOK_OVER_CAPACITY = 154;

  /**
   * Ability to book assets which are booked for another service or set as unavailable.
   */
  const BOOK_UNAVAILABLE_ASSETS = 138;

  /**
   * Ability to schedule staff members who are booked for another service or set as unavailable.
   */
  const BOOK_UNAVAILABLE_STAFF = 137;

  /**
   * Manage business.
   */
  const BUSINESS_EDIT = 1;

  /**
   * Change business email settings.
   */
  const BUSINESS_EMAIL = 117;

  /**
   * Change business policies.
   */
  const BUSINESS_POLICY = 120;

  /**
   * Change available services in business.
   */
  const BUSINESS_SERVICE = 118;

  /**
   * Change services privileges apply.
   */
  const BUSINESS_SERVICE_APPLY = 145;

  /**
   * Change services privileges apply (third button requires second privilege).
   */
  const BUSINESS_SERVICE_APPLY_CUSTOM = 165;

  /**
   * Change Design Settings.
   */
  const BUSINESS_SKIN = 19;

  /**
   * Change business SMS settings.
   */
  const BUSINESS_SMS = 169;

  /**
   * Change business URLs.
   */
  const BUSINESS_URL = 119;

  /**
   * Change business online waiver.
   */
  const BUSINESS_WAIVER = 121;

  /**
   * Perform Cash Out.
   */
  const CASH_OUT = 82;

  /**
   * Edit deposits while perform Cash Out.
   */
  const CASH_OUT_DEPOSIT = 83;

  /**
   * Perform editing of Cash Out.
   */
  const CASH_OUT_EDIT = 84;

  /**
   * Manage clients' Credit Cards.
   */
  const CC_MANAGE = 35;

  /**
   * Edit class schedule.
   */
  const CLASS_ATTENDANCE = 48;

  /**
   * Add clients to the attendance list of a service, even if they do not have an applicable purchase option.
   */
  const CLASS_BOOK_UNPAID = 79;

  /**
   * Edit classes at my location.
   */
  const CLASS_EDIT = 3;

  /**
   * Change/View all classes.
   */
  const CLASS_FOREIGN = 17;

  /**
   * Lock search bar on class attendance list.
   */
  const CLASS_LOCK_SEARCH = 152;

  /**
   * Edit class schedule.
   *
   * @deprecated {@link \WlPrivilegeSid::SCHEDULE_FUTURE_CLASS} and {@link \WlPrivilegeSid::SCHEDULE_PAST_CLASS} are used now.
   */
  const CLASS_PERIOD = 5;

  /**
   * Add and view client's contact logs.
   */
  const CONTACT_LOG_MANAGE = 135;

  /**
   * Add, remove, and edit gift cards.
   */
  const COUPON = 31;

  /**
   * Delete shared dashboard.
   */
  const DASHBOARD_DELETE = 131;

  /**
   * Edit shared dashboard.
   */
  const DASHBOARD_EDIT = 130;

  /**
   * Share dashboard.
   */
  const DASHBOARD_SHARE = 129;

  /**
   * Add, remove and edit discount codes.
   */
  const DISCOUNT_CODE = 76;

  /**
   * Configure Constant Contact settings.
   */
  const EML_CONSTANT_CONTACT = 123;

  /**
   * Configure MailChimp settings.
   */
  const EML_MAILCHIMP = 122;

  /**
   * Edit class schedule.
   */
  const ENROLLMENT_ATTENDANCE = 55;

  /**
   * Add clients to the attendance list of a service, even if they do not have an applicable purchase option.
   */
  const ENROLLMENT_BOOK_UNPAID = 80;

  /**
   * Edit classes at my location.
   */
  const ENROLLMENT_EDIT = 54;

  /**
   * Change/View all classes.
   */
  const ENROLLMENT_FOREIGN = 53;

  /**
   * Lock search bar on enrollment attendance list.
   */
  const ENROLLMENT_LOCK_SEARCH = 153;

  /**
   * Allows to manage leaderboard in the FilBuilder addon.
   */
  const FITBUILDER_LEADERBOARD = 190;

  /**
   * Allows to subscribe to FitBuilder subscription.
   */
  const FITBUILDER_SUBSCRIPTION = 189;

  /**
   * Allows to assign workouts from the FilBuilder addon to different services.
   */
  const FITBUILDER_WORKOUT_ASSIGN = 188;

  /**
   * Allows to add, edit and remove workouts in the FilBuilder addon.
   */
  const FITBUILDER_WORKOUT_MANAGE = 187;

  /**
   * Allow Staff members to view/complete forms for clients from any location.
   */
  const FORM_ALL = 177;

  /**
   * Allow staff members to fill in forms for clients.
   */
  const FORM_COMPLETE = 178;

  /**
   * Allow staff members to add, edit and delete forms.
   */
  const FORM_MANAGE = 160;

  /**
   * Allow Staff members to view/complete forms for clients that belong to them through service offerings.
   */
  const FORM_MY_CLIENTS = 175;

  /**
   * Allow Staff members to view/complete forms for clients that belong to the location that they are selected to work at.
   */
  const FORM_MY_LOCATION = 176;

  /**
   * Allow staff members to view form responses.
   */
  const FORM_VIEW_RESPONSE = 161;

  /**
   * Add holidays.
   */
  const HOLIDAY = 7;

  /**
   * Set up and modify Autymate integration.
   */
  const INTEGRATION_AUTYMATE = 163;

  /**
   * Set up and modify Brivo integration.
   */
  const INTEGRATION_BRIVO = 179;

  /**
   * Enroll into and manage the WellnessLiving Achieve App. These settings are located under Setup > Achieve Client App.
   */
  const INTERFACE_ACHIEVE_APP = 87;

  /**
   * Modify the look and functionality business’s widgets. These settings are located within Setup > Widgets.
   */
  const INTERFACE_WIDGET_EDIT = 39;

  /**
   * View the look and functionality business’s widgets. These settings are located within Setup > Widgets.
   */
  const INTERFACE_WIDGET_VIEW = 110;

  /**
   * Permission to Receive or Adjust quantity from the Inventory On Hand Report.
   */
  const INVENTORY_UPDATE = 157;

  /**
   * Manage my locations except General information.
   */
  const LOCATION_EDIT = 9;

  /**
   * Manage tab Location -> General.
   */
  const LOCATION_EDIT_GENERAL = 126;

  /**
   * Manage all locations.
   */
  const LOCATION_FOREIGN = 8;

  /**
   * Manage franchise locations.
   */
  const LOCATION_FRANCHISE = 109;

  /**
   * Add client notes and warnings.
   */
  const LOGIN_NOTE = 11;

  /**
   * Flag clients.
   */
  const LOGIN_NOTE_RESTRICT = 12;

  /**
   * Logs view.
   */
  const LOG_VIEW = 101;

  /**
   * Access to send mails and sms to clients.
   */
  const MAIL_SEND = 75;

  /**
   * Only the staff roles with this permission provided are able to edit/add/delete the business billing information.
   */
  const MANAGE_BILLING_INFORMATION = 134;

  /**
   * Manage hardware readers.
   */
  const MANAGE_READERS = 181;

  /**
   * Enable, disable, and edit daily deals.
   */
  const MARKETING_DD = 43;

  /**
   * Settings pertaining to all automated marketing to clients.
   */
  const MARKETING_EMAIL = 42;

  /**
   * Enabling this permission for a role will enable making and receiving calls in Message Center.
   */
  const MESSAGES_CALLS = 173;

  /**
   * Enabling this permission for a role will enable the role to use the ‘Assign to’ field and assign a conversation to a staff member.
   */
  const MESSAGES_CONVERSATIONS = 174;

  /**
   * Enabling this permission for a role will grant access to the inbox tab including viewing and sending messages in the Message Center.
   */
  const MESSAGES_MANAGE = 170;

  /**
   * Enabling this permission for a role will grant access to the Settings tab including modifying phone number(s) for the business.
   */
  const MESSAGES_SETTINGS = 171;

  /**
   * Enabling this permission for a role will grant access and changes to the Subscription Plans tab.
   */
  const MESSAGES_SUBSCRIPTION = 172;

  /**
   * Receive new appointment booking / request notification.
   */
  const NOTIFICATION_APPOINTMENT_BOOK = 60;

  /**
   * Receive appointment cancellation notification.
   */
  const NOTIFICATION_APPOINTMENT_CANCEL = 61;

  /**
   * Receive appointment change notification.
   */
  const NOTIFICATION_APPOINTMENT_CHANGE = 59;

  /**
   * Receive class attendance list.
   */
  const NOTIFICATION_CLASS_ATTENDANCE = 56;

  /**
   * Receive client class booking notification.
   */
  const NOTIFICATION_CLASS_BOOK = 57;

  /**
   * Receive client class cancelation notification.
   */
  const NOTIFICATION_CLASS_CANCEL = 58;

  /**
   * Receive event attendance list.
   */
  const NOTIFICATION_EVENT_ATTENDANCE = 62;

  /**
   * Receive client event booking notification.
   */
  const NOTIFICATION_EVENT_BOOK = 63;

  /**
   * Receive client event cancellation notification.
   */
  const NOTIFICATION_EVENT_CANCEL = 64;

  /**
   * Permissions apply to all appointment schedules.
   */
  const NOTIFICATION_FOREIGN = 65;

  /**
   * Receive new lead capture widget notification.
   */
  const NOTIFICATION_LEAD_CAPTURE = 159;

  /**
   * Staff with this role will receive emails about reward prizes.
   *
   * @see \RsMailSid::REWARD_PRIZE_STAFF
   */
  const NOTIFICATION_PRIZE_REDEMPTION = 90;

  /**
   * Staff with this role will receive the inventory mails.
   *
   * @see \RsMailSid::PURCHASE_PRODUCT_INVENTORY
   */
  const NOTIFICATION_PRODUCT_INVENTORY = 77;

  /**
   * Receive new quiz notification form staff.
   */
  const NOTIFICATION_QUIZ = 162;

  /**
   * Staff with this role will receive customer review notifications.
   */
  const NOTIFICATION_REVIEW = 66;

  /**
   * Staff with this role will receive the sale receipts mails.
   *
   * @see \RsMailSid::SALE_STAFF
   */
  const NOTIFICATION_SALE_STAFF = 136;

  /**
   * Override late cancel and no show fees.
   */
  const OVERRIDE_FEE = 164;

  /**
   * Manage partner program.
   */
  const PARTNER_PROGRAM_MANAGE = 94;

  /**
   * Access to Payment Processing.
   */
  const PAYMENT_PROCESSING = 166;

  /**
   * Permission to perform Physical Inventory Count.
   */
  const PHYSICAL_INVENTORY_COUNT = 156;

  /**
   * Staff member with this role will be able to send postcards.
   */
  const POSTCARD_SEND = 88;

  /**
   * Delete shared power searches.
   */
  const POWER_SEARCH_DELETE = 106;

  /**
   * Edit shared power searches.
   */
  const POWER_SEARCH_EDIT = 105;

  /**
   * Share power searches with other staff members.
   */
  const POWER_SEARCH_SHARE = 107;

  /**
   * Ability to request subscription plan for custom website.
   */
  const PRESENCE = 149;

  /**
   * Edit products but not product name and description.
   */
  const PRODUCT_DESCRIPTION_EDIT = 113;

  /**
   * Add, remove, and edit products in the online store.
   */
  const PRODUCT_MANAGE = 34;

  /**
   * Manage all clients.
   */
  const PROFILE_ALL = 24;

  /**
   * This permission allows users to view client details throughout the interface.
   */
  const PROFILE_DETAIL = 67;

  /**
   * Manage profile client groups.
   */
  const PROFILE_GROUP_MANAGE = 69;

  /**
   * Manage clients from my location.
   */
  const PROFILE_MY_LOCATION = 86;

  /**
   * Manage profile client type.
   */
  const PROFILE_TYPE_EDIT = 68;

  /**
   * Manage all clients.
   */
  const PROFILE_VIEW = 13;

  /**
   * Manage progress log.
   */
  const PROGRESS_LOG_MANAGE = 102;

  /**
   * Edit progress log in profile.
   */
  const PROGRESS_LOG_PROFILE = 104;

  /**
   * Add, remove, and edit purchase options and packages for services.
   */
  const PROMOTION_MANAGE = 25;

  /**
   * Allows to edit only base information about purchase option.
   */
  const PROMOTION_MANAGE_BASE = 127;

  /**
   * Access to edit client purchases (passes and memberships).
   */
  const PURCHASE_EDIT = 93;

  /**
   * Access to view client purchases (passes and memberships).
   */
  const PURCHASE_VIEW = 92;

  /**
     * Allow to see alerts.
     */
  const RECEIVE_ALERT = 193;

  /**
   * Access to view reports for all staff.
   *
   * If staff has no this privilege then he can view only reports for them self.
   */
  const REPORT_ALL = 71;

  /**
   * Reports attendance.
   */
  const REPORT_ATTENDANCE = 27;

  /**
   * Reports client.
   */
  const REPORT_CLIENT = 26;

  /**
   * Reports with cash closeout information.
   */
  const REPORT_CLOSEOUT = 85;

  /**
   * Export and print button in reports.
   */
  const REPORT_EXPORT_PRINT = 186;

  /**
   * Reports with franchise information.
   */
  const REPORT_FRANCHISE = 108;

  /**
   * Wellness Programs reports.
   */
  const REPORT_INSURANCE = 115;

  /**
   * Ability to generate, export and import insurance reimbursement files.
   */
  const REPORT_INSURANCE_FILE = 155;

  /**
   * Reports emails.
   */
  const REPORT_MAIL = 30;

  /**
   * Reports sales.
   */
  const REPORT_SALE = 29;

  /**
   * Ability to view purchase report for specific user.
   */
  const REPORT_SALE_USER = 125;

  /**
   * Reports staff.
   */
  const REPORT_STAFF = 28;

  /**
   * Manage assets.
   */
  const RESOURCE = 37;

  /**
   * Unpaid asset booking.
   */
  const RESOURCE_BOOK_UNPAID = 168;

  /**
   * Mark client reviews as inappropriate and respond to customer comments.
   */
  const REVIEW_FLAG = 18;

  /**
   * Create contests on the leaderboard.
   */
  const REWARD_LEADERBOARD = 44;

  /**
   * Rules related to point accumulation.
   */
  const REWARD_POINT_MANAGE = 46;

  /**
   * Clear the total accumulated points for all clients.
   */
  const REWARD_POINT_RESET = 45;

  /**
   * Define prizes and the number of points that are required to redeem.
   */
  const REWARD_PRIZE = 47;

  /**
   * Enable SABA single sign on and create SABA accounts.
   */
  const SABA = 116;

  /**
   * View canceled classes from the schedule.
   */
  const SCHEDULE_CANCELED_CLASS = 139;

  /**
   * View canceled classes from the schedule.
   */
  const SCHEDULE_CANCELED_ENROLLMENT = 140;

  /**
   * Scheduling and editing future sessions of the appointments.
   */
  const SCHEDULE_FUTURE_APPOINTMENT = 95;

  /**
   * Scheduling sessions of the assets.
   */
  const SCHEDULE_FUTURE_ASSETS = 128;

  /**
   * Scheduling and editing future sessions of the classes.
   */
  const SCHEDULE_FUTURE_CLASS = 96;

  /**
   * Scheduling and editing future sessions of the events.
   */
  const SCHEDULE_FUTURE_EVENT = 99;

  /**
   * Scheduling and editing past sessions of the appointments.
   */
  const SCHEDULE_PAST_APPOINTMENT = 97;

  /**
   * Scheduling and editing past sessions of the classes.
   */
  const SCHEDULE_PAST_CLASS = 98;

  /**
   * Scheduling and editing past sessions of the events.
   */
  const SCHEDULE_PAST_EVENT = 100;

  /**
   * Allows sign service agreement.
   */
  const SERVICE_AGREEMENT_SIGN = 133;

  /**
   * View, modify and delete shop categories.
   */
  const SHOP_CATEGORY = 78;

  /**
   * Modify the clock-in and clock-out times for staff members.
   */
  const STAFF_CLOCK = 32;

  /**
   * Configure pay rates for staff members.
   */
  const STAFF_CONFIG_PAY_RATES = 182;

  /**
   * Add, remove, and edit staff profiles.
   */
  const STAFF_EDIT = 14;

  /**
   * Edit own staff profile.
   */
  const STAFF_EDIT_OWN = 150;

  /**
   * Modify pay rates for products and Purchase Options.
   */
  const STAFF_MODIFY_RATES_PRODUCT = 184;

  /**
   * Modify pay rates for services.
   */
  const STAFF_MODIFY_RATES_SERVICE = 183;

  /**
   * Add, remove, and edit staff pay rates.
   */
  const STAFF_PAY_ALL = 20;

  /**
   * Change staff role on the staff edit page.
   */
  const STAFF_ROLE_CHANGE = 72;

  /**
   * Edit staff role on the staff role page.
   */
  const STAFF_ROLE_EDIT = 124;

  /**
   * Create/Edit/Remove staff working hours.
   */
  const STAFF_WORKING_HOURS = 144;

  /**
   * Allow staff to override staff commission at the point of sale.
   */
  const STORE_COMMISSION_OVERRIDE = 185;

  /**
   * Temporarily modify the price of products and services at the point of sale.
   */
  const STORE_PRICE = 41;

  /**
   * Access to the point of sale store to facilitate the sale of products and services.
   */
  const STORE_SELL = 40;

  /**
   * Access to view and edit store settings.
   */
  const STORE_SETTINGS_EDIT = 143;

  /**
   * Add, remove, and edit supplier profiles.
   */
  const SUPPLIER_MANAGE = 114;

  /**
   * Access to add tasks.
   */
  const TASK_ADD = 111;

  /**
   * Access to view all tasks for all members.
   */
  const TASK_ALL = 70;

  /**
   * Access to edit tasks.
   */
  const TASK_EDIT = 112;

  /**
   * Access to transaction details.
   */
  const TRANSACTION_DETAIL = 81;

  /**
   * Access to edit transaction.
   */
  const TRANSACTION_EDIT = 89;

  /**
   * Access to refund transaction.
   */
  const TRANSACTION_REFUND = 91;

  /**
   * Access to view and change list of video categories.
   */
  const VIDEO_CATEGORY = 146;

  /**
   * Access to view and change videos in the business video library.
   */
  const VIDEO_SETUP = 147;

  /**
   * Set up and modify FitLIVE integration.
   */
  const VIRTUAL_SETUP = 158;

  /**
   * Access to edit, delete visit notes.
   */
  const VISIT_NOTE_EDIT = 74;

  /**
   * Access to view visit notes.
   */
  const VISIT_NOTE_VIEW = 73;

  /**
   * Access to WellnessLiving Academy.
   */
  const WELLNESSLIVING_ACADEMY = 151;

  /**
   * Allow access to manage integration with Zapier.
   */
  const ZAPIER = 180;
}

?>