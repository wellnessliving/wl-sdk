<?php

namespace WellnessLiving\Wl\Business\AuthorizeSupport;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry for enter business after confirmation form staff member of franchisee.
 *
 * @method WlModelRequest get() Logs current user into business backend.  Refreshes the access cache for the current user and, once the location's business is  resolved, signs the user into that business backend as an authorized support session.
 */
class AuthorizeSupportEnterModel extends WlModelAbstract
{
  /**
 * The location key.
 *
 * @get get
 * @var string
 */
  public $k_location = '0';
}

?>