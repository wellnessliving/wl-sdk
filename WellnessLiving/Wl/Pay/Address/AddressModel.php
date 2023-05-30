<?php

namespace WellnessLiving\Wl\Pay\Address;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlPayOwnerSid;

/**
 * An endpoint that gets information about a user's payment addresses.
 */
class AddressModel extends WlModelAbstract
{
  /**
   * The payee's address information.
   *
   * @get result
   * @var null
   */
  public $a_pay_address = null;

  /**
   * The ID of the payment owner type.
   * One of {@link WlPayOwnerSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_pay_owner = 0;

  /**
   * The primary key of a payment owner.
   * This could be the business of the user depending on a {@link \WellnessLiving\Wl\Pay\Address\AddressModel::$id_pay_owner} value.
   *
   * @get get
   * @var string
   */
  public $k_id = '0';
}
