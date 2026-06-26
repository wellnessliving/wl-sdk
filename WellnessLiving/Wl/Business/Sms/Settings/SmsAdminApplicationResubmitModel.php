<?php

namespace WellnessLiving\Wl\Business\Sms\Settings;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * SMS Admin Application Resubmission API.
 *
 * @method WlModelRequest post() Resubmits A2P Application.
 */
class SmsAdminApplicationResubmitModel extends WlModelAbstract
{
  /**
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>