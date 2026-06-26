<?php

namespace WellnessLiving\Wl\Business\Sms\Chat\Dialog;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for work with sms chat.
 *
 * @method WlModelRequest get()
 */
class DialogListModel extends WlModelAbstract
{
  /**
   * A list of clients' dialogs. Value has following structure:
   *
   * <dl>
   *   <dt>int `i_unread_sms`</dt>
   *   <dd>A count of unread messages from the client.</dd>
   * 
   *   <dt>string `text_client`</dt>
   *   <dd>The name of the client.</dd>
   * 
   *   <dt>string `text_date_last_sms`</dt>
   *   <dd>Date when was received the last SMS from the client.</dd>
   * 
   *   <dt>string `text_last_sms`</dt>
   *   <dd>The text of the last SMS from the client.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>UID of the client.</dd>
   * 
   *   <dt>string `url_profile_logo`</dt>
   *   <dd>The link to logo the client.</dd>
   * 
   *   <dt>string `url_profile`</dt>
   *   <dd>The link to profile the client.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_dialog_list = [];

  /**
   * The date with time of the last sent SMS.
   * If date is set the API returns dialog list where date last SMS is less than this date.
   * If date isn't set the API returns the last dialog list.
   *
   * @get get
   * @var string
   */
  public $dtl_last_activity;

  /**
   * Key of business for which need to get list of dialogs.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * String with filter criteria.
   *
   * @get get
   * @var string
   */
  public $s_filter = '';
}

?>