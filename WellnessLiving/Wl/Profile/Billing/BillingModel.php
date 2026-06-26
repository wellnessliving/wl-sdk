<?php

namespace WellnessLiving\Wl\Profile\Billing;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about billing page display properties.
 *
 * @method WlModelRequest get() Retrieves information about billing page display properties.
 */
class BillingModel extends WlModelAbstract
{
  /**
   * Whether to show account information.
   *
   * @get result
   * @var bool
   */
  public $is_show_account;

  /**
   * Whether to show credit card and ACH account list.
   *
   * @get result
   * @var bool
   */
  public $is_show_transaction;

  /**
   * ID of a business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = 0;

  /**
   * Payer name in case if user is not self paid, <tt>null</tt> otherwise.
   *
   * @get result
   * @var string|null
   */
  public $s_payer_name;

  /**
   * UID to retrieve information about.
   *
   * @get get
   * @var string
   */
  public $uid = 0;

  /**
   * ID of a payer user to show logo for.
   *
   * @get result
   * @var string
   */
  public $uid_payer;
}

?>