<?php

namespace WellnessLiving\Wl\Pay\Owner;

use WellnessLiving\WlModelAbstract;

/**
 * Payment owner data model.
 */
class OwnerModel extends WlModelAbstract
{
  /**
   * Payment owner type.
   *
   * @get result
   * @var int
   */
  public $id_pay_owner = 0;

  /**
   * ID of the purchase owner.
   *
   * @get result
   * @var string
   */
  public $k_pay_owner = '0';

  /**
   * ID of user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>