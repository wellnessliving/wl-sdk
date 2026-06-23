<?php

namespace WellnessLiving\Wl\Sms\Phone;

use WellnessLiving\WlModelAbstract;

/**
 * API endpoint to get phone number of a business.
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