<?php

namespace WellnessLiving\Wl\Pay\Bank\Card\Add;

use WellnessLiving\WlModelAbstract;

/**
 * Interface to create bank card of user or business.
 */
class AddModel extends WlModelAbstract
{
  
  /**
   * Bank card data:
   *
   * <dl>
   *   <dt>
   *     array <var>a_pay_address</var>
   *   </dt>
   *   <dd>
   *     Payment address for {@link RsPayAddressSelectWidget} address edit widget:
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
   *     Card CSC code.
   *   </dd>
   *   <dt>
   *     int <var>i_month</var>
   *   </dt>
   *   <dd>
   *     Card expiration month.
   *   </dd>
   *   <dt>
   *     int <var>i_year</var>
   *   </dt>
   *   <dd>
   *     Card expiration year.
   *   </dd>
   *   <dt>
   *     string <var>s_name</var>
   *   </dt>
   *   <dd>
   *     Card nickname.
   *   </dd>
   *   <dt>
   *     string <var>s_number</var>
   *   </dt>
   *   <dd>
   *     Card number.
   *   </dd>
   * </dl>
   *
   * @post post
   * @var array
   */
  public $a_card_detail = [];

  /**
   * Code of bank card widget.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get result
   * @var string|null
   */
  public $html_widget = null;

  /**
   * Business ID.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * Location ID.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Bank card owner ID.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_pay_owner = '0';
}

?>