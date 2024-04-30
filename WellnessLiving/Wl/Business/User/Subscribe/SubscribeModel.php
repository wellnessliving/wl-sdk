<?php

namespace WellnessLiving\Wl\Business\User\Subscribe;

use WellnessLiving\WlModelAbstract;

/**
 * Manages a user`s subscription in a business.
 */
class SubscribeModel extends WlModelAbstract
{
  /**
   * Information about the user`s subscription.
   *
   * When getting information, `true` indicates the user has an email subscription in the business (`false` otherwise).
   *
   * When changing a subscription, `true` subscribes the user in the business. `false` unsubscribes the user in the business.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @put get
   * @var bool|null
   */
  public $is_subscribe;

  /**
   * Information about the user`s subscription.
   *
   * When getting information, `true` indicates the user has an SMS subscription in the business (`false` otherwise).
   *
   * When changing a subscription, `true` subscribes the user in the business. `false1 unsubscribes the user in the business.
   *
   * This will be `null` if not set yet.
   *
   * @get result
   * @put get
   * @var bool|null
   */
  public $is_subscribe_sms;

  /**
   * The business key used for users to subscribe, unsubscribe, and receive information about the status of the subscription.
   *
   * @get get
   * @put get
   * @var string
   */
  public $k_business;

  /**
   * The key of the user whose subscription status needs to be checked or switched to subscribed/unsubscribed.
   *
   * @get get
   * @put get
   * @var string
   */
  public $uid;
}

?>