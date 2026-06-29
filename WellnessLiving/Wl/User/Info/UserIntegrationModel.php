<?php

namespace WellnessLiving\Wl\User\Info;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An endpoint that return the information about the integrations the user is connected to.
 *
 * @method WlModelRequest get() Retrieves information about the user belongs to certain integrations.  Returns which third-party booking integrations (Classpass, Gympass, Reserve With Google) the user is currently connected to within the given business context. Returns `null` when the user has no active integration memberships.
 */
class UserIntegrationModel extends WlModelAbstract
{
  /**
   * Information about the integrations the user is connected to. The information returned has the following structure:
   * 
   * `null` if the user does not belong to any integration.
   *
   * <dl>
   *   <dt>bool `is_classpass`</dt>
   *   <dd>`true` if user use the Classpass integration, `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_gympass`</dt>
   *   <dd>`true` if user use the Gympass integration, `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_reserve_with_google`</dt>
   *   <dd>`true` if user use the Reserve With Google integration, `false` - otherwise.</dd>
   * </dl>
   * @get result
   * @var array|null
   */
  public $a_integration = null;

  /**
   * The key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of the user.
   *
   * @get get
   * @var string
   */
  public $uid = '';
}

?>