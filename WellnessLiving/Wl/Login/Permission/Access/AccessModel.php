<?php

namespace WellnessLiving\Wl\Login\Permission\Access;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Class for check if user can make class reservation.
 *
 * @method WlModelRequest get()
 */
class AccessModel extends WlModelAbstract
{
  /**
   * Schedule access information. Has structure: 
   *
   * <dl>
   *   <dt>string `k_location`</dt>
   *   <dd>Location key, where class or service occurs.</dd>
   * 
   *   <dt>string `k_class`</dt>
   *   <dd>Class key.</dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>Login promotion key if need to check access for specific promotion.</dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>Resource key.</dd>
   * 
   *   <dt>string `k_service`</dt>
   *   <dd>Service key.</dd>
   * 
   *   <dt>string `s_deny`</dt>
   *   <dd>Login permission error code.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_access;

  /**
   * Schedule item information. Has structure: 
   *
   * <dl>
   *   <dt>string `k_location`</dt>
   *   <dd>Location key, where class or service occurs.
   *</dd>
   * 
   *   <dt>string `k_class`</dt>
   *   <dd>Class key.
   *</dd>
   * 
   *   <dt>string `k_login_promotion`</dt>
   *   <dd>
   *     Login promotion key if need to check access for specific promotion.
   *
   *   </dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>Resource key.
   *</dd>
   * 
   *   <dt>string `k_service`</dt>
   *   <dd>Service key.
   *</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_schedule;

  /**
   * Time when class or service occurs: 
   *
   * <dl>
   *   <dt>int `i_hour`</dt>
   *   <dd>Number of hours.</dd>
   * 
   *   <dt>int `i_minute`</dt>
   *   <dd>Number of minutes.</dd>
   * 
   *   <dt>bool `is_am`</dt>
   *   <dd>Whether time in AM or PM.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_time;

  /**
   * Date when class or service occurs.
   *
   * @get get
   * @var string
   */
  public $dt_date;

  /**
   * Whether user is traveller in current business.
   *
   * @get result
   * @var bool
   */
  public $is_traveller;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * User key.
   *
   * @get get
   * @var string
   */
  public $uid;
}

?>