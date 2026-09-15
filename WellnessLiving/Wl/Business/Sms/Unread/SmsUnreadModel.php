<?php

namespace WellnessLiving\Wl\Business\Sms\Unread;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API for delete unread sms.
 *
 * @method WlModelRequest delete() Marks all messages in the dialog in the given business with a given user as read.  Removes the unread marker for the dialog if one exists. When individual reads are  disabled and the current user is an active staff member or a business admin, also  records a read entry in the message history so other staff members see the  conversation as read. Refreshes the unread SMS count and notifies the dialog channel  about the change.
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