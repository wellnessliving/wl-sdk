<?php

namespace WellnessLiving\Wl\Pay\Bank\Card\Add;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;
use WellnessLiving\Wl\Pay\Owner\OwnerModel;

/**
 * Adds a payment card to a user’s account.
 * The GET method retrieves an HTML code that contains the fields necessary to provide the information needed to
 * add the payment card.
 * The POST method will actually add the payment card.
 *
 * This endpoint using captcha check.
 * To pass captcha need study the documentation by captcha API, there you will find that you need to send a captcha for a specific action.
 * For this API an action is {@link BusinessPaymentCaptcha::CID}.
 *
 * @method WlModelRequest delete() Deletes saved card.  Removes the payment card identified by `$k_pay_bank` from the specified business, permanently deleting the stored card record.
 * @method WlModelRequest get() Gets code of bank card widget.  Returns an HTML snippet containing the card entry form rendered by the server-side widget for the given payment owner. This method is deprecated; prefer building the card widget on the client side.
 * @method WlModelRequest post() Saves new bank card.  Validates the payment owner and business, then saves the new card details provided in `$a_card_detail` and optionally sets the card as the default recurring payment source.
 */
class AddModel extends WlModelAbstract
{
  /**
   * An array containing payment card information with the following fields:
   *
   * <dl>
   *   <dt>array `a_pay_address`</dt>
   *   <dd>
   *     Address information:
   *     <dl>
   *       <dt>bool `is_new`</dt>
   *       <dd>`true` - add new address. `false` - use existing address.</dd>
   * 
   *       <dt>string `k_pay_address`</dt>
   *       <dd>The chosen payment address ID. THis will be set even if the user decided to add a new address.</dd>
   * 
   *       <dt>string `k_geo_country`</dt>
   *       <dd>The country key.</dd>
   * 
   *       <dt>string `k_geo_region`</dt>
   *       <dd>The region key.</dd>
   * 
   *       <dt>string `s_city`</dt>
   *       <dd>The city name.</dd>
   * 
   *       <dt>string `s_name`</dt>
   *       <dd>The user's name.</dd>
   * 
   *       <dt>string `s_street1`</dt>
   *       <dd>The first address line.</dd>
   * 
   *       <dt>string `s_street2`</dt>
   *       <dd>The second address line.</dd>
   * 
   *       <dt>string `s_phone`</dt>
   *       <dd>The phone number.</dd>
   * 
   *       <dt>string `s_postal`</dt>
   *       <dd>The postal code.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `i_csc`</dt>
   *   <dd>The payment card security code, also known as the CVC or CVV.</dd>
   * 
   *   <dt>int `i_month`</dt>
   *   <dd>The number of the month when the payment card expires. 1=January and 12=December.</dd>
   * 
   *   <dt>int `i_year`</dt>
   *   <dd>The last two digits of the year when the payment card expires.</dd>
   * 
   *   <dt>int `id_pay_actor`</dt>
   *   <dd>Pay actor id.</dd>
   * 
   *   <dt>string `k_pay_bank`</dt>
   *   <dd>
   *     Key of existing payment source in case of editing. 
   * Empty if new pay source is being added.
   *   </dd>
   * 
   *   <dt>string `s_name`</dt>
   *   <dd>The name as it appears on the payment card.</dd>
   * 
   *   <dt>string `s_number`</dt>
   *   <dd>The payment card number with no spaces or dashes.</dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_card_detail = [];

  /**
   * The HTML form containing the fields required to add a card.
   *
   * @get result
   * @var string
   */
  public $html_widget;

  /**
   * The business key number used internally by WellnessLiving.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The location key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * Pay bank key to delete.
   *
   * @delete get
   * @var string
   */
  public $k_pay_bank = '0';

  /**
   * The payment owner ID. This is different from the user ID. It can be found with
   * the {@link OwnerModel}.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_pay_owner = '0';
}

?>