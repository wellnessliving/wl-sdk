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
   * The ID of the purchase that was created during payment.
   * This value is only returned in cases where a purchase was created.
   * A new purchase is created when {@link ChargeModel::$id_pay_account_charge} equals {@link \RsPayAccountChargeSid::AUTO}.
   *
   * @post result
   * @var string
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