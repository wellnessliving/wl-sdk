<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;

/**
 * Entry point to retrieve information about business subscription.
 */
class SubscriptionInfoModel extends WlModelAbstract
{
  /**
   * CID of the subscription information of which is requested.
   *
   * @get get
   * @var int
   */
  public $cid_subscription = 0;

  /**
   * Locale ID of the business which subscription information is requested for.
   *
   * @get result
   * @var int
   * @see LocaleSid
   */
  public $id_locale = 0;

  /**
   * Currently active plan ID for requested subscription.
   *
   * Collections:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Collections subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * API Access:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     API Access subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Subscription Plan:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Subscription Plan subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Go High Level:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Go High Level subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Door Access:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Door Access subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Book-a-Spot:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Book-a-Spot subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Achieve White Label App:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Achieve White Label App subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Zapier Integration:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Zapier Integration subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * CAASI:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     CAASI subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Customer Review Manager:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Customer Review Manager subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Mailchimp / Constant Contact:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Mailchimp / Constant Contact subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Constant Contact Integration:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Constant Contact Integration subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Mailchimp Integration:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Mailchimp Integration subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Rewards & Loyalty:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Rewards & Loyalty subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Business Success Coaching:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Business Success Coaching subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Direct Mail:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Direct Mail subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Presence:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Presence subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * FitLIVE:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     FitLIVE subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Message Center:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Message Center subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Zoom:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Zoom subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Finance:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Finance subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * FitBUILDER:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     FitBUILDER subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * FitVID on Demand:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     FitVID on Demand subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * FitZONE:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     FitZONE subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Marketing Suite:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Marketing Suite subscription plan ID.
   *   </dd>
   * </dl>
   * 
   * Forms:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Forms subscription plan ID.
   *   </dd>
   * </dl>
   * @get result
   * @var int
   */
  public $id_plan = 0;

  /**
   * Whether subscription is active.
   *
   * `true` if subscription is active, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_active = false;

  /**
   * Business key for which subscription information is requested.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';
}

?>