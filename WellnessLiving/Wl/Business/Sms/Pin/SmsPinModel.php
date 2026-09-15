<?php

namespace WellnessLiving\Wl\Business\Sms\Pin;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API for delete unread sms.
 *
 * @method WlModelRequest delete() Marks all messages in the dialog in the given business with a given user as unpinned.  Removes the pin records for the given business, the dialog partner identified by `uid`, and  the current actor from `wl_business_sms_pin`, then notifies the dialog channel of the change.
 * @method WlModelRequest post() Marks the last messages in the dialog in the given business with a given user as pinned.  If the dialog is already pinned for the current actor, does nothing. Otherwise inserts a pin  record into `wl_business_sms_pin` and notifies the dialog channel of the change.
 */
class SmsPinModel extends WlModelAbstract
{
  /**
 * The business key.
 *
 * @delete post
 * @post post
 * @var string
 */
  public $k_business = '';

  /**
 * User key with whom you want to pin/unpin messages.
 *
 * @delete post
 * @post post
 * @var string
 */
  public $uid = '';
}

?>