<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\Sms;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint to manage "Message center" subscription.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest post()
 */
class SmsSubscriptionModel extends WlModelAbstract
{
  /**
   * Returns available trial days for the business.
   *
   * `0` if trial is not available.
   *
   * @get result
   * @var int
   */
  public $i_trial_available = 0;

  /**
   * Returns available trial days for the business.
   *
   * `0` if trial is not available.
   *
   * @get result
   * @var int
   */
  public $i_trial_left = 0;

  /**
   * Locale of the business.
   *
   * @get result
   * @post result
   * @var int
   */
  public $id_locale;

  /**
   * New subscription plan.
   *
   * @get result
   * @post post
   * @var int
   */
  public $id_plan = 0;

  /**
   * Unsubscribe reason ID.
   *
   * `null` in a case of custom reason. In this case {@link UnsubscribeReasonTrait::$text_unsubscribe_reason}
   * should be specified.
   *
   * @delete get
   * @var int|null
   */
  public $id_unsubscribe_reason = null;

  /**
   * Type of the upgrade.
   *
   * @post result
   * @var int
   */
  public $id_upgrade = 0;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * @delete get
   * @var string|null
   */
  public $text_unsubscribe_reason = null;

  /**
   * URL to the page with phone setup instructions.
   *
   * @get result
   * @post result
   * @var string
   */
  public $url_setup_phone = '';
}

?>