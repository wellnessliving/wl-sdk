<?php

namespace WellnessLiving\Wl\Business\Sms\Settings;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * SMS Admin Brand Reset API.
 *
 * @method WlModelRequest post() Resets A2P Brand.
 */
class SmsAdminBrandResetModel extends WlModelAbstract
{
  /**
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>