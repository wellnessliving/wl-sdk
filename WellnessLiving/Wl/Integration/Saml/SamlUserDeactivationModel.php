<?php

namespace WellnessLiving\Wl\Integration\Saml;

use WellnessLiving\WlModelAbstract;

/**
 * Api for gets status of the user in business.
 */
class SamlUserDeactivationModel extends WlModelAbstract
{
  /**
   * List of saml identifier.
   *
   * @post post
   * @var string[]
   */
  public $a_id;

  /**
   * Key is saml identifier.
   *
   * Value is `true` if user is found and activated in business, `false` otherwise.
   *
   * @post result
   * @var bool[]
   */
  public $a_result;
}

?>