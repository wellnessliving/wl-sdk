<?php

namespace WellnessLiving\Wl\Business\Sms\Unread;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API for delete unread sms.
 *
 * @method WlModelRequest delete() Marks all messages in the dialog in the given business with a given user as read.
 * @method WlModelRequest post() Marks the last messages in the dialog in the given business with a given user as unread.  Only messages that were sent by client after the last message from the business to the client will be marked as unread.
 */
class SmsUnreadModel extends WlModelAbstract
{
  /**
   * Key of the business.
   *
   * @delete post
   * @post post
   * @var string
   */
  public $k_business;

  /**
   * User key with whom you want to delete unread messages.
   *
   * @delete post
   * @post post
   * @var string
   */
  public $uid;
}

?>