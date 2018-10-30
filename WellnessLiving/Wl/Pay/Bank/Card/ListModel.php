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
   * Every element has next keys:
   * <ul><li>Number <tt>i_month</tt> Month when card expires.</li>
   * <li>Number <tt>i_year</tt> Year when card expires.</li>
   * <li>Number <tt>id_card_system</tt> ID of card system.</li>
   * <li>Boolean <tt>is_default</tt> <tt>true</tt> - it is default card; <tt>false</tt> - it is not default card.</li>
   * <li>Number <tt>k_pay_address</tt> ID of payment address.</li>
   * <li>Number <tt>k_pay_bank</tt> Account ID.</li>
   * <li>String <tt>text_name_card</tt> Card name.</li>
   * <li>String <tt>text_name_holder</tt> Card holder name.</li>
   * <li>String <tt>text_number</tt> Account number.</li></ul>
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