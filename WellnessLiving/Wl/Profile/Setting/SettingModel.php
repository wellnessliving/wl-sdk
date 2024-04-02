<?php

namespace WellnessLiving\Wl\Profile\Setting;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves the user’s notification settings.
 *
 * Alternatively, this endpoint can be used to change a user’s notification settings.
 */
class SettingModel extends WlModelAbstract
{
  /**
   * Determines whether email notifications related to purchases, contracts, and other activity in a client's account are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_account_management_email = true;

  /**
   * Determines whether SMS notifications related to purchases, contracts, and other activity in a client's account are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_account_management_sms = true;

  /**
   * Determines whether email notifications related to news and updates from the business regarding their services, availability, and promotions are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_news_and_updates_email = true;

  /**
   * Whether sms notifications related to news and updates from the business regarding their services, availability and promotions are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_news_and_updates_sms = true;

  /**
   * Determines whether email notifications related to the services a client has booked are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_schedule_and_reminders_email = true;

  /**
   * Determines whether SMS notifications related to the services a client has booked are enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_schedule_and_reminders_sms = true;

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * SID of language code.
   *
   * @get result
   * @var string
   */
  public $text_language = '';

  /**
   * The key of the user to show information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>