<?php

namespace WellnessLiving\Wl\Business\Sms\Settings;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * SMS Opt-Out API.
 *
 * @method WlModelRequest put() Updates SMS opt-out.
 */
class SmsOptOutModel extends WlModelAbstract
{
  /**
   * Indicates if the business has opted-out of all SMS features entirely.
   *
   * @put post
   * @var bool|null
   */
  public $is_opt_out = null;

  /**
   * @put get
   * @var string
   */
  public $k_business = '';
}

?>