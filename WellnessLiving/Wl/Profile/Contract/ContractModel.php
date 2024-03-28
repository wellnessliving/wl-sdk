<?php

namespace WellnessLiving\Wl\Profile\Contract;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

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
   * @var float
   */
  public $f_manual_discount = 0;

  /**
   * The text of the contract.
   *
   * @get result
   * @var string
   */
  public $html_contract;

  /**
   * Age of minor which documents can be signed by parent or legal guardian.
   *
   * @get result
   * @var int
   */
  public $i_minor_age;

  /**
   * The type of purchase item. This is one of the {@link WlPurchaseItemSid} constants.
   * Optional if {@link ContractModel::$k_purchase_item} is not empty.
   *
   * @get get
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * <tt>false</tt> if user has not agreed to use Electronic Signatures,
   * <tt>true</tt> if user has agreed to use Electronic Signatures,
   * <tt>null</tt> otherwise.
   *
   * @post post
   * @var bool|null
   */
  public $is_agree = null;

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
   * The item key. Depends of {@link ContractModel::$id_purchase_item} property.
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
   * The key of the selected purchase item.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_purchase_item = '0';

  /**
   * Amount of a flat manual discount.
   *
   * @get get
   * @var string
   */
  public $m_discount_flat = '0';

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
   * An encoded version of the client signature.
   * This is different from the signature needed to communicate with an endpoint.
   *
   * @post post
   * @var string
   */
  public $s_signature = '';

  /**
   * Title of purchase option.
   *
   * @get result
   * @var string
   */
  public $text_title;

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