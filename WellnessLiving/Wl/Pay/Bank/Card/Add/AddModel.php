<?php

namespace WellnessLiving\Wl\Pay\Bank\Card\Add;

use WellnessLiving\WlModelAbstract;

/**
 * Adds a payment card to a user’s account.
 * The GET method retrieves an HTML code that contains the fields necessary to provide the information needed to
 * add the payment card.
 * The POST method will actually add the payment card.
 */
class AddModel extends WlModelAbstract
{
  
  /**
   * An array containing payment card information with the following fields:
   *
   * <dl>
   *   <dt>
   *     array <var>a_pay_address</var>
   *   </dt>
   *   <dd>
   *     Address information in the same format as returned by Pay\Address\ProfileModel:
   *     <dl><dt>bool <var>is_new</var></dt><dd><tt>true</tt> - add new address; <tt>false</tt> - use existing address.
   *     </dd>
   *     <dt>string <var>k_pay_address</var></dt><dd>Chosen payment address ID. It will be set even if the user decided
   *     to add new address.</dd>
   *     <dt>string <var>k_geo_country</var></dt><dd>Country ID.</dd>
   *     <dt>string <var>k_geo_region</var></dt><dd>Region ID.</dd>
   *     <dt>string <var>s_city</var></dt><dd>City name.</dd>
   *     <dt>string <var>s_name</var></dt><dd>User name.</dd>
   *     <dt>string <var>s_street1</var></dt><dd>First address line.</dd>
   *     <dt>string <var>s_street2</var></dt><dd>Second address line.</dd>
   *     <dt>string <var>s_phone</var></dt><dd>Phone number.</dd>
   *     <dt>string <var>s_postal</var></dt><dd>Postal code.</dd></dl>
   *   </dd>
   *   <dt>
   *     int <var>i_csc</var>
   *   </dt>
   *   <dd>
   *     The payment card’s security code, also known as the CVC or CVV.
   *   </dd>
   *   <dt>
   *     int <var>i_month</var>
   *   </dt>
   *   <dd>
   *     The number of the month when the payment card expires. 1=January and 12=December.
   *   </dd>
   *   <dt>
   *     int <var>i_year</var>
   *   </dt>
   *   <dd>
   *     The last two digits of the year when the payment card expires.
   *   </dd>
   *   <dt>
   *     string <var>s_name</var>
   *   </dt>
   *   <dd>
   *     The name as it appears on the payment card.
   *   </dd>
   *   <dt>
   *     string <var>s_number</var>
   *   </dt>
   *   <dd>
   *     The payment card number with no spaces or dashes.
   *   </dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_card_detail = [];

  /**
   * HTML form containing the fields required to add a card.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $html_widget = null;

  /**
   * The business ID number used internally by WellnessLiving.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The location ID.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The payment owner ID. This is different that the user ID, it can be found with the Pay\Owner\OwnerModel.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_pay_owner = '0';
}

?>