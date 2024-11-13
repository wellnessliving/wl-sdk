<?php

namespace WellnessLiving\Wl\Pay\Account\Charge;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Business\BusinessPaymentCaptcha;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Fills a user account with a specified payment.
 *
 * This endpoint uses a CAPTCHA check.
 * To pass the CAPTCHA, review the CAPTCHA API doumentation. where you'll find that you must send a CAPTCHA for a specific action.
 * For this endpoint, the action is {@link BusinessPaymentCaptcha::CID}.
 */
class ChargeModel extends WlModelAbstract
{
  /**
   * A list of payment sources to pay with.
   *
   * Each element has next keys:
   * <dl>
   *   <dt>
   *     array [<var>a_pay_card</var>]
   *   </dt>
   *   <dd>
   *     The payment card information:
   *     <dl>
   *       <dt>
   *         array <var>a_pay_address</var>
   *       </dt>
   *       <dd>
   *         The payment address:
   *         <dl>
   *           <dt>boolean <var>is_new</var></dt>
   *           <dd>Set this value to <tt>1</tt> to add a new payment address or to <tt>0</tt> to use a saved payment address.</dd>
   *           <dt>string [<var>k_geo_country</var>]</dt>
   *           <dd>The key of the country used for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>k_geo_region</var>]</dt>
   *           <dd>The key of the region for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>k_pay_address</var>]</dt>
   *           <dd>The key of the saved payment address. Specify this to use a saved address.</dd>
   *           <dt>string [<var>s_city</var>]</dt>
   *           <dd>The city used for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_name</var>]</dt>
   *           <dd>The card name. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_phone</var>]</dt>
   *           <dd>The payment phone. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_postal</var>]</dt>
   *           <dd>The postal code for the payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_street1</var>]</dt>
   *           <dd>The payment address. Specify this to add a new address.</dd>
   *           <dt>string [<var>s_street2</var>]</dt>
   *           <dd>The optional payment address. Specify this to add a new address.</dd>
   *         </dl>
   *       </dd>
   *       <dt>
   *         int [<var>i_csc</var>]
   *       </dt>
   *       <dd>
   *         The credit card CSC. Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         int [<var>i_month</var>]
   *       </dt>
   *       <dd>
   *         The credit card expiration month. Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         int [<var>i_year</var>]
   *       </dt>
   *       <dd>
   *         The credit card expiration year. Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         boolean <var>is_new</var>
   *       </dt>
   *       <dd>
   *         Specify <tt>1</tt> to add a new card, or <tt>0</tt> to use a saved card.
   *       </dd>
   *       <dt>
   *         string [<var>k_pay_bank</var>]
   *       </dt>
   *       <dd>
   *         The key of the credit card. Specify this to use saved card.
   *       </dd>
   *       <dt>
   *         string [<var>s_comment</var>]
   *       </dt>
   *       <dd>
   *         Optional comment(s). Specify this to add a new card.
   *       </dd>
   *       <dt>
   *         string [<var>s_number</var>]
   *       </dt>
   *       <dd>
   *         The card number. Specify this to add a new card.
   *       </dd>
   *     </dl>
   *   </dd>
   *   <dt>
   *     string <var>f_amount</var>
   *   </dt>
   *   <dd>
   *     The amount of money to withdraw with this payment source.
   *   </dd>
   *   <dt>
   *     boolean [<var>is_hide</var>]
   *   </dt>
   *   <dt>
   *     bool [<var>is_save</var>=true]
   *   </dt>
   *   <dd>
   *     Whether payment method should be saved to user's account.
   *   </dd>
   *   <dd>
   *     Determines whether this payment method is hidden.
   *   </dd>
   *   <dt>
   *     boolean [<var>is_success</var>=<tt>false</tt>]
   *   </dt>
   *   <dd>
   *     Identifies whether this source was successfully charged.
   *   </dd>
   *   <dt>
   *     string [<var>m_surcharge</var>]
   *   </dt>
   *   <dd>
   *     The client-side calculated surcharge.
   *   </dd>
   *   <dt>
   *     string [<var>s_index</var>]
   *   </dt>
   *   <dd>
   *     The index of this form (optional).
   *   </dd>
   *   <dt>
   *     string <var>sid_pay_method</var>
   *   </dt>
   *   <dd>
   *     The payment method ID.
   *   </dd>
   * </dl>
   *
   * @post post
   * @var array[]
   */
  public $a_pay_form = [];

  /**
   * The source mode key. One of the {@link ModeSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_mode = 0;

  /**
   * The account charge mode.
   *
   * @post get
   * @var int
   */
  public $id_pay_account_charge = 0;

  /**
   * If `true`, the account is filled by a staff member in the backend. Otherwise, this will be `false`.
   *
   * @post get
   * @var bool
   */
  public $is_staff = false;

  /**
   * The ID of the business the user account belongs to.
   *
   * This shouldn't be passed if a user account has already been created.
   * In such cases, {@link ChargeModel::$k_pay_account} should be passed instead.
   *
   * If both the business ID and account ID passed, the system checks if the given business is the owner of the specified account.
   *
   * @post get
   * @var string
   */
  public $k_business = 0;

  /**
   * The ID of the user account to refill.
   *
   * This may be 0 if a user account hasn't been created yet.
   * In such cases, {@link ChargeModel::$k_business} and {@link ChargeModel::$uid} should be passed instead.
   *
   * If not passed, the currency of account equals the default business currency.
   *
   * @post get
   * @var string
   */
  public $k_pay_account = 0;

  /**
   * The ID of the purchase that was created during payment. This value is only returned in cases where a purchase was created.
   * A new purchase is created when {@link ChargeModel::$id_pay_account_charge} equals {@link \RsPayAccountChargeSid::AUTO}.
   *
   * @post result
   * @var int []
   */
  public $k_purchase;

  /**
   * The payment amount.
   *
   * @post post
   * @var string
   */
  public $m_amount = '0.00';

  /**
   * The transaction comment.
   *
   * @post post
   * @var string
   */
  public $s_comment = '';

  /**
   * The ID of the user whose account is being refilled.
   *
   * This shouldn't be passed if a user account has already been created.
   * In such cases, {@link ChargeModel::$k_pay_account} should be passed instead.
   *
   * If both the user ID and account ID passed, the system checks if the given user is the owner of the specified account.
   *
   * @post get
   * @var string
   */
  public $uid = 0;
}

?>