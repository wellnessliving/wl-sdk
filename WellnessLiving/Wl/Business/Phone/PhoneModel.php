<?php

namespace WellnessLiving\Wl\Business\Phone;

use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;

/**
 * Manages business phone number.
 * It is used to register business phone number or add bundle SID, or to get phone number of some business.
 */
class PhoneModel extends WlModelAbstract
{
  /**
   * Locale corresponding to the business' address country. One of {@link LocaleSid} constants.
   * Note that this may not be the same as the business' locale, if the business is misconfigured and has an address
   * country that is outside its locale.
   *
   * @get result
   * @var int
   */
  public $id_locale;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Business phone number(in locale format).
   * Used to receive SMS notifications from clients. Can be `null` during bundle SID saving.
   *
   * @delete get
   * @get result
   * @post get
   * @var string|null
   */
  public $text_phone = null;

  /**
   * Business phone number mask.
   *
   * @get result
   * @var string
   */
  public $text_phone_mask;
}

?>