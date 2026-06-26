<?php

namespace WellnessLiving\Wl\Mail\Pattern\AutomatedMarketing;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Send test email or SMS.
 *
 * @method WlModelRequest post() Sends test email or SMS.
 */
class SendTestModel extends WlModelAbstract
{
  /**
   * Call to action data.
   * Used only for automated marketing messages to resolve action placeholders when sending a test notification.
   *
   * `null` when no call-to-action is required for the test message.
   *
   * @post post
   * @var array|null
   */
  public $a_action = null;

  /**
   * ID of the notification.
   *
   * @post post
   * @var int
   */
  public $id_mail = 0;

  /**
   * ID of the mail form.
   *
   * @post post
   * @var int
   */
  public $id_mail_form = 0;

  /**
   * `null` for system business.
   *
   * @post post
   * @var string|null
   */
  public $k_business = null;

  /**
   * Mail pattern key.
   *
   * Not set in case of sending test notification from 'Send campaign' panel.
   *
   * @post post
   * @var string
   */
  public $k_mail_pattern = '0';

  /**
   * Mail pattern live key.
   * Set in case of sending test notification from 'Send campaign' panel.
   *
   * @post post
   * @var string
   */
  public $k_mail_pattern_live = '0';

  /**
   * Email of a recipient.
   *
   * @post post
   * @var string
   */
  public $text_mail = '';

  /**
   * Phone of a recipient.
   *
   * @post post
   * @var string
   */
  public $text_phone = '';
}

?>