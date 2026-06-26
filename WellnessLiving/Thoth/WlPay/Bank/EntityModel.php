<?php

namespace WellnessLiving\Thoth\WlPay\Bank;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPayMethodSid;

/**
 * Allows to manipulate banking payment sources (credit cards, ACH and direct entry accounts).
 *
 * @method WlModelRequest post() Creates a new payment source.
 */
class EntityModel extends WlModelAbstract
{
  /**
   * Contains data associated with payment source.
   *
   * Structure of this array depends on type of the payment source.
   *
   * @post post
   * @var array
   */
  public $a_data;

  /**
   * ID of the currency of this payment entity is managed.
   *
   * @post get
   * @var int
   */
  public $id_currency;

  /**
   * Type of payment source.
   *
   * One of {@link WlPayMethodSid} constants.
   *
   * @post post
   * @var int
   */
  public $id_pay_method;

  /**
   * Key of the business within which this payment entity is managed.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Key of the location within which this payment entity is managed.
   *
   * Empty string, zero should be passed here if a business-wide merchant should be used.
   * In this case it is also allowed to not to pass this parameter.
   *
   * @post get
   * @var string|null
   */
  public $k_location = null;

  /**
   * Key of payment owner.
   *
   * @post post
   * @var string
   */
  public $k_pay_owner;
}

?>