<?php

namespace WellnessLiving\Wl\Pay\Owner;

use WellnessLiving\WlModelAbstract;

/**
 * Gets the payment owner ID.
 */
class OwnerModel extends WlModelAbstract
{
  /**
   * The type of user for which transactions can be made. It is not necessary to set this variable.
   * This is one of the WlPayOwnerSid constants.
   *
   * @get result
   * @var int
   */
  public $id_pay_owner = 0;

  /**
   * The payment owner’s ID. This is used for financial transactions.
   *
   * @get result
   * @var string
   */
  public $k_pay_owner = '0';

  /**
   * The current user’s ID.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>