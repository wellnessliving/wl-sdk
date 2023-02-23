<?php

namespace WellnessLiving\Wl\Profile\Contract;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that gets information about a session pass or membership with a contract.
 *
 * The POST method will complete a sale of a Purchase Option requiring a contract.
 * The method that WellnessLiving uses to encode a signature into a string isn't currently available in the SDK.
 */
class ContractModel extends WlModelAbstract
{
  /**
   * The start date of the contract.
   *
   * @get get
   * @var string
   */
  public $dt_start = '';

  /**
   * The percentage discount for the item.
   *
   * @get get
   * @var int
   */
  public $f_manual_discount = 0;

  /**
   * The text of the contract.
   *
   * @get result
   * @var string
   */
  public $html_contract = '';

  /**
   * The type of purchase item. This is one of the {@link WlPurchaseItemSid} constants.
   *
   * @get get
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the purchase item in the database.
   *
   * @get get
   * @var string
   */
  public $k_id = '0';

  /**
   * The key of the selected location.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';

  /**
   * The ID of the selected purchase item.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_purchase_item = '0';

  /**
   * The custom price of the item.
   *
   * @get get
   * @var string
   */
  public $m_price_custom = '';

  /**
   * The discount code used for the item.
   *
   * @get get
   * @var string
   */
  public $s_discount_code = '';

  /**
   * An encoded version of the client’s signature.
   * This is different from the signature needed to communicate with an endpoint.
   *
   * This will be `null` if not signed yet.
   *
   * @post post
   * @var string|null
   */
  public $s_signature = null;

  /**
   * The key of the current user.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>