<?php

namespace WellnessLiving\Wl\Marketing\Automation;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for detecting semantic overlap between automations and system notification mails.
 *
 * Provides a list of automations that use the same trigger and a list of active system
 * mail/push/SMS notification patterns that semantically overlap with the specified
 * automation trigger. This API is used by the UI to warn users about potential duplicate
 * communications when enabling or configuring an automation.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class AutomationOverlapModel extends WlModelAbstract
{
  /**
   * List of automations that use the same trigger. Each element has the following structure: 
   *
   * <dl>
   *   <dt>array `a_menu`</dt>
   *   <dd>List of actions for the automation.</dd>
   * 
   *   <dt>string `dtu_add_max_all`</dt>
   *   <dd>Max date all clients were added to automation.</dd>
   * 
   *   <dt>string `dtu_add_max_finish`</dt>
   *   <dd>Max date a client was added to automation with "Finished" status.</dd>
   * 
   *   <dt>string `dtu_add_max_progress`</dt>
   *   <dd>Max date a client was added to automation with "In progress" status.</dd>
   * 
   *   <dt>string `dtu_add_min_all`</dt>
   *   <dd>Min date all clients were added to automation.</dd>
   * 
   *   <dt>string `dtu_add_min_finish`</dt>
   *   <dd>Min date a client was added to automation with "Finished" status.</dd>
   * 
   *   <dt>string `dtu_add_min_progress`</dt>
   *   <dd>Min date a client was added to automation with "In progress" status.</dd>
   * 
   *   <dt>string `dtu_create`</dt>
   *   <dd>Creation date and time in MySQL format.</dd>
   * 
   *   <dt>string `dtu_edit`</dt>
   *   <dd>Date and time of the last edit in MySQL format.</dd>
   * 
   *   <dt>int `i_email_count`</dt>
   *   <dd>Number of emails in the automation.</dd>
   * 
   *   <dt>int `i_recipient_all`</dt>
   *   <dd>Total number of recipients in the automation.</dd>
   * 
   *   <dt>int `i_recipient_finish`</dt>
   *   <dd>Number of recipients with "Finished" status in the automation.</dd>
   * 
   *   <dt>int `i_recipient_progress`</dt>
   *   <dd>Number of recipients with "In Progress" status in the automation.</dd>
   * 
   *   <dt>int `i_sms_count`</dt>
   *   <dd>Number of SMS messages in the automation.</dd>
   * 
   *   <dt>int `i_push_count`</dt>
   *   <dd>Number of push notifications in the automation.</dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether the automation is active.</dd>
   * 
   *   <dt>string `k_automation`</dt>
   *   <dd>Automation key.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key.</dd>
   * 
   *   <dt>string `k_folder`</dt>
   *   <dd>Folder key. Empty string for the default folder.</dd>
   * 
   *   <dt>string `s_menu_id`</dt>
   *   <dd>ID of the HTML element that contains the action menu.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Automation description.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Automation name.</dd>
   * 
   *   <dt>string `html_last_modified`</dt>
   *   <dd>Text about the last modification of the automation.</dd>
   * 
   *   <dt>string `text_modified_date`</dt>
   *   <dd>Date and time of the last modification, formatted for display.</dd>
   * 
   *   <dt>string `text_status`</dt>
   *   <dd>Textual representation of the automation status.</dd>
   * 
   *   <dt>string `text_status_class`</dt>
   *   <dd>CSS class for the automation status.</dd>
   * 
   *   <dt>string `text_folder_title`</dt>
   *   <dd>Folder name.</dd>
   * 
   *   <dt>string `uid_create`</dt>
   *   <dd>User key of the creator.</dd>
   * 
   *   <dt>string `uid_edit`</dt>
   *   <dd>User key of the last editor.</dd>
   * </dl>
   * @get result
   * @post post
   * @var array[]
   */
  public $a_automation_list = [];

  /**
   * List of system notification mails that semantically overlap with the automation trigger.
   * Each element has the following structure: 
   *
   * <dl>
   *   <dt>int `id_mail`</dt>
   *   <dd>Mail id.</dd>
   * 
   *   <dt>bool `is_mail`</dt>
   *   <dd>Whether the email channel is enabled for the notification.</dd>
   * 
   *   <dt>bool `is_push`</dt>
   *   <dd>Whether push channel is enabled for the notification.</dd>
   * 
   *   <dt>bool `is_sms`</dt>
   *   <dd>Whether SMS channel is enabled for the notification.</dd>
   * 
   *   <dt>string `k_mail_pattern`</dt>
   *   <dd>Mail pattern key. `null` for default template.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Notification description.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Notification title.</dd>
   * </dl>
   * @get result
   * @post post
   * @var array[]
   */
  public $a_notification_list = [];

  /**
   * ID of the trigger of the automation.
   *
   * @get get
   * @var int
   */
  public $id_trigger = 0;

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>