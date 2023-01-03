<?php

namespace WellnessLiving\Wl\Profile\Setting;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves the user’s notification settings.
 *
 * Alternatively it can be used to change a user’s notification settings.
 */
class SettingModel extends WlModelAbstract
{
  /**
   * Whether email notifications related to purchases, contracts, and other activity in a client's account are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_account_management_email = 1;

  /**
   * Whether sms notifications related to purchases, contracts, and other activity in a client's account are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_account_management_sms = 1;

  /**
   * Whether email notifications related to news and updates from the business regarding their services, availability and promotions are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_news_and_updates_email = 1;

  /**
   * Whether sms notifications related to news and updates from the business regarding their services, availability and promotions are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_news_and_updates_sms = 1;

  /**
   * Whether email notifications related to the services a client has booked are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_schedule_and_reminders_email = 1;

  /**
   * Whether sms notifications related to the services a client has booked are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_schedule_and_reminders_sms = 1;

  /**
   * The key of the business to show information for.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = null;

  /**
   * The key of the user to show information for.
   *
   * It is `null` if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = null;
}

?>