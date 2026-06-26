<?php

namespace WellnessLiving\Wl\Business\Account\Subscription\AiAgent;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**/
class AiAgentSubscriptionModel extends WlModelAbstract
{
  /**
   * Discount extension option applied to the subscription during upgrade.
   *
   * @put result
   * @var array
   */
  public $a_discount_extend = [];

  /**
   * Returns available discount months for the business.
   *
   * `0` if discount is not available.
   *
   * @get result
   * @var int
   */
  public $i_discount_available = 0;

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
   * New subscription plan.
   *
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
   * @put post
   * @var int
   */
  public $id_upgrade = 0;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = '';

  /**
   * @delete get
   * @var string|null
   */
  public $text_unsubscribe_reason = null;
}

?>