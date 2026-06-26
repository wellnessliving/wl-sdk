<?php

namespace WellnessLiving\Wl\Microsoft\Calendar;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Receives a push notification that informs about changes in the user's calendar.
 *
 * @link https://learn.microsoft.com/graph/change-notifications-delivery-webhooks
 * @link https://learn.microsoft.com/graph/outlook-change-notifications-overview
 *
 * @method WlModelRequest post()
 */
class MicrosoftCalendarEventWebhookModel extends WlModelAbstract
{
  /**
   * Notification that comes from Microsoft.
   *
   * @field value
   * @post post
   * @var array
   *
   * @link https://learn.microsoft.com/graph/outlook-change-notifications-overview#receive-notifications-without-resource-data
   */
  public $a_notification = [];

  /**
   * The encoded validation token of the notification point.
   *
   * @field validationToken
   * @post get
   * @var string
   *
   * @link https://learn.microsoft.com/graph/change-notifications-delivery-webhooks#notificationurl-validation
   */
  public $s_token_validate = '';
}

?>