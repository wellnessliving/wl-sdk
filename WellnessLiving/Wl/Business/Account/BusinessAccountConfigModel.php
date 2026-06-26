<?php

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to modify business payment schedule.
 *
 * @method WlModelRequest post()
 */
class BusinessAccountConfigModel extends WlModelAbstract
{
  /**
   * List of subscription settings.
   *
   * Keys are CID of the subscription type and values are arrays of the payments for this subscription required for
   * {@link \Wl\Business\Account\Subscription\SubscriptionWrite::gather()}
   *
   * @post post
   * @var array
   */
  public $a_subscription = [];

  /**
   * Trial details to be modified.
   *
   * Array with next structure if trial details should be modified:
   *
   * Empty array if trial details should not be modified.
   *
   * <dl>
   *   <dt>string `dl_expire`</dt>
   *   <dd>New expiration date of the business trial period.</dd>
   * 
   *   <dt>int `eid_expire`</dt>
   *   <dd>Action which should be done after trial expiration.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_trial_detail = [];

  /**
   * Additional tax amount value.
   *
   * @post post
   * @var string
   */
  public $f_tax;

  /**
   * Number of days to show alert about failed payment.
   *
   * @post post
   * @var int
   */
  public $i_alert_fee = 0;

  /**
   * Number of days after which business should be terminated.
   *
   * @post post
   * @var int
   */
  public $i_alert_termination = 0;

  /**
   * Whether alert about failed payment should be shown to business owner.
   *
   * @post post
   * @var bool
   */
  public $is_alert_fee = false;

  /**
   * Whether alert about business future termination should be shown to business owner.
   *
   * @post post
   * @var bool
   */
  public $is_alert_termination = false;

  /**
   * Whether business local currency should be used instead of system currency.
   *
   * @post post
   * @var bool
   */
  public $is_currency_locale = false;

  /**
   * Whether additional taxes should be used.
   *
   * @post post
   * @var bool
   */
  public $is_tax = false;

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Reason why subscription changes are rejected. Uses to show to a user who operates with subscription settings.
   * When it is set it means that subscription changes are rejected and was not saved.
   *
   * `null` if not initialized yet.
   *
   * @post result
   * @var string|null
   */
  public $text_reject = null;
}

?>