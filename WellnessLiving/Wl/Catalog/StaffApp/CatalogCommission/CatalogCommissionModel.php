<?php

namespace WellnessLiving\Wl\Catalog\StaffApp\CatalogCommission;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlCommissionTypeSid;

/**
 * List of available staff with commission.
 *
 * @method WlModelRequest get()
 */
class CatalogCommissionModel extends WlModelAbstract
{
  /**
	 * Default staff commission for current client. Includes: 
	 *
	 * <dl>
	 *   <dt>string `k_staff`</dt>
	 *   <dd>@deprecated Staff key.</dd>
	 * 
	 *   <dt>string `k_staff_pay`</dt>
	 *   <dd>Staff pay key.</dd>
	 * 
	 *   <dt>string `uid_staff`</dt>
	 *   <dd>User key of staff.</dd>
	 * </dl>
	 * @get result
	 * @var array[]
	 */
  public $a_commission_default = [];

  /**
	 * List of staff with commission. Includes: 
	 *
	 * <dl>
	 *   <dt>array `a_commission`</dt>
	 *   <dd>
	 *     List of staff commissions:
	 *     <dl>
	 *       <dt>string `f_rate`</dt>
	 *       <dd>Rate of staff commission.</dd>
	 * 
	 *       <dt>int `id_commission_type`</dt>
	 *       <dd>One of {@link WlCommissionTypeSid} constants.</dd>
	 * 
	 *       <dt>bool `is_default`</dt>
	 *       <dd><tt>true</tt> - if it is default commission for the staff,<tt>false</tt> - otherwise.</dd>
	 * 
	 *       <dt>string `html_commission`</dt>
	 *       <dd>Title of the commission.</dd>
	 * 
	 *       <dt>string `k_staff_pay`</dt>
	 *       <dd>Staff pay key.</dd>
	 *     </dl>
	 *   </dd>
	 * 
	 *   <dt>string `k_staff`</dt>
	 *   <dd>@deprecated Staff key. It's use `uid` instead of this field.</dd>
	 * 
	 *   <dt>string `html_name`</dt>
	 *   <dd>Name of staff.</dd>
	 * 
	 *   <dt>string `uid`</dt>
	 *   <dd>User key.</dd>
	 * </dl>
	 * @get result
	 * @var array[]
	 */
  public $a_staff = [];

  /**
	 * Business key.
	 *
	 * @get get
	 * @var string
	 *
	 */
  public $k_business;

  /**
	 * Customer login key.
	 *
	 * @get get
	 * @var string
	 *
	 */
  public $uid_customer;
}

?>