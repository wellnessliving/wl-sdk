<?php

namespace WellnessLiving\Wl\Pay\Bank\Card;

use WellnessLiving\WlModelAbstract;

/**
 * Lists user's bank cards.
 */
class ListModel extends WlModelAbstract
{
  /**
   * List of bank cards.
   * Every element has the following keys:
   * <dl>
   *   <dt>int <var>i_month</var></dt>
   *   <dd>Month when card expires.</dd>
   *   <dt>int <var>i_year</var></dt>
   *   <dd>Year when card expires.</dd>
   *   <dt>int <var>id_card_system</var></dt>
   *   <dd>ID of card system.</dd>
   *   <dt>bool <var>is_default</var></dt>
   *   <dd><tt>true</tt> - this is the default card; <tt>false</tt> - this is not the default card.</dd>
   *   <dt>string <var>k_pay_address</var></dt>
   *   <dd>ID of payment address.</dd>
   *   <dt>string <var>k_pay_bank</var></dt>
   *   <dd>Account ID.</dd>
   *   <dt>string <var>text_name_card</var></dt>
   *   <dd>Card name.</dd>
   *   <dt>string <var>text_name_holder</var></dt>
   *   <dd>Card holder name.</dd>
   *   <dt>string <var>text_number</var></dt>
   *   <dd>Account number.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_bank_card = [];

  /**
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Location to show information for.
   * <tt>0</tt> to use user's home location.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_location = null;

  /**
   * ID of user to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;
}

?>