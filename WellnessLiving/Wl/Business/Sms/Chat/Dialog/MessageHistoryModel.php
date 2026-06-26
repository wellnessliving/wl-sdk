<?php

namespace WellnessLiving\Wl\Business\Sms\Chat\Dialog;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API for get SMS message history with the specific client in 2-way SMS chat.
 *
 * @method WlModelRequest get()
 */
class MessageHistoryModel extends WlModelAbstract
{
  /**
   * An array with SMS message history: 
   *
   * <dl>
   *   <dt>string `dtl_message`</dt>
   *   <dd>Date and time, when SMS messages were sent, in MySQL format.</dd>
   * 
   *   <dt>bool `is_automated`</dt>
   *   <dd><tt>true</tt> if SMS was sent from task, <tt>false</tt> - if the staff member sent SMS.</dd>
   * 
   *   <dt>bool `is_outbound`</dt>
   *   <dd><tt>true</tt> if staff member sent SMS, <tt>false</tt> - if the client sent the SMS.</dd>
   * 
   *   <dt>string `k_sms_history`</dt>
   *   <dd>The key of SMS history.</dd>
   * 
   *   <dt>string `text_date`</dt>
   *   <dd>The day when SMS messages were sent.</dd>
   * 
   *   <dt>string `text_sender_name`</dt>
   *   <dd>The sender's name.</dd>
   * 
   *   <dt>string `text_sms_body`</dt>
   *   <dd>The body of the SMS.</dd>
   * 
   *   <dt>string `text_sms_type`</dt>
   *   <dd>The title of the mail type.</dd>
   * 
   *   <dt>string `text_time`</dt>
   *   <dd>The time when SMS was sent.</dd>
   * 
   *   <dt>string|null `uid_sender`</dt>
   *   <dd>The UID of the sender, <tt>null</tt> - if SMS sent from task.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_message_history_list = [];

  /**
   * A count of SMS which need to return. Default value is 20.
   *
   * @get get
   * @var int
   */
  public $i_limit = 20;

  /**
   * Key of business for which need to get list of dialogs.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Key of SMS history.
   * If this key is set the API returns SMS histories that were sent before this SMS.
   * If this key isn't set the API returns the last sent 20 SMS histories.
   *
   * @get get
   * @var string
   */
  public $k_sms_history_last = '0';

  /**
   * UID of the client for which need to get SMS message history.
   *
   * @get get
   * @var string
   */
  public $uid;
}

?>