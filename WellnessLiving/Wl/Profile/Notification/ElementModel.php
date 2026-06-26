<?php

namespace WellnessLiving\Wl\Profile\Notification;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about push notification item.
 *
 * @method WlModelRequest get() Retrieves information about push notification item.
 */
class ElementModel extends WlModelAbstract
{
  /**
   * Date of push notification sending.
   *
   * @get result
   * @var string
   */
  public $dtl_send;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of push notification to retrieve information about.
   *
   * @get get
   * @var string
   */
  public $k_push_history = '0';

  /**
   * Push notification message.
   *
   * @get result
   * @var string
   */
  public $text_message;

  /**
   * Push notification title.
   *
   * @get result
   * @var string
   */
  public $text_title;
}

?>