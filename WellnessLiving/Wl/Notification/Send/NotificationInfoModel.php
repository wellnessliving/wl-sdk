<?php

namespace WellnessLiving\Wl\Notification\Send;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that allows to send notifications to users of the certain business or location.
 *
 * This endpoint is available only for user with a special privilege. If you want to use this endpoint, contact
 * with WellnessLiving support first.
 */
class NotificationInfoModel extends WlModelAbstract
{
  /**
   * Information about mail.
   *
   * @get result
   * @var array
   */
  public $a_info;

  /**
   * ID of the notification.
   *
   * @get get
   * @var int
   */
  public $id_notification = 0;

  /**
   * Key of the business where information about notification should be retrieved.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>