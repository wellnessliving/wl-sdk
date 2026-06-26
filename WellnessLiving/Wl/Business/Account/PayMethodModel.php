<?php

namespace WellnessLiving\Wl\Business\Account;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Allows to get recurrent default payment method for business.
 *
 * @method WlModelRequest get() Changes payment schedule according to request.
 */
class PayMethodModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Returns default recurrent payment source for business.
   *
   * <tt>null</tt> if source not managed and automatic payments for business are not available.
   *
   * @get result
   * @var string|null
   */
  public $k_pay_recurrent;
}

?>