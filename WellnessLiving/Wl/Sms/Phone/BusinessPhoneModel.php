<?php

namespace WellnessLiving\Wl\Sms\Phone;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API endpoint to get phone number of a business.
 *
 * @method WlModelRequest get() Gets the phone number associated with a specific business.  Returns the dedicated sender phone number configured for the business's 2-Way SMS feature. Requires the `wl.business.phone` API privilege. Returns `null` or an empty value if the business has not configured a 2-Way SMS number.
 */
class BusinessPhoneModel extends WlModelAbstract
{
  /**
   * Key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Phone number of the business, which is added as sender for 2-Way SMS feature.
   *
   * `null` or an empty value if this business does not use this feature.
   *
   * @get result
   * @var string|null
   */
  public $text_phone_sender = null;
}

?>