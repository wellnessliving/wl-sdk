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
   * @get result
   * @var int
   */
<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Collections subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    API Access subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Subscription Plan subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Go High Level subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Door Access subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Book-a-Spot subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Achieve White Label App subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Zapier Integration subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    CAASI subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Customer Review Manager subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Mailchimp / Constant Contact subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Constant Contact Integration subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Mailchimp Integration subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Rewards & Loyalty subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Business Success Coaching subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Direct Mail subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Presence subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    FitLIVE subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Message Center subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Zoom subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Finance subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    FitBUILDER subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    FitVID on Demand subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    FitZONE subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Marketing Suite subscription plan ID.
  </dd>
</dl>

<dl>
  <dt>int `id_plan`</dt>
  <dd>
    Forms subscription plan ID.
  </dd>
</dl>
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