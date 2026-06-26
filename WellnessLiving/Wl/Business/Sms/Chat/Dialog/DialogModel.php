<?php

namespace WellnessLiving\Wl\Business\Sms\Chat\Dialog;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns and updates information about sms chat with a client
 *
 * @method WlModelRequest get() Retrieves information about sms chat with give user in the given business.
 * @method WlModelRequest post() Retrieves information about sms chat with give user in the given business.
 */
class DialogModel extends WlModelAbstract
{
  /**
   * `true` if chat can be marked as archive.
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $can_archive = false;

  /**
   * `true` if conversation can be marked as pinned.
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $can_pin = false;

  /**
   * `true` if the last message in the chat is from client and chat can be marked read.
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $can_read = false;

  /**
   * `true` if the last message in the chat is from client and chat can be marked unread.
   * `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $can_unread = false;

  /**
   * `true` if chat should be hidden on the list of chats.
   * `false` - otherwise.
   * `null` - do not change current status.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_archive;

  /**
   * `true` if chat should be muted and all new messages should not fire notifications to staff members.
   * `false` - otherwise.
   * `null` - do not change current status.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_mute;

  /**
   * Key of the business this sms chat is connected to.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Key of the user sms chat is related to.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid;
}

?>