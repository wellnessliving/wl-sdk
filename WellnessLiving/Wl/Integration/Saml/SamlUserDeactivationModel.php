<?php

namespace WellnessLiving\Wl\Integration\Saml;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves user statuses in the business.
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