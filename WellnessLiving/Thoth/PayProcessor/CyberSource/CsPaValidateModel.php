<?php

namespace WellnessLiving\Thoth\PayProcessor\CyberSource;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * This call retrieves and validates the authentication results from issuer and allows the merchant to proceed with
 * processing the payment
 *
 * @method WlModelRequest post()
 */
class CsPaValidateModel extends WlModelAbstract
{
  /**
   * Key of payment transaction that was previously created with {@link CsPaSetupModel}.
   *
   * @post post
   * @var string
   */
  public $k_pay_transaction;

  /**
   * Payer authentication transaction ID.
   *
   * @post post
   * @var string
   */
  public $s_transaction;
}

?>