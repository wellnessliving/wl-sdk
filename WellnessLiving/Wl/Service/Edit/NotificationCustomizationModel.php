<?php

namespace WellnessLiving\Wl\Service\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for custom appointment confirmation/reminder notification customization.
 *
 * @method WlModelRequest get() Prepares notification pattern data of custom confirmation/reminder notification.
 * @method WlModelRequest post() Save a new confirmation/notification mail pattern.
 * @method WlModelRequest put() Updates an existing confirmation/notification mail pattern.
 */
class NotificationCustomizationModel extends WlModelAbstract
{
  /**
   * Information about sending a confirmation/reminder notification.
   *
   * <dl>
   *   <dt>array `a_login_type`</dt>
   *
   * 
   *   <dt>array `a_member_group`</dt>
   *
   * 
   *   <dt>int `id_mail_copy_business`</dt>
   *   <dd>Type if copy to business on `text_business_</dd>
   * 
   *   <dt>bool `is_attach`</dt>
   *   <dd>Whether email attachment is enabled. `1` if yes, `0` if no.</dd>
   * 
   *   <dt>bool `is_campaign`</dt>
   *   <dd>Whether mail should track as a part of campaign. `1` if yes, `0` if no.</dd>
   * 
   *   <dt>bool `is_login_type`</dt>
   *   <dd>Whether mail should be sent only to specific client types. `1` if yes, `0` if no.</dd>
   * 
   *   <dt>bool `is_member_group`</dt>
   *   <dd>Whether mail should be sent only to specific member group. `1` if yes, `0` if no.</dd>
   * 
   *   <dt>bool `is_send_mail`</dt>
   *   <dd>Whether to send email notification. `1` if yes, `0` if no.</dd>
   * 
   *   <dt>bool `is_send_sms`</dt>
   *   <dd>Whether to send sms notification. `1` if yes, `0` if no.</dd>
   * 
   *   <dt>bool `is_send_push`</dt>
   *   <dd>Whether to send push notification. `1` if yes, `0` if no.</dd>
   * 
   *   <dt>string `text_business_name`</dt>
   *   <dd>Business name.</dd>
   * 
   *   <dt>string `text_business_mail`</dt>
   *   <dd>Business mail.</dd>
   * 
   *   <dt>string `text_business_reply`</dt>
   *   <dd>Reply email address.</dd>
   * 
   *   <dt>string `text_campaign`</dt>
   *   <dd>Campaign name.</dd>
   * 
   *   <dt>string `text_content_mail`</dt>
   *   <dd>Email content.</dd>
   * 
   *   <dt>string `text_json`</dt>
   *   <dd>Pattern text json for email message for Unlayer editor.</dd>
   * 
   *   <dt>string `text_push`</dt>
   *   <dd>Push notification content.</dd>
   * 
   *   <dt>string `text_sms`</dt>
   *   <dd>SMS content.</dd>
   * 
   *   <dt>string `text_subject`</dt>
   *   <dd>Email subject.</dd>
   * </dl>
   * @post post
   * @put post
   * @var array
   */
  public $a_notification = [];

  /**
   * Mail pattern form.
   *
   * @get result
   * @var string
   */
  public $html_form = '';

  /**
   * ID of confirmation/reminder mail.
   *
   * `null` when not initialized.
   *
   * @get get
   * @post get
   * @put get
   * @var int|null
   */
  public $id_mail = null;

  /**
   * If mail is enabled or not in the loaded live mail pattern.
   *
   * @get result
   * @var bool
   */
  public $is_mail = false;

  /**
   * If push is enabled or not in the loaded live mail pattern.
   *
   * @get result
   * @var bool
   */
  public $is_push = false;

  /**
   * If sms is enabled or not in the loaded live mail pattern.
   *
   * @get result
   * @var bool
   */
  public $is_sms = false;

  /**
   * The key of the business to which the confirmation/reminder mail belongs.
   *
   * `null` when not initialized.
   *
   * @get get
   * @post get
   * @put get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of mail pattern.
   *
   * `null` for a create request.
   *
   * @get get
   * @post result
   * @put get
   * @var string|null
   */
  public $k_mail_pattern_live = null;

  /**
   * Name of the service (class, event, appointment).
   *
   * @post get
   * @put get
   * @var string
   */
  public $text_service_name = '';

  /**
   * Type of the service (class, event, appointment).
   *
   * @post get
   * @put get
   * @var string
   */
  public $text_service_type = '';
}

?>