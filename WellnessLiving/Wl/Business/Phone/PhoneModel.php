<?php

namespace WellnessLiving\Wl\Business\Phone;

use WellnessLiving\Core\Locale\LocaleSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages business phone number.
 * It is used to register business phone number or add bundle SID, or to get phone number of some business.
 *
 * @method WlModelRequest delete() Deletes business phone number from the system.  Used by WellnessLiving admins to decommission a business's SMS messaging service. After deletion, the business can no longer receive inbound SMS notifications. Admin privileges are required.
 * @method WlModelRequest get() Returns phone number(in locale format) of the business, if phone number does not exist returns empty line.  Used in the SMS settings UI to display the currently registered business phone number and its input mask. The locale is derived from the business's office country so the number is formatted correctly for that region.
 * @method WlModelRequest post() Registers business phone number in system.  Used when a business enables SMS messaging for the first time or replaces an existing number. Provisions a messaging service with the SMS provider so the business can receive inbound client messages. If the same number is already registered for this business, the call is a no-op.
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