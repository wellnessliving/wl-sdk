<?php

namespace WellnessLiving\Wl\Notification\Send;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that allows to send notifications to users of the certain business or location.
 *
 * This endpoint is available only for user with a special privilege. If you want to use this endpoint, contact
 * with WellnessLiving support first.
 */
class NotificationSendModel extends WlModelAbstract
{
  /**
     * Custom array with information which can be used to generate notification.
     *
     * Use {@link NotificationInfoModel} for more information about available fields.
     *
     * @post post
     * @var array
     */
  public $a_data = [];

  /**
     * Date and time in UTC, when notification should be sent. Empty string means to send immediately.
     *
     * If date and time are set, it should be reasonable. If it's too far in the future, API returns an error.
     *
     * @post post
     * @var string
     */
  public $dtu_send = '';

  /**
     * ID of the notification.
     *
     * Contact with WellnessLiving support to get the list of available notifications.
     *
     * @post post
     * @var int
     */
  public $id_notification = 0;

  /**
     * Key of the business where notification should be sent.
     *
     * @post post
     * @var string
     *
     */
  public $k_business = '0';

  /**
     * Key of the location.
     * If it's not empty, only clients from this location will get notification.
     * `null` to not limit recipients with a certain location.
     *
     * @post post
     * @var string|null
     *
     */
  public $k_location = null;

  /**
     * List of UIDs joined with comma, if notification should be sent to certain recipients.
     * Empty string means to send to all clients of the business or location with proper subscription level.
     *
     * @post post
     * @var string
     */
  public $s_uid = '';
}

?>