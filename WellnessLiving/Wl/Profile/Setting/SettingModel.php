<?php

namespace WellnessLiving\Wl\Profile\Setting;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of user settings from profile.
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
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = null;

  /**
   * ID of a user to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = null;
}

?>