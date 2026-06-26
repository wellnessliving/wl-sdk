<?php

namespace WellnessLiving\Wl\Business\Policy;

use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about services data used for service select on business policy `Add/Edit penalty` panel.
 *
 * @method WlModelRequest get() Gets available services data of a business.
 */
class CancelPolicyServiceModel extends WlModelAbstract
{
  /**
   * Key of a business penalty policy.
   *
   * @get get
   * @var int|null
   */
  public $i_index = null;

  /**
   * Whether all services are selected.
   *
   * `null` if not initialized yet.
   *
   * @get result
   * @var bool|null
   */
  public $is_all_service_selected = null;

  /**
   * Business penalty policy to edit in json format. 
   *
   * <dl>
   *   <dt>array `a_class`</dt>
   *   <dd>Class keys.</dd>
   * 
   *   <dt>array `a_event`</dt>
   *   <dd>Class keys.</dd>
   * 
   *   <dt>array `a_login_type`</dt>
   *   <dd>Login types.</dd>
   * 
   *   <dt>array `a_resource`</dt>
   *   <dd>Resources keys.</dd>
   * 
   *   <dt>array `a_service`</dt>
   *   <dd>Service keys.</dd>
   * 
   *   <dt>int `i_blame`</dt>
   *   <dd>Quantity of penalty visits.</dd>
   * 
   *   <dt>int `i_cancel_period`</dt>
   *   <dd>Cancellation period.</dd>
   * 
   *   <dt>int `i_charge_measure`</dt>
   *   <dd>Charge measure.</dd>
   * 
   *   <dt>int `id_blame`</dt>
   *   <dd>
   *     Defines if client has "Late cancel" or "No shows" sessions. One of
   * {@link BlameSid} constants.
   *   </dd>
   * 
   *   <dt>int `id_cancel_period`</dt>
   *   <dd>Duration ID. One of {@link ADurationSid} constants.</dd>
   * 
   *   <dt>int `id_charge`</dt>
   *   <dd>
   *     Client's charge if he has "Late cancel" or "No shows" sessions. One of
   * {@link ChargeSid} constants.
   *   </dd>
   * 
   *   <dt>int `id_charge_measure`</dt>
   *   <dd>Percent or money sign.</dd>
   * 
   *   <dt>bool `is_appointment_all`</dt>
   *   <dd>`true` - all appointments are selected, `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_class_all`</dt>
   *   <dd>`true` - all classes are selected, `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_enable_cancel_charge`</dt>
   *   <dd>`true` - allow charge for "Late cancel" or "No shows" sessions,
   * `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_event_all`</dt>
   *   <dd>`true` - all events are selected, `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_login_type_all`</dt>
   *   <dd>`true` - all login types are selected, `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_resource_all`</dt>
   *   <dd>`true` - all assets are selected, `false` - otherwise.</dd>
   * 
   *   <dt>bool `is_service_all`</dt>
   *   <dd>`true` - all services are selected, `false` - otherwise.</dd>
   * </dl>
   * @get get
   * @var string
   */
  public $json_penalty_edit = '';

  /**
   * Services data.
   *
   * @get result
   * @var string
   */
  public $json_service_all = '';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>