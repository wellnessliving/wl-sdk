<?php

namespace WellnessLiving\Wl\Profile\Contract;

use WellnessLiving\WlModelAbstract;

/**
 * Information about purchase option contract.
 */
class ContractModel extends WlModelAbstract
{
  /**
   * Text of contract.
   *
   * @get result
   * @type {String}
   */
  public $html_contract = '';

  /**
   * Custom promotion start date.
   *
   * @get get
   * @var string
   */
  public $dt_start = '';

  /**
   * Discount in percents.
   *
   * @get get
   * @var int
   */
  public $f_manual_discount = 0;

  /**
   * ID of purchase option type. Member of {@link WlPurchaseItemSid}.
   *
   * @get get
   * @var int
   */
  public $id_purchase_item = 0;

  /**
   * ID of purchase option in database.
   *
   * @get get
   * @var string
   */
  public $k_id = '0';
  
  /**
   * ID of a business to show information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '0';

  /**
   * ID of selected a location.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * ID of certain purchase item.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_purchase_item = '0';

  /**
   * Custom price of the item.
   *
   * @get get
   * @var string
   */
  public $m_price_custom = '';

  /**
   * Discount code.
   *
   * @get get
   * @var string
   */
  public $s_discount_code = '';

  /**
   * Customer signature.
   *
   * <tt>null</tt> if not signed yet.
   *
   * @post post
   * @var string|null
   */
  public $s_signature = null;

  /**
   * ID of current user.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>