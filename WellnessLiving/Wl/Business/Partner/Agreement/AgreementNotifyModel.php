<?php

namespace WellnessLiving\Wl\Business\Partner\Agreement;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Agreement notify API for partner program.
 *
 * @method WlModelRequest post() Sets that a staff got acquainted with changes in partner program agreement.
 */
class AgreementNotifyModel extends WlModelAbstract
{
  /**
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';
}

?>