<?php

namespace WellnessLiving\Wl\Integration\Saml;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves user statuses in the business.
 *
 * @method WlModelRequest post() Gets status of the user in business for given list of identifiers.  Accepts a list of SAML identifier strings and returns a map of each identifier to a boolean indicating whether the corresponding user is active in their associated business. Requests with too many invalid identifiers are rate-limited with a penalty block mechanism.
 */
class SamlUserDeactivationModel extends WlModelAbstract
{
  /**
   * A list of SAML identifiers.
   *
   * @post post
   * @var string[]
   */
  public $a_id;

  /**
   * The key of the SAML identifier.
   *
   * This value is `true` if an active user is found in the business, `false` if otherwise.
   *
   * @post result
   * @var bool[]
   */
  public $a_result;
}

?>