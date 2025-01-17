<?php

namespace WellnessLiving\Wl\Pay\Owner;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\WlPayOwnerSid;

/**
 * Gets the payment owner ID.
 */
class OwnerModel extends WlModelAbstract
{
  /**
     * The type of user for which transactions can be made (this property is optional).
     *
     * This is one of the {@link WlPayOwnerSid} constants.
     *
     * @get result
     * @var int
     */
  public $id_pay_owner;

  /**
     * Is client pay only for self. If parent pays for child this flag will be `false` for both.
     *
     * @get result
     * @var bool `true` if client pay only for self, `false` - otherwise.
     */
  public $is_pay_self_only = true;

  /**
     * Business key.
     *
     *
     * `null` if not passed.
     *
     * @get get
     * @var string|null
     */
  public $k_business = null;

  /**
     * The payment owner key. This is used for financial transactions.
     *
     * @get result
     * @var string
     *
     */
  public $k_pay_owner = '0';

  /**
     * Key of the money owner.
     *
     *
     *
     * @get result
     * @var string
     */
  public $k_pay_owner_money = '';

  /**
     * Key of a user to show information for.
     *
     * @get get
     * @var string
     *
     */
  public $uid = 0;
}

?>