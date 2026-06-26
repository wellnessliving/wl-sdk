<?php

namespace WellnessLiving\Wl\Integration\FacilityAccess\Brivo;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for Facility Access Brivo subscription.
 *
 * @method WlModelRequest post()
 */
class UpgradeModel extends WlModelAbstract
{
  /**
   * Next billing date.
   *
   * @post result
   * @var string
   */
  public $dtl_date = '';

  /**
   * Business key.
   *
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>