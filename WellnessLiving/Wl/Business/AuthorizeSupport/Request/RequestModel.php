<?php

namespace WellnessLiving\Wl\Business\AuthorizeSupport\Request;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point for enter to business location.
 *
 * @method WlModelRequest delete() Cancels request of access to location.  Withdraws a support agent's pending request for temporary access to a business location.  Notifies the staff member who would have responded to the request in real time and closes  out the underlying access request.
 * @method WlModelRequest get() Requests authorization of support employee to business location. Makes authorization if it is possible without special permission.  If the support employee already has access to the franchisor business, or the franchisor  business has open access enabled, authorization is granted immediately and the existing  access window is extended by one day. Otherwise, a request is created and every staff  member with the Manage Business permission on the franchisor business is notified in real  time; the caller receives `is_pending` as `true` until a staff member approves or rejects  the request.
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
 * Location key.
 *
 * @delete get
 * @get get
 * @var string
 */
  public $k_location = '0';

  /**
 * User key.
 *
 * @delete get
 * @get get
 * @var string
 */
  public $uid = '0';
}

?>