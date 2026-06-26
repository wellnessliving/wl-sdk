<?php

namespace WellnessLiving\Wl\Business\Sms\Settings;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * SMS Admin Status Change API.
 *
 * @method WlModelRequest post() Resets A2P Brand.
 */
class SmsAdminStatusChangeModel extends WlModelAbstract
{
  /**
   * The new registration status to set.
   *
   * @post post
   * @var int|null
   */
  public $id_registration_status = null;

  /**
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>