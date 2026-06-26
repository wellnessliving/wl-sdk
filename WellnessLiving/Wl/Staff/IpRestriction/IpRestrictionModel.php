<?php

namespace WellnessLiving\Wl\Staff\IpRestriction;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPrivilegeRoleSid;

/**
 * IP Restriction API.
 *
 * @method WlModelRequest get() Determines if the logged-in user's IP is allowed by the passed list of IP restrictions.
 */
class IpRestrictionModel extends WlModelAbstract
{
  /**
   * List of IP restrictions to check against the current logged-in user.
   *
   * <dl>
   *   <dt>array `a_role`</dt>
   *   <dd>
   *     Array of arrays that contain the following keys:
   *     <dl>
   *       <dt>int `id_privilege_role`</dt>
   *       <dd>ID of a default system role from {@link WlPrivilegeRoleSid} that this IP restriction applies to.</dd>
   * 
   *       <dt>string `k_business_role`</dt>
   *       <dd>Key of a custom business role this IP restriction applies to.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `ip_allow`</dt>
   *   <dd>The IP address or IP range to allow.</dd>
   * </dl>
   * @get get
   * @var array[]
   */
  public $a_ip_restriction;

  /**
   * Indicates if the logged-in user's IP is allowed by the passed list of IP restrictions.
   *
   * @get result
   * @var bool
   */
  public $is_user_ip_allowed;

  /**
   * @get get
   * @var string
   */
  public $k_business;
}

?>