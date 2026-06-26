<?php

namespace WellnessLiving\Wl\Notification\Send;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Send email, push or SMS notification to list of users.
 *
 * @method WlModelRequest get() Checks user list, returns template variables and parameters.
 * @method WlModelRequest post() Send message to users.
 */
class MessageSendModel extends WlModelAbstract
{
  /**
   * List of users for sent message to.
   *
   * @get get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * List of users who can receive message.
   *
   * @get result
   * @var string[]
   */
  public $a_uid_checked = [];

  /**
   * List of template variables. Each element is array:
   *
   * <dl>
   *   <dt>bool `is_global`</dt>
   *   <dd>Whether variable global or template specific.</dd>
   * 
   *   <dt>string `text_description`</dt>
   *   <dd>Variable description.</dd>
   * 
   *   <dt>string `text_parameter`</dt>
   *   <dd>Variable name.</dd>
   * </dl>
   * @get result
   * @var bool[][]|string[][]
   */
  public $a_variable = [];

  /**
   * HTML version of the email pattern.
   *
   * @get result
   * @var string
   */
  public $html_mail = '';

  /**
   * ID of the notification. `0` for empty template.
   *
   * @get get
   * @var int
   */
  public $id_mail = 0;

  /**
   * Type if copy to business. `0` if not set.
   *
   * @get result
   * @var int
   */
  public $id_mail_copy_business = 0;

  /**
   * Type of the notification. `0` if not set.
   *
   * @get get
   * @var int
   */
  public $id_mail_form = 0;

  /**
   * `true` if email configured for notification, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_mail = false;

  /**
   * `true` if push configured for notification, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_push = false;

  /**
   * `true` if SMS configured for notification, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_sms = false;

  /**
   * Key of the business where notification should be sent.
   * Empty string if not set.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the mail pattern.
   *
   * @get result
   * @var string
   */
  public $k_mail_pattern = '';

  /**
   * Business copy e-mail.
   *
   * @get result
   * @var string
   */
  public $text_business_mail = '';

  /**
   * Business reply to name.
   *
   * @get result
   * @var string
   */
  public $text_business_name = '';

  /**
   * Business reply to email.
   *
   * @get result
   * @var string
   */
  public $text_business_reply = '';

  /**
   * Text version of the email pattern.
   *
   * @get result
   * @var string
   */
  public $text_mail = '';

  /**
   * Pattern for the push notification.
   *
   * @get result
   * @var string
   */
  public $text_push = '';

  /**
   * Pattern for the SMS notification.
   *
   * @get result
   * @var string
   */
  public $text_sms = '';

  /**
   * Mail subject.
   *
   * @get result
   * @var string
   */
  public $text_subject = '';
}

?>