<?php

namespace WellnessLiving\Wl\Pay\Bank\Card;

use WellnessLiving\WlModelAbstract;

/**
 * Gets information about any payment cards belonging to a user.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of bank cards.
   * The array keys are the card `k_pay_bank` IDs.
   * Each element has the following keys:
   *
   * @get result
   * @var array
   */
  public $a_bank_card = [];

  /**
   * List of bank cards.
   * Duplicate of {@link ListModel::$a_bank_card} as a flat indexed array.
   *
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