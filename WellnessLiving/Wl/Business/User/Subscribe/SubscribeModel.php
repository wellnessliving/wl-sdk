<?php

namespace WellnessLiving\Wl\Business\User\Subscribe;

use WellnessLiving\WlModelAbstract;

/**
 * Manages user`s subscription on business.
 */
class SubscribeModel extends WlModelAbstract
{
  /**
   * Information about user`s subscription.
   * In case of getting information,
   * <tt>true</tt> if user has email subscription on business, <tt>false</tt> otherwise.
   * In case of changing subscription,
   * <tt>true</tt> if subscribe user on business, <tt>false</tt> is unsubscribe user on business.
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @put get
   * @var bool|null
   */
  public $is_subscribe = null;

  /**
   * Information about user`s subscription.
   * In case of getting information,
   * <tt>true</tt> if user has sms subscription on business, <tt>false</tt> otherwise.
   * In case of changing subscription,
   * <tt>true</tt> if subscribe user on business, <tt>false</tt> is unsubscribe user on business.
   * <tt>null</tt> until loaded.
   *
   * @get result
   * @put get
   * @var bool|null
   */
  public $is_subscribe_sms = null;

  /**
   * Business key.
   * Key of the business for which user will subscribe, unsubscribe,
   * receive information about the status of the subscription.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @put get
   * @var string|null
   */
  public $k_business = null;

  /**
   * User key.
   * The key of the user whose subscription status needs to check or switch to subscribe / unsubscribe.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @put get
   * @var string|null
   */
  public $uid = null;

}