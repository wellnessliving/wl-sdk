<?php

namespace WellnessLiving\Wl\Business\Account\Agreement;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Business Account Agreement API.
 *
 * @method WlModelRequest put() Discards the current agreement, and replaces it with a newly generated one.
 */
class AgreementModel extends WlModelAbstract
{
  /**
   * @put get
   * @var string
   */
  public $k_business;
}

?>