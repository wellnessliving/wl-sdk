<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

use WellnessLiving\Core\Locale\LocaleSid;

/**
 * Base class for all subscription plans.
 *
 * ## Special Tags:
 * <dl>
 *   <dt><b>default</b></dt>
 *   <dd>Default subscription plan among all plans. Only one plan can be default.</dd>
 *   <dt><b>inactive</b></dt>
 *   <dd>Defines whether subscription plan considered that subscription would be inactive.</dd>
 *   <dt><b>legacy</b></dt>
 *   <dd>Defines whether subscription plan is legacy.</dd>
 *   <dt><b>rate</b></dt>
 *   <dd>Rate number of subscription plan among all plans.</dd>
 *   <dt><b>price-alarm</b></dt>
 *   <dd>Border price for notification. If overridden price of the payment was become less border price
 *     then notification about price overriding would be sent.</dd>
 *   <dt><b>price-month</b></dt>
 *   <dd>Default monthly payment amount for subscription plan.</dd>
 *   <dt><b>price-month-uk</b></dt>
 *   <dd>Default monthly payment amount for subscription plan only for businesses in {@link LocaleSid::UK}.</dd>
 *   <dt><b>title</b></dt>
 *   <dd>Default title of the subscription plan.</dd>
 *   <dt><b>trial</b></dt>
 *   <dd>
 *      Specifies that the subscription plan is a trial.
 *   </dd>
 * </dl>
 */
abstract class PlanSid
{
  }

?>