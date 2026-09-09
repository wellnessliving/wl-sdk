<?php

namespace WellnessLiving\Wl\Profile\Contract;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;

/**
 * Gets information about a session pass or membership with a contract.
 *
 * The POST method will complete a sale of a Purchase Option requiring a contract.
 * The method that WellnessLiving uses to encode a signature into a string isn't currently available in the SDK.
 *
 * @method WlModelRequest get() Returns contract information for the specified purchase option.  Renders the contract text for the specified purchase option, applying any applicable  discounts, and returns the content needed to display the contract acceptance modal to the  client. If the purchase option requires agreement to several distinct contracts at once,  returns them through {@link \Wl\Profile\Contract\ContractApi::$a_contract_list} instead, each rendered the same  way as a single contract, using the discount already resolved for that specific contract -  {@link \Wl\Profile\Contract\ContractApi::$f_manual_discount}, {@link \Wl\Profile\Contract\ContractApi::$m_discount_flat}, and  {@link \Wl\Profile\Contract\ContractApi::$s_discount_code} are not supported in that case.
 * @method WlModelRequest post() Completes a sale of a Purchase Option requiring a contract by submitting the signed contract.  Accepts an encoded client signature and agreement flag, decodes the signature, and records  the signed contract for the specified purchase item.
 */
class ContractModel extends WlModelAbstract
{
  /**
   * Additional configuration for the item that might influence contracts.
   *
   * When {@link ContractModel::$id_purchase_item} is {@link WlPurchaseItemSid::TUITION}.
   * Use next structure:
   *
   * <dl>
   *   <dt>array `a_event_list`</dt>
   *   <dd>The tuition class schedule selected for the participant.</dd>
   * 
   *   <dt>array `a_registration_fee_list`</dt>
   *   <dd>Registration fees to charge together with the tuition, keyed by participant key.</dd>
   * </dl>
   * @get get
   * @var array
   */
  public $a_config = [];

  /**
   * List of contracts required at once, if the purchase option requires agreement to several
   *  distinct contracts (for example, one per Tuition visitor). Keyed the same way as
   *  `a_signature` used to submit signatures for such a purchase option. Empty if the purchase
   *  option requires at most one contract - use {@link ContractModel::$html_contract} instead in
   *  that case. Value has the following structure:
   *
   * <dl>
   *   <dt>string `html_contract`</dt>
   *   <dd>The text of this specific contract.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>Key of the visitor this contract applies to.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_contract_list = [];

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
   * Not supported when the purchase option requires several distinct contracts at once - see
   *  {@link ContractModel::$a_contract_list}.
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
   * The item key. Depends on {@link ContractModel::$id_purchase_item} property.
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
   * Not supported when the purchase option requires several distinct contracts at once - see
   *   {@link ContractModel::$a_contract_list}.
   *
   * @get get
   * @var string
   */
  public $m_discount_flat = '0';

  /**
   * The custom price of the item.
   *
   * Not supported when the purchase option requires several distinct contracts at once - see
   *   {@link ContractModel::$a_contract_list}.
   *
   * @get get
   * @var string
   */
  public $m_price_custom = '';

  /**
   * The discount code used for the item.
   *
   * Not supported when the purchase option requires several distinct contracts at once - see
   *  {@link ContractModel::$a_contract_list}.
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