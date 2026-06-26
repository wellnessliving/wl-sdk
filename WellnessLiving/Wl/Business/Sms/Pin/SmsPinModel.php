<?php

namespace WellnessLiving\Wl\Business\Sms\Pin;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API for delete unread sms.
 *
 * @method WlModelRequest delete() Marks all messages in the dialog in the given business with a given user as unpinned.
 * @method WlModelRequest post() Marks the last messages in the dialog in the given business with a given user as pinned.
 */
class SmsPinModel extends WlModelAbstract
{
  /**
   * Key of the business.
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