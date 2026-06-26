<?php

namespace WellnessLiving\Wl\Business\Sms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * The API to manage SMS usage limit.
 *
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class SmsUsageModel extends WlModelAbstract
{
  /**
   * Member group keys.
   *
   * @get get
   * @var array
   */
  public $a_member_group = [];

  /**
   * SMS usage statistic.
   *
   * @get result
   * @var array
   */
  public $a_usage_info = [];

  /**
   * Whether currently signed in staff has privilege to manage sms subscription.
   *
   * @get result
   * @var bool
   */
  public $has_access = false;

  /**
   * SMS usage limit.
   *
   * @post get
   * @var int
   */
  public $i_limit = 0;

  /**
   * Quantity of segments af a message to send. Depends on the length of a message.
   *
   * @get get
   * @var int
   */
  public $i_sms_segments = 1;

  /**
   * Number of receivers to send SMS to.
   *
   * @get get
   * @var int
   */
  public $i_uid = 0;

  /**
   * Whether current business is in SMS subscription trial period.
   *
   * @get result
   * @var bool
   */
  public $is_trial = false;

  /**
   * Whether sms usage limit message should be ignored.
   *
   * `null` if not set yet.
   *
   * @get result
   * @post post
   * @var bool|null
   */
  public $is_usage_limit_ignore = null;

  /**
   * UIDs of users to send sms to in JSON format. Is set if sms is sent from an attendance list, Marketing.
   *
   * @get get
   * @var string
   */
  public $json_uid_select = '';

  /**
   * Key of the business.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Session key of selected users (in report).
   *
   * @get get
   * @var string
   */
  public $s_id = '';

  /**
   * Trial end date formatted according to business locale.
   *
   * Empty string if there is no active SMS subscription trial.
   *
   * @get result
   * @var string
   */
  public $text_trial_end = '';

  /**
   * Url to 'Message Center' subscription plans.
   *
   * @get result
   * @var string
   */
  public $url_subscription_plan = '';
}

?>