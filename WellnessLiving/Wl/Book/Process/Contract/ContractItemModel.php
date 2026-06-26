<?php

namespace WellnessLiving\Wl\Book\Process\Contract;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * Contract tied to purchase option selected in class/event booking.
 *
 * @method WlModelRequest delete() Marks the contract as declined by removing purchase item tied to it from selection, thus removing the contract.
 * @method WlModelRequest get() Gets information about contract.
 * @method WlModelRequest put() Marks contract as agreed to and updates client signature on it.
 */
class ContractItemModel extends WlModelAbstract
{
  /**
   * Whether there remains a selected purchase item that grants access to the class.
   *
   * @delete result
   * @var bool
   */
  public $has_valid_purchase;

  /**
   * HTML-ready text of the contract.
   *
   * @get result
   * @var string
   */
  public $html_contract;

  /**
   * Type of purchase item, one of {@link WlPurchaseItemSid}.
   *
   * @get result
   * @var int
   */
  public $id_purchase_item;

  /**
   * Whether client agrees to the contract.
   *
   * @get result
   * @put post
   * @var bool
   */
  public $is_agree;

  /**
   * Id of purchase item within its type (represented by <var>id_purchase_item</var>).
   *
   * @get result
   * @var string
   */
  public $k_id;

  /**
   * @delete get
   * @get get
   * @put get
   * @var string
   */
  public $s_purchase_item;

  /**
   * @get result
   * @put post
   * @var string
   */
  public $s_signature;

  /**
   * Booking wizard session key.
   *
   * @delete get
   * @get get
   * @put get
   * @var string
   */
  public $s_wizard_id;

  /**
   * Text of the contract signed by the client.
   *
   * @get result
   * @var string
   */
  public $text_contract;

  /**
   * Purchase item title.
   *
   * @get result
   * @var string
   */
  public $text_title;
}

?>