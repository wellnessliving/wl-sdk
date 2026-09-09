<?php

namespace WellnessLiving\Wl\Report\Container\ControlPanel\ControlButton;

use WellnessLiving\Wl\Import\Custom\CustomSid;

/**
 * List of the control buttons in the report container.
 *
 * Last ID: 26.
 *
 * <b>Note.</b> If you add a new constant you have to change the
 *
 * Otherwise a user will not be able to customize this button.
 */
class ReportContainerControlButtonSid
{
  /**
   * Add new lead button.
   */
  const ADD_NEW_LEAD = 21;

  /**
   * Book a class with the selected users.
   */
  const BOOK_CLASS = 15;

  /**
   * Bulk billing for the selected users.
   */
  const BULK_BILL = 26;

  /**
   * 'View campaign' button. Shows campaign mail template.
   */
  const CAMPAIGN = 20;

  /**
   * Collapse report cards on page.
   *
   * @title Collapse all
   */
  const COLLAPSE = 17;

  /**
   * Customize the collection.
   */
  const COLLECTION_CUSTOMIZE = 11;

  /**
   * Quick contact button. Shows available methods to send message to user.
   */
  const CONTACT = 1;

  /**
   * Add contact log button. Used in "Contact History" report in a client profile.
   *
   * @title Add Contact Log
   */
  const CONTACT_LOG_ADD = 19;

  /**
   * Customize the report.
   */
  const CUSTOMIZE = 8;

  /**
   * Add report to Dashboard.
   */
  const DASHBOARD = 6;

  /**
   * Add report to Dashboard.
   */
  const DASHBOARD_REMOVE = 10;

  /**
   * Delete selected clients button.
   */
  const DELETE_CLIENT = 24;

  /**
   * Download button.
   */
  const DOWNLOAD_FILES = 13;

  /**
   * Duplicate the report.
   */
  const DUPLICATE = 9;

  /**
   * Expand report cards on page.
   *
   * @title Expand all
   */
  const EXPAND = 18;

  /**
   * Export report button. Shows available methods to export of the report.
   */
  const EXPORT = 2;

  /**
   * Add report to favorite reports.
   */
  const FAVORITE = 5;

  /**
   * Generate files button.
   */
  const GENERATE_FILES = 12;

  /**
   * Generate client id button.
   */
  const GENERATE_ID = 16;

  /**
   * Manage client groups button.
   */
  const GROUP = 7;

  /**
   * Remove from group button.
   */
  const GROUP_REMOVE = 14;

  /**
   * Button for open client import page.
   *
   * @see CustomSid::CLIENTS
   */
  const IMPORT_CLIENT = 22;

  /**
   * Print report button.
   */
  const PRINTING = 3;

  /**
   * Save report button.
   */
  const SAVE = 4;

  /**
   * 'Send campaign' dropdown.
   */
  const SEND_CAMPAIGN = 23;

  /**
   * 'Send Welcome Email' to selected clients.
   *
   * @title Send Welcome Email
   */
  const SEND_WELCOME_EMAIL = 25;
}

?>