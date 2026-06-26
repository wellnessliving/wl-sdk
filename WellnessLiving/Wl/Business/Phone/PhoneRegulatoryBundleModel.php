<?php

namespace WellnessLiving\Wl\Business\Phone;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages regulatory bundle SID from Twilio (located in the Regulatory Bundle they have submitted).
 * It is used to add regulatory bundle SID.
 *
 * @method WlModelRequest post() Adds or changes regulatory bundle SID.
 */
class PhoneRegulatoryBundleModel extends WlModelAbstract
{
  /**
   * Business key.
   *
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Regulatory bundle SID from Twilio (located in the Regulatory Bundle they have submitted).
   * Used for australian businesses currently.
   *
   * @post get
   * @var string|null
   */
  public $s_id_regulatory_bundle = null;
}

?>