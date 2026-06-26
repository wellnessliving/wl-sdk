<?php

namespace WellnessLiving\Wl\Business\AuthorizeSupport\Request;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point for enter to business location.
 *
 * @method WlModelRequest delete() Cancels request of access to location.
 * @method WlModelRequest get() Requests authorization of support employee to business location. Makes authorization if it is possible without special permission.
 */
class RequestModel extends WlModelAbstract
{
  /**
   * <tt>true</tt> - support must wait permission from franchisee. <tt>false</tt> - no need to wait; authorisation is already done.
   *
   * @get result
   * @var bool
   */
  public $is_pending;

  /**
   * @delete get
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * @delete get
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>