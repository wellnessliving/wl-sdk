<?php

namespace WellnessLiving\Wl\Pay\Address;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayOwnerSid;

/**
 * Gets information about a user's payment addresses.
 *
 * @method WlModelRequest get() Gets user's payment addresses information.  Returns the list of saved payment addresses for the specified owner type and key, including address fields, country and region details, and the currently selected address. Returns `null` if the current user cannot edit bank accounts for the owner.
 */
class AddressModel extends WlModelAbstract
{
  /**
   * The payee's address information.
   *
   * A list of payment addresses belonging to the owner. Each element: 
   *
   * `null` if the current user has no access to the required information, or cannot edit the bank account.
   *
   * <dl>
   *   <dt>bool `is_selected`</dt>
   *   <dd>`true` if this address is currently selected, `false` otherwise.</dd>
   * 
   *   <dt>string|null `k_country`</dt>
   *   <dd>Country geo key. `null` if the country cannot be determined.</dd>
   * 
   *   <dt>string `k_pay_address`</dt>
   *   <dd>Payment address key. Primary key in the `rs_pay_address` table.</dd>
   * 
   *   <dt>string `k_region`</dt>
   *   <dd>Region geo key.</dd>
   * 
   *   <dt>string `s_city`</dt>
   *   <dd>City name.</dd>
   * 
   *   <dt>string|null `s_country`</dt>
   *   <dd>Country name. `null` if the country cannot be determined.</dd>
   * 
   *   <dt>string `s_country_code`</dt>
   *   <dd>Country abbreviation code, or an empty string if unavailable.</dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>Full name of the address owner.</dd>
   * 
   *   <dt>string `s_phone`</dt>
   *   <dd>Phone number.</dd>
   * 
   *   <dt>string `s_postal`</dt>
   *   <dd>Postal code.</dd>
   * 
   *   <dt>string|null `s_region`</dt>
   *   <dd>Region name.</dd>
   * 
   *   <dt>string|null `s_region_code`</dt>
   *   <dd>Region abbreviation code. `null` if the region cannot be determined.</dd>
   * 
   *   <dt>string `s_street1`</dt>
   *   <dd>First line of the street address.</dd>
   * 
   *   <dt>string `s_street2`</dt>
   *   <dd>Second line of the street address.</dd>
   * 
   *   <dt>string|null `text_mail`</dt>
   *   <dd>Email address of the owner. `null` if the owner is a business.</dd>
   * </dl>
   * @get result
   * @var array[]|null
   */
  public $a_pay_address;

  /**
   * The ID of the payment owner type.
   * One of {@link WlPayOwnerSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_pay_owner = 0;

  /**
   * Business key, where the payment is performed.
   * <tt>null</tt> if pay owner is not user.
   *
   * @get get
   * @var string
   */
  public $k_business = null;

  /**
   * The primary key of a payment owner.
   * This could be the business of the user depending on a {@link AddressModel::$id_pay_owner} value.
   *
   * @get get
   * @var string
   */
  public $k_id = '0';
}

?>