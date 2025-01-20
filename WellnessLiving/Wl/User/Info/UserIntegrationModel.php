<?php

namespace WellnessLiving\Wl\User\Info;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that return the information about the integrations the user is connected to.
 */
class UserIntegrationModel extends WlModelAbstract
{
  /**
   * Information about the integrations the user is connected to. The information returned has the following structure:
   * <dl>
   *  <dt>bool <var>is_classpass</var></dt>
   *  <dd>`true` if user use the Classpass integration, `false` - otherwise.</dd>
   *  <dt>bool <var>is_gympass</var></dt>
   *  <dd>`true` if user use the Gympass integration, `false` - otherwise.</dd>
   *  <dt>bool <var>is_reserve_with_google</var></dt>
   *  <dd>`true` if user use the Reserve With Google integration, `false` - otherwise.</dd>
   * </dl>
   * `null` if the user does not belong to any integration.
   *
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