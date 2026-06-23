<?php

namespace WellnessLiving\Wl\Pay\Owner;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayOwnerSid;

/**
 * Gets the payment owner ID.
 *
 * @method WlModelRequest get() Returns information about payment owner.  Must be called before initiating any payment on behalf of a user, to determine the correct payment owner keys to pass to the payment form. Also indicates whether a family-account relationship exists (for example, a parent paying for a child), which affects how the payment form is pre-populated.
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
   * `true` if client pay only for self, `false` - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_pay_self_only = true;

  /**
   * Business key.
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
   */
  public $k_pay_owner = '0';

  /**
   * Key of the money owner.
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
   */
  public $uid = 0;
}

?>