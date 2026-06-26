<?php

namespace WellnessLiving\Thoth\WlPay\Bank\Ach\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;
use WellnessLiving\Wl\WlPayOwnerSid;

/**
 * Point to get additional data for bank account select widget.
 *
 * @method WlModelRequest get() Gets a list of saved bank account.
 */
class WidgetSelectModel extends WlModelAbstract
{
  /**
   * List of saved bank account.
   *
   * @get result
   * @var array
   */
  public $a_pay_bank;

  /**
   * Pay bank id.
   *
   * @get get
   * @var int
   */
  public $id_pay_bank;

  /**
   * Payment method.
   *
   * @get get
   * @var int
   * @see WlPayMethodSid
   */
  public $id_pay_method = 0;

  /**
   * Payment owner kind.
   *
   * @get get
   * @var int
   * @see WlPayOwnerSid
   */
  public $id_pay_owner = 0;

  /**
   * Business key.
   * `null` if use system business.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Currency key.
   *
   * @get get
   * @var string
   */
  public $k_currency = '0';

  /**
   * Payment owner.
   * Must be primary key of a business or a user.
   *
   * @get get
   * @var string
   */
  public $k_id = '0';

  /**
   * Location key.
   * `null` to use system-wide merchant.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>