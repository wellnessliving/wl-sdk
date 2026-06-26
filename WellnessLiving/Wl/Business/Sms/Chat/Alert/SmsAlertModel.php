<?php

namespace WellnessLiving\Wl\Business\Sms\Chat\Alert;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns and updates information about sms chat with a client
 *
 * @method WlModelRequest post() Marks alerts for this client's messages as read, saves alert count. If the alert key was read, it sets the alert to hidden.
 */
class SmsAlertModel extends WlModelAbstract
{
  /**
   * Number of Alerts that are unread for the staff member.
   *
   * @post get,result
   * @var int
   */
  public $i_alert_count;

  /**
   * An alert you want to check the read status of, after marking the chat messages as read
   *
   * @post get,result
   * @var int
   */
  public $is_read;

  /**
   * An alert you want to check the read status of, after marking the chat messages as read
   *
   * @post get
   * @var string
   */
  public $k_alert;

  /**
   * Key of the business this sms chat is connected to.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Key of the user sms chat is related to.
   *
   * @post get
   * @var string
   */
  public $uid;
}

?>