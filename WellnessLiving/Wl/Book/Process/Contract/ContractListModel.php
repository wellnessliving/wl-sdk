<?php

namespace WellnessLiving\Wl\Book\Process\Contract;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * List of contracts tied to selected purchase options in class/event booking.
 *
 * @method WlModelRequest get() Gets list of contracts tied to currently selected purchase options and whether contracts were skipped.
 * @method WlModelRequest put() Manipulates flag indicating whether contracts are skipped.
 */
class ContractListModel extends WlModelAbstract
{
  /**
   * List of purchase options with contracts. Value has following structure:
   *
   * <dl>
   *   <dt>bool `is_agree`</dt>
   *   <dd>Whether client already agreed to this contract.</dd>
   * 
   *   <dt>string `s_purchase_item`</dt>
   *
   * 
   *   <dt>string `s_signature`</dt>
   *   <dd>Client's signature, if this contract has already been signed.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_contract_list;

  /**
   * Whether contracts should be skipped.
   *
   * @get result
   * @put post,result
   * @var bool
   */
  public $is_contract_skip;

  /**
   * Booking wizard session key.
   *
   * @get get
   * @put get
   * @var string
   */
  public $s_wizard_id;
}

?>