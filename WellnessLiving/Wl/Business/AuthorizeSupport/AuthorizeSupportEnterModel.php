<?php

namespace WellnessLiving\Wl\Business\AuthorizeSupport;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry for enter business after confirmation form staff member of franchisee.
 *
 * @method WlModelRequest get() Logs current user into business backend.
 */
class AuthorizeSupportEnterModel extends WlModelAbstract
{
  /**
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>