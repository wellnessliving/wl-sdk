<?php

namespace WellnessLiving\Wl\Pay\Bank\Card;

use WellnessLiving\Core\a\ACardSystemSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets information about any payment cards belonging to a user.
 *
 * @method WlModelRequest get() Retrieves information about user's bank cards.  Returns the list of saved payment cards for the specified user and business, including card number fragment, expiry date, card system, holder name, and default status. Also returns whether new cards can be added.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of bank cards.
   * The array keys are the card `k_pay_bank` IDs.
   * Each element has the following keys:
   *
   * <dl>
   *   <dt>int `i_month`</dt>
   *   <dd>The month when the payment card expires, represented by a number (1=January and 12=December).</dd>
   * 
   *   <dt>int `i_year`</dt>
   *   <dd>The last two digits of the year when the payment card expires.</dd>
   * 
   *   <dt>int `id_card_system`</dt>
   *   <dd>The card system ID. This is one of the {@link ACardSystemSid} constants.</dd>
   * 
   *   <dt>bool `is_autopay`</dt>
   *   <dd>
   *     If `true`, this card backs at least one active autopay membership or package.
   * If `false`, no active autopay membership or package is pinned to this card.
   *   </dd>
   * 
   *   <dt>bool `is_default`</dt>
   *   <dd>If `true`, then this card is the user default card.
   * If `false`, then this isn't the user default card.</dd>
   * 
   *   <dt>string `k_pay_address`</dt>
   *   <dd>The payment address ID. This refers to a physical address associated with a payment card.</dd>
   * 
   *   <dt>string `k_pay_bank`</dt>
   *   <dd>The payment method ID. Each payment card for each user will have its own ID.</dd>
   * 
   *   <dt>string `text_name_card`</dt>
   *   <dd>
   *     The payment card descriptor. This is typically the company name and the last 4 digits of the card
   * (for example, visa-5903).
   *   </dd>
   * 
   *   <dt>string `text_name_holder`</dt>
   *   <dd>The name of the card owner as it appears on the card.</dd>
   * 
   *   <dt>string `text_number`</dt>
   *   <dd>
   *     A portion of the payment card number, used to identify the card.
   * This is typically the last 4 digits of the card number.
   *   </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_bank_card = [];

  /**
   * List of bank cards.
   * Duplicate of {@link ListModel::$a_bank_card} as a flat indexed array.
   *
   * <dl>
   *   <dt>int `i_month`</dt>
   *   <dd>The month when the payment card expires, represented by a number (1=January and 12=December).</dd>
   * 
   *   <dt>int `i_year`</dt>
   *   <dd>The last two digits of the year when the payment card expires.</dd>
   * 
   *   <dt>int `id_card_system`</dt>
   *   <dd>The card system ID. This is one of the {@link ACardSystemSid} constants.</dd>
   * 
   *   <dt>bool `is_autopay`</dt>
   *   <dd>
   *     If `true`, this card backs at least one active autopay membership or package.
   * If `false`, no active autopay membership or package is pinned to this card.
   *   </dd>
   * 
   *   <dt>bool `is_default`</dt>
   *   <dd>If `true`, then this card is the user default card.
   * If `false`, then this isn't the user default card.</dd>
   * 
   *   <dt>string `k_pay_address`</dt>
   *   <dd>The payment address ID. This refers to a physical address associated with a payment card.</dd>
   * 
   *   <dt>string `k_pay_bank`</dt>
   *   <dd>The payment method ID. Each payment card for each user will have its own ID.</dd>
   * 
   *   <dt>string `text_name_card`</dt>
   *   <dd>
   *     The payment card descriptor. This is typically the company name and the last 4 digits of the card
   * (for example, visa-5903).
   *   </dd>
   * 
   *   <dt>string `text_name_holder`</dt>
   *   <dd>The name of the card owner as it appears on the card.</dd>
   * 
   *   <dt>string `text_number`</dt>
   *   <dd>
   *     A portion of the payment card number, used to identify the card.
   * This is typically the last 4 digits of the card number.
   *   </dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_list = [];

  /**
   * Whether new card can be added.
   *
   * `true` if new cards can be added.
   * `false` if new cards can not be added.
   *
   * @get result
   * @var bool
   */
  public $can_add = false;

  /**
   * Whether the client is allowed to remove their own saved credit cards.
   *
   * `true` if the client can remove their own saved credit cards.
   * `false` if the client must contact the business to remove a saved credit card.
   *
   * @get result
   * @var bool
   */
  public $can_remove_self = false;

  /**
   * Whether the feature "client is allowed to remove their own saved credit cards" has been released.
   *
   * `true` if the feature has been released.
   * `false` if the feature has not been released.
   *
   * @get result
   * @var bool
   */
  public $has_remove_self = false;

  /**
   * ID of current business.
   *
   * @get get
   * @var string
   */
  public $k_business = null;

  /**
   * Location to show information for.
   *
   * <tt>0</tt> to use user's home location.
   *
   * @get get
   * @var string
   */
  public $k_location = null;

  /**
   * ID of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid = null;
}

?>