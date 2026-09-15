<?php

namespace WellnessLiving\Wl\Business\Sms\Reads;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API for add SMS reads.
 *
 * @method WlModelRequest post() Adds SMS reads for individual reads.  Marks up to the last 100 inbound messages between the given business and user as read by  the current actor, then, unless updating channels is skipped, refreshes the unread count  and notifies the dialog channel of the change.
 */
class SmsReadsModel extends WlModelAbstract
{
  /**
 * The business key.
 *
 * @post post
 * @var string|null
 */
  public $k_business = null;

  /**
 * User key with whom you want to read messages.
 *
 * @post post
 * @var string|null
 */
  public $uid = null;
}

?>