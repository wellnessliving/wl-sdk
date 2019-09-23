<?php

namespace WellnessLiving\Wl\Pay\Address;

use WellnessLiving\WlModelAbstract;

class AddressModel extends WlModelAbstract
{
  /**
   * Object result
   *
   * @get result
   * @var null
   */
  public $a_pay_address = null;

  /**
   * ID of payment owner type.
   * One of {@link RsPayOwnerSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_pay_owner = 0;

  /**
   * Primary key of a payment owner.
   * May be business of user depending on a {@link \Wl\Pay\Address\AddressApi::$id_pay_owner} value.
   *
   * @get get
   * @var string
   */
  public $k_id = '0';
}
