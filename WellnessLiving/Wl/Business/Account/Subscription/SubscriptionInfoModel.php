<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Business\Account\Subscription\Achieve\AchieveSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\AiAgent\AiAgentSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Api\ApiSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Asset\AssetSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Base\BaseSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\BusinessCoach\BusinessCoachSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Collections\CollectionsSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Door\DoorSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Email\EmailSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Eml\ConstantContactSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Eml\MailchimpSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Finance\FinanceSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Fitbuilder\FitbuilderSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Fitlive\FitliveSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Fitvid\FitvidSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Fitzone\FitzoneSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\GoHighLevel\GoHighLevelSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\MarketingSuite\MarketingSuiteSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Postcard\PostcardSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\QuickBooks\QuickBooksSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Quiz\QuizSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Review\ReviewSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Reward\RewardSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Sms\SmsSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Website\WebsiteSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Zapier\ZapierSubscriptionSid;
use WellnessLiving\Wl\Business\Account\Subscription\Zoom\ZoomSubscriptionSid;

/**
 * Entry point to retrieve information about business subscription.
 *
 * @method WlModelRequest get() Gets information about subscription.  Used in the backend settings UI to read the current state of a business subscription (e.g., Achieve or another product). Returns whether the subscription is active, the current plan tier, and the business locale. Requires backend access to the business.
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
   * Depending on subscription type constant from one of {@link PlanSid} inheritors.
   *
   * Plans for `2331`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     QuickBooks Online subscription plan ID. One of {@link QuickBooksSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `1868`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     CAASI subscription plan ID. One of {@link AiAgentSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `1250`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Collections subscription plan ID. One of {@link CollectionsSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `1965`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Mailchimp / Constant Contact subscription plan ID. One of {@link EmailSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `2166`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Constant Contact Integration subscription plan ID. One of {@link ConstantContactSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `2165`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Mailchimp Integration subscription plan ID. One of {@link MailchimpSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `1838`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Marketing Suite subscription plan ID. One of {@link MarketingSuiteSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `857`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Message Center subscription plan ID. One of {@link SmsSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `858`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Achieve White Label App subscription plan ID. One of {@link AchieveSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `861`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Subscription Plan subscription plan ID. One of {@link BaseSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `1225`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Finance subscription plan ID. One of {@link FinanceSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `1964`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Go High Level subscription plan ID. One of {@link GoHighLevelSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `1349`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Zapier Integration subscription plan ID. One of {@link ZapierSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `986`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     FitLIVE subscription plan ID. One of {@link FitliveSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `862`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Direct Mail subscription plan ID. One of {@link PostcardSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `2225`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Business Success Coaching subscription plan ID. One of {@link BusinessCoachSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `1370`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Door Access subscription plan ID. One of {@link DoorSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `883`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     FitBUILDER subscription plan ID. One of {@link FitbuilderSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `886`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Rewards & Loyalty subscription plan ID. One of {@link RewardSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `1266`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     API Access subscription plan ID. One of {@link ApiSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `875`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     FitVID on Demand subscription plan ID. One of {@link FitvidSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `1133`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Forms subscription plan ID. One of {@link QuizSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `863`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Presence subscription plan ID. One of {@link WebsiteSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `864`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Zoom subscription plan ID. One of {@link ZoomSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `884`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     FitZONE subscription plan ID. One of {@link FitzoneSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `885`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Customer Review Manager subscription plan ID. One of {@link ReviewSubscriptionSid} constants.
   *   </dd>
   * </dl>
   * 
   * Plans for `882`:
   * <dl>
   *   <dt>int `id_plan`</dt>
   *   <dd>
   *     Book-a-Spot subscription plan ID. One of {@link AssetSubscriptionSid} constants.
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