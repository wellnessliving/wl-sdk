<?php

namespace WellnessLiving\Wl\Business\User\Subscribe;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages a user`s subscription in a business.
 *
 * @method WlModelRequest get() Retrieves information about if user is subscribed on specified business or not.  Used to pre-populate the notification preferences toggle in a client's profile page. Shows whether the client has opted in to email and SMS communications from the business.
 * @method WlModelRequest put() Subscribes or unsubscribes user on specified business.  Called when a client changes their notification preferences. Controls whether the business can contact the client by email and by SMS.
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
  public $is_subscribe = null;

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
  public $is_subscribe_sms = null;

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