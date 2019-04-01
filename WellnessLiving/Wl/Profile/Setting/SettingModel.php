<?php

namespace WellnessLiving\Wl\Profile\Setting;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of user settings from profile.
 */
class SettingModel extends WlModelAbstract
{
  /**
   * Whether 'Booking Confirmation Email' group is enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_email_booking_confirmation = 1;

  /**
   * Whether 'Booking Reminder Email' group is enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_email_booking_reminder = 1;

  /**
   * Whether 'Company News Email' group is enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_email_news = 1;

  /**
   * Whether all emails enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_email_notification = 1;

  /**
   * Whether 'Review Request Email' group is enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_email_review = 1;

  /**
   * Whether all Push is enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_push_notification = 1;

  /**
   * Whether all SMS is enabled.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_sms_notification = 1;

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