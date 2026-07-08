<?php

namespace WellnessLiving\Wl\Service\ServiceList;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Versioned list of appointment types with support for loading all services.
 *
 * @method WlModelRequest get() Returns list of appointment type in the business.  Gets key of the business and returns all available appointment types with their names and categories.
 */
class List75Model extends WlModelAbstract
{
  /**
   * Appointment types list:
   *
   * <dl>
   *   <dt>bool `hide_application`</dt>
   *   <dd>
   *     Whether service will be hidden in the White Label mobile application.
   *  <tt>true</tt> means that service will not be displayed, <tt>false</tt> otherwise.
   *   </dd>
   * 
   *   <dt>bool `is_active`</dt>
   *   <dd>Whether appointment type is active.</dd>
   * 
   *   <dt>string `k_service`</dt>
   *   <dd>Appointment type identifier, primary key.</dd>
   * 
   *   <dt>string `k_service_category`</dt>
   *   <dd>Appointment type category identifier, primary key.</dd>
   * 
   *   <dt>string `text_category`</dt>
   *   <dd>Appointment type category name.</dd>
   * 
   *   <dt>string `text_service`</dt>
   *   <dd>Appointment type name.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_service = null;

  /**
   * Whether to return franchisee-created appointment types (if business is franchisor).
   * <tt>true</tt> to include franchisee-created appointment types.
   *
   * @get get
   * @var bool
   */
  public $is_franchise = false;

  /**
   * Business key, primary key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>