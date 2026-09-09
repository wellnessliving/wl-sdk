<?php

namespace WellnessLiving\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\RsMailFormSid;
use WellnessLiving\Wl\RsMailSid;

/**
 * Gets and saves custom template pattern data.
 *
 * @method WlModelRequest get() Gets custom pattern data.  Loads the saved notification template for the given business and mail type together with the  default template, the reply-to business contact data and the list of variables available for  substitution. When a list is requested, also loads all custom templates for the mail form.
 * @method WlModelRequest post() Saves custom pattern.  Validates and stores the submitted notification template (email, push or SMS) for the given  business. A system template edited under a business is copied into that business instead of  modifying the original. The saved mail pattern key is returned in  {@link \Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate\PatternApi::$k_mail_pattern}.
 */
class PatternModel extends WlModelAbstract
{
  /**
   *  Business data. 
   *
   * <dl>
   *   <dt>string|null `text_business_reply_mail`</dt>
   *   <dd>Business email address to `Reply TO`. `null` for system business.</dd>
   * 
   *   <dt>string|null `text_business_reply_name`</dt>
   *   <dd>Business name to `Reply TO`. `null` for system business.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_business_data = [];

  /**
   * Help data for variables.
   *
   * `null` for pushes.
   *
   * <dl>
   *   <dt>array[] `a_help_global`</dt>
   *   <dd>
   *     An array with help data for global variables:
   *     <dl>
   *       <dt>string `text_description`</dt>
   *       <dd>A variable description.</dd>
   * 
   *       <dt>string `text_field`</dt>
   *       <dd>Field name.</dd>
   * 
   *       <dt>string `text_parameter`</dt>
   *       <dd>A variable name.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>array[] `a_help`</dt>
   *   <dd>
   *     An array with help data for template-specific variables:
   *     <dl>
   *       <dt>string `text_description`</dt>
   *       <dd>A variable description.</dd>
   * 
   *       <dt>string `text_field`</dt>
   *       <dd>Field name.</dd>
   * 
   *       <dt>string `text_parameter`</dt>
   *       <dd>A variable name.</dd>
   *     </dl>
   *   </dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_help_data = null;

  /**
   * Mail pattern data to load. 
   *
   * <dl>
   *   <dt>bool `is_mail`</dt>
   *   <dd>Is email enabled.</dd>
   * 
   *   <dt>bool `is_push`</dt>
   *   <dd>Is push notification enabled.</dd>
   * 
   *   <dt>bool `is_sms`</dt>
   *   <dd>Is SMS enabled.</dd>
   * 
   *   <dt>int `id_mail`</dt>
   *   <dd>ID of the notification. One of {@link RsMailSid} constants.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key. </dd>
   * 
   *   <dt>string `k_mail_pattern`</dt>
   *   <dd>Mail pattern key. </dd>
   * 
   *   <dt>string `text_date_edit`</dt>
   *   <dd>Data of the last template save in human-readable format.</dd>
   * 
   *   <dt>string `text_html`</dt>
   *   <dd>HTML content of the email.</dd>
   * 
   *   <dt>string `text_json`</dt>
   *   <dd>JSON content of the email for Unlayer editor.</dd>
   * 
   *   <dt>string `text_preview`</dt>
   *   <dd>>Preview text of the email.</dd>
   * 
   *   <dt>string `text_push`</dt>
   *   <dd>Content of the push notification.</dd>
   * 
   *   <dt>string `text_sms`</dt>
   *   <dd>Content of the SMS.</dd>
   * 
   *   <dt>string `text_template_description`</dt>
   *   <dd>Template description.</dd>
   * 
   *   <dt>string `text_template_title`</dt>
   *   <dd>Template title.</dd>
   * 
   *   <dt>string `text_text`</dt>
   *   <dd>Text content of the email.</dd>
   * 
   *   <dt>int `tl_last_save`</dt>
   *   <dd>Time in seconds of the last template save.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_pattern_load = [];

  /**
   * Default mail pattern data to load.
   *
   * <dl>
   *   <dt>bool `is_mail`</dt>
   *   <dd>Is email enabled.</dd>
   * 
   *   <dt>bool `is_push`</dt>
   *   <dd>Is push notification enabled.</dd>
   * 
   *   <dt>bool `is_sms`</dt>
   *   <dd>Is SMS enabled.</dd>
   * 
   *   <dt>int `id_mail`</dt>
   *   <dd>ID of the notification. One of {@link RsMailSid} constants.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key. </dd>
   * 
   *   <dt>string `k_mail_pattern`</dt>
   *   <dd>Mail pattern key. </dd>
   * 
   *   <dt>string `text_date_edit`</dt>
   *   <dd>Data of the last template save in human-readable format.</dd>
   * 
   *   <dt>string `text_html`</dt>
   *   <dd>HTML content of the email.</dd>
   * 
   *   <dt>string `text_json`</dt>
   *   <dd>JSON content of the email for Unlayer editor.</dd>
   * 
   *   <dt>string `text_preview`</dt>
   *   <dd>>Preview text of the email.</dd>
   * 
   *   <dt>string `text_push`</dt>
   *   <dd>Content of the push notification.</dd>
   * 
   *   <dt>string `text_sms`</dt>
   *   <dd>Content of the SMS.</dd>
   * 
   *   <dt>string `text_template_description`</dt>
   *   <dd>Template description.</dd>
   * 
   *   <dt>string `text_template_title`</dt>
   *   <dd>Template title.</dd>
   * 
   *   <dt>string `text_text`</dt>
   *   <dd>Text content of the email.</dd>
   * 
   *   <dt>int `tl_last_save`</dt>
   *   <dd>Time in seconds of the last template save.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_pattern_load_default = [];

  /**
   * Mail pattern data to save. 
   *
   * <dl>
   *   <dt>bool `is_mail`</dt>
   *   <dd>Is email enabled.</dd>
   * 
   *   <dt>bool `is_push`</dt>
   *   <dd>Is push notification enabled.</dd>
   * 
   *   <dt>bool `is_sms`</dt>
   *   <dd>Is SMS enabled.</dd>
   * 
   *   <dt>int `id_mail`</dt>
   *   <dd>ID of the notification. One of {@link RsMailSid} constants.</dd>
   * 
   *   <dt>string|null `k_business`</dt>
   *   <dd>Business key. </dd>
   * 
   *   <dt>string `k_mail_pattern`</dt>
   *   <dd>Mail pattern key. </dd>
   * 
   *   <dt>string `text_html`</dt>
   *   <dd>HTML content of the email.</dd>
   * 
   *   <dt>string `text_json`</dt>
   *   <dd>JSON content of the email for Unlayer editor.</dd>
   * 
   *   <dt>string `text_preview`</dt>
   *   <dd>Preview text of the email.</dd>
   * 
   *   <dt>string `text_push`</dt>
   *   <dd>Content of the push notification.</dd>
   * 
   *   <dt>string `text_sms`</dt>
   *   <dd>Content of the SMS.</dd>
   * 
   *   <dt>string `text_subject`</dt>
   *   <dd>Subject of the email.</dd>
   * 
   *   <dt>string `text_template_description`</dt>
   *   <dd>Template description.</dd>
   * 
   *   <dt>string `text_template_title`</dt>
   *   <dd>Template title.</dd>
   * 
   *   <dt>string `text_text`</dt>
   *   <dd>Text content of the email.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_pattern_save = [];

  /**
   * ID of the notification. One of {@link RsMailSid} constants. `0` for empty template.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mail = 0;

  /**
   * Whether to get a list of custom template data. `true` - to get a list, `false` - otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_custom_list = false;

  /**
   * List of mail patterns data to load.
   * Each element has the structure, described in {@link PatternModel::$a_pattern_load}.
   *
   * @get result
   * @var string
   */
  public $json_pattern_list_load = '';

  /**
   * Business key.
   * `null` to use the system business.
   *
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Mail pattern key.
   *
   * @get get
   * @post get,result
   * @var string
   */
  public $k_mail_pattern = '0';

  /**
   * Key of the service being booked.
   *
   * Used to prefer a service-specific custom notification template, when one is configured,
   * over the business-level template.
   *
   * `null` when no single service is in context (e.g. several services are selected at once),
   * in which case the business-level template is returned.
   *
   * @get get
   * @var string|null
   */
  public $k_service = null;

  /**
   * SID of the mail form. String representation of one from {@link RsMailFormSid} class constants.
   *
   * @get get
   * @var string
   */
  public $sid_mail_form = '';

  /**
   * Business sender phone formatted.
   *
   * @get result
   * @var string
   */
  public $text_phone_formatted = '';
}

?>