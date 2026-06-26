<?php

namespace WellnessLiving\Thoth\WlPay\Bank\Card\Widget;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;
use WellnessLiving\Wl\WlPayOwnerSid;

/**
 * Point to get saved bank cards of a user or a business.
 *
 * @method WlModelRequest get() Gets a list of saved bank cards.
 */
class WidgetSelectModel extends WlModelAbstract
{
  /**
   * List of saved bank cards.
   *
   * @get result
   * @var array
   */
  public $a_pay_card;

  /**
   * Payment method. One of {@link WlPayMethodSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_pay_method = 0;

  /**
   * Payment mode.
   *
   * @get get
   * @var int
   */
  public $id_pay_mode = 0;

  /**
   * Payment owner kind.
   * Must be {@link WlPayOwnerSid::BUSINESS} or {@link WlPayOwnerSid::USER}.
   *
   * @get get
   * @var int
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