<?php

namespace WellnessLiving\Wl\Profile\Page\Notifications;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Saves Client's Notifications page settings.
 *
 * @method WlModelRequest post() Saves client's notifications settings.
 */
class NotificationModel extends WlModelAbstract
{
  /**
   * Client's notifications settings.
   * Keys are notifications IDs, one of {@link \Wl\Profile\Page\Notifications\NotificationSid} constants, values -
   *   <tt>true</tt> if a notification setting is ON, <tt>false</tt> - otherwise.
   *
   * @post get
   * @var array
   */
  public $a_notification_list;

  /**
   * ID of source mode.
   *
   * @post get
   * @var int
   */
  public $id_mode;

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   *  Key of the email, where unsubscribe link was clicked.
   *
   * @post get
   * @var string
   */
  public $k_mail_history;

  /**
   * Secret string to check access.
   * Used only when <var>id_mode</var>
   *
   * @post get
   * @var string|null
   */
  public $s_secret;

  /**
   * User ID.
   *
   * @post get
   * @var string
   */
  public $uid;
}

?>