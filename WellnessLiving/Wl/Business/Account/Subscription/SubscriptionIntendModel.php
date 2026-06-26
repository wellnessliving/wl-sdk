<?php

namespace WellnessLiving\Wl\Business\Account\Subscription;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Endpoint to get potential effects of intended subscription changes.
 *
 * @method WlModelRequest post()
 */
class SubscriptionIntendModel extends WlModelAbstract
{
  /**
   * Subscription discount data.
   *
   * `null` in a case no discount considered.
   *
   * @post result
   * @var array|null
   */
  public $a_discount = null;

  /**
   * Contains payment plan information for intended changes.
   *
   * @post result
   * @var array
   */
  public $a_plan = [];

  /**
   * Payment prorate data, if the intended subscription changes require payment recalculation.
   *
   * `null` in a case no prorate considered.
   *
   * @post result
   * @var array|null
   */
  public $a_prorate = null;

  /**
   * Subscription trial period data.
   *
   * `null` in a case no trial considered.
   *
   * @post result
   * @var array|null
   */
  public $a_trial = null;

  /**
   * Defines whether prorate payment should be taken into account due to intention analyze.
   *
   * In a case of adjustment intention from customer side prorate is automatically applied.
   * To get correct intention result for customer pass `true` here.
   *
   * In a case of adjustment intention from admin side prorate is not applied.
   * To get correct intention result for admin pass `false` here.
   *
   * `null` to use the subscription's default prorate behaviour.
   *
   * @post post
   * @var bool|null
   */
  public $can_prorate = null;

  /**
   * Defines whether automatic trial period should be taken into account due to intention analyze.
   *
   * In a case of adjustment intention from customer side trial period automatically applied.
   * To get correct intention result for customer pass `true` here.
   *
   * In a case of adjustment intention from admin side trial period not applied.
   * To get correct intention result for admin pass `false` here.
   *
   * @post post
   * @var bool
   */
  public $can_trial = false;

  /**
   * CID of the subscription intended to be changed.
   *
   * @post post
   * @var int
   */
  public $cid_subscription = 0;

  /**
   * The date on which the subscription is intended to be activated.
   * The activation date should not be specified if the subscription is already active.
   *
   * `null` if activation date is not intended to be specified.
   * `0000-00-00` to use current date in business timezone to as set activation date.
   *
   * @post post
   * @var string|null
   */
  public $dl_activate = null;

  /**
   * The day of the month intended to be used as the regular payment day for recurring charges.
   * This value determines on which day each month the user will be billed.
   *
   * `null` if payment day not intended to be changed.
   *
   * @post post
   * @var int|null
   */
  public $i_payment_day = null;

  /**
   * Number of the entities for which the payment intended to be processed.
   * Depending on subscription type different entity used. See {@link SubscriptionIntendModel::$id_payment_entity}.
   *
   * @post result
   * @var int
   */
  public $i_payment_entity = 0;

  /**
   * Currency ID within which intend would be processed.
   *
   * @post result
   * @var int
   */
  public $id_currency = 0;

  /**
   * Type of the entities for which the payment intended to be processed.
   * One of {@link PaymentSid} constants
   *
   * @post result
   * @var int
   */
  public $id_payment_entity = 0;

  /**
   * ID of the subscription payment periodicity intended to be applied.
   *
   * `null` if periodicity is not intended to be changed.
   *
   * @post post
   * @var int|null
   */
  public $id_periodicity = null;

  /**
   * ID of the subscription plan intended to be applied.
   *
   * `null` if plan is not intended to be changed.
   *
   * @post post
   * @var int|null
   */
  public $id_plan = null;

  /**
   * ID of the upgrade action intended to be applied.
   *
   * `null` if plan upgrade is not intended to be.
   *
   * @post result
   * @var int|null
   */
  public $id_upgrade = null;

  /**
   * JSON compressing information about subscription conversion.
   *
   * `null` if conversion is not intended to be changed.
   *
   * @post post
   * @var string
   */
  public $json_convert = '';

  /**
   * JSON compressing information about price overrides intended to be applied.
   *
   * `null` if override is not intended to be changed.
   *
   * @post post
   * @var string
   */
  public $json_override = '';

  /**
   * The business key within which the subscription is intended to be changed.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * Title of the subscription intended to be changed.
   *
   * @post result
   * @var string
   */
  public $text_subscription;
}

?>