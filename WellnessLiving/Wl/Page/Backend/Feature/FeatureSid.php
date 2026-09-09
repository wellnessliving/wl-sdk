<?php

namespace WellnessLiving\Wl\Page\Backend\Feature;

use WellnessLiving\Wl\RsMailPageSid;

/**
 * List of available features in the system that can be shown in owner's header.
 *
 * Last used ID: 37.
 */
class FeatureSid
{
  /**
   * Ai Agent.
   */
  const AI_AGENT = 34;

  /**
   * Alerts.
   */
  const ALERT = 32;

  /**
   * List of all features.
   */
  const ALL = 28;

  /**
   * WellnessLiving Android Check-In App.
   */
  const ANDROID_CHECK_IN_APP = 36;

  /**
   * Popup window where clients can select classes and add themselves to the attendance list.
   */
  const ATTENDANCE = 17;

  /**
   * Business settings basic page.
   */
  const BACKEND_DASHBOARD = 9;

  /**
   * Business settings for synchronization with third-party booking services.
   */
  const BUSINESS_PROMOTE = 20;

  /**
   * Business subscription landing page.
   *
   * @title Add-Ons
   */
  const BUSINESS_SUBSCRIPTION = 37;

  /**
   * Online store.
   */
  const CATALOG_LIST = 1;

  /**
   * Report with list of all clients.
   */
  const CLIENT_ALL = 2;

  /**
   * List of the collections overdue payments.
   */
  const COLLECTION = 31;

  /**
   * Client campaigns and area mails.
   */
  const DIRECT_MAIL = 18;

  /**
   * Finance options and Quickbooks integration.
   */
  const FINANCE = 30;

  /**
   * Fit Builder setup page.
   */
  const FITBUILDER = 33;

  /**
   * Frontend part of the business.
   */
  const FRONTEND = 14;

  /**
   * WellnessLiving iOS Check-In App.
   */
  const IOS_CHECK_IN_APP = 35;

  /**
   * Add New Lead.
   *
   * Opens form for adding new user based on the fields configured in the "Lead Capture Widget".
   *
   * @title Add Lead
   */
  const LEAD_ADD = 22;

  /**
   * Log report of staff activity.
   */
  const LOG_REPORT = 21;

  /**
   * List of email patterns that are connected to the online marketing.
   *
   * @see RsMailPageSid::AUTOMATED_MARKETING
   */
  const MARKETING = 12;

  /**
   * Page with information about partner program.
   */
  const PARTNER = 19;

  /**
   * Presence landing page, where staff can get their custom website.
   *
   * @title Presence
   */
  const PRESENCE = 23;

  /**
   * Quiz form creator.
   */
  const QUIZ = 29;

  /**
   * Popup window where client can check-in to the upcoming classes.
   */
  const RECEPTION = 16;

  /**
   * Customizable business dashboard.
   */
  const REPORT_DASHBOARD = 4;

  /**
   * Favorites reports.
   */
  const REPORT_FAVORITE = 3;

  /**
   * List of review.
   */
  const REVIEW_LIST = 5;

  /**
   * Rewards program.
   */
  const REWARD = 11;

  /**
   * Business schedule.
   */
  const SCHEDULE = 6;

  /**
   * Popup window where new clients can sign up themselves to the classes.
   */
  const SELF_SIGNUP = 15;

  /**
   * Page to config custom client's app.
   */
  const SKIN_APP = 13;

  /**
   * Link to the page of the support page.
   */
  const SUPPORT = 10;

  /**
   * Creation of the user.
   */
  const TASK_MANAGEMENT = 8;

  /**
   * Toast notifications.
   *
    */
  const TOAST_MESSAGE = 24;

  /**
   * Landing page for 2-way SMS feature.
   */
  const TWO_WAY_SMS = 25;

  /**
   * Creation of the user.
   */
  const USER_CREATE = 7;

  /**
   * On-Demand videos with FitVID.
   */
  const VIDEO = 26;

  /**
   * Virtual sessions with FitLIVE.
   */
  const VIRTUAL = 27;
}

?>