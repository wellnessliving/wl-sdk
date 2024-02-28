<?php

namespace WellnessLiving\Wl\Pay\Bank\Card;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that gets information about any payment cards belonging to a user.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of bank cards.
   * The array keys are the card `k_pay_bank` IDs.
   * Each element has the following keys:
   * <dl>
   *   <dt>int <var>i_month</var></dt>
   *   <dd>The month when the payment card expires, represented by a number (1=January and 12=December).</dd>
   *   <dt>int <var>i_year</var></dt>
   *   <dd>The last two digits of the year when the payment card expires.</dd>
   *   <dt>int <var>id_card_system</var></dt>
   *   <dd>The card system ID. This is one of the {@link \WellnessLiving\Core\a\ACardSystemSid} constants.</dd>
   *   <dt>bool <var>is_default</var></dt>
   *   <dd>
   *     If `true`, then this card is the user default card.
   *     If `false`, then this isn't the user default card.
   *   </dd>
   *   <dt>string <var>k_pay_address</var></dt>
   *   <dd>The payment address ID. This refers to a physical address associated with a payment card.</dd>
   *   <dt>string <var>k_pay_bank</var></dt>
   *   <dd>The payment method ID. Each payment card for each user will have its own ID.</dd>
   *   <dt>string <var>text_name_card</var></dt>
   *   <dd>
   *     The payment card descriptor. This is typically the company name and the last 4 digits of the card
   *     (for example, visa-5903).
   *   </dd>
   *   <dt>string <var>text_name_holder</var></dt>
   *   <dd>The name of the card owner as it appears on the card.</dd>
   *   <dt>string <var>text_number</var></dt>
   *   <dd>
   *     A portion of the payment card number, used to identify the card.
   *     This is typically the last 4 digits of the card number.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_bank_card = [];

  /**
   * List of bank cards.
   * Duplicate of the {@link \WellnessLiving\Wl\Pay\Bank\Card\ListModel::$a_bank_card}.
   *
   * @get result
   * @var array
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
   * ID of current business.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Location to show information for.
   *
   * <tt>0</tt> to use user's home location.
   *
   * @get get
   * @var string
   */
  public $k_location;

  /**
   * ID of a user to show information for.
   *
   * @get get
   * @var string
   */
  public $uid;
}

?>