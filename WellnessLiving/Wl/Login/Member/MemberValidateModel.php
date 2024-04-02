<?php

namespace WellnessLiving\Wl\Login\Member;

use WellnessLiving\WlModelAbstract;

/**
 * Checking whether there is something that prevents the user from using the business.
 */
class MemberValidateModel extends WlModelAbstract
{
  /**
   * List of fields if the user has empty profile fields, which are required for booking.
   *
   * @get result
   * @var array
   */
  public $a_empty_fields_booking = [];

  /**
   * List of fields if the user has empty profile fields, which are required for registration.
   *
   * @get result
   * @var array
   */
  public $a_empty_fields_registration = [];

  /**
   * `true` If the user has credit cards on profile, otherwise `false`.
   *
   * @get result
   * @var bool
   */
  public $has_credit_card = false;

  /**
   * `true` if the user has an outstanding contract, otherwise `false`.
   *
   * @get result
   * @var bool
   */
  public $has_outstanding_contract = false;

  /**
   * `true` If the user has an outstanding waiver for the business, otherwise `false`.
   *
   * @get result
   * @var bool
   */
  public $has_outstanding_waiver = false;

  /**
   * `true` If the user has pending registration quizzes to complete, otherwise `false`.
   *
   * @get result
   * @var bool
   */
  public $has_pending_quizzes = false;

  /**
   * `true` If the user has to provide credit card details before booking, otherwise `false`.
   *
   * @get result
   * @var bool
   */
  public $is_booking_require_card = false;

  /**
   * `true` If the user has to provide credit card details to finish their registration, otherwise `false`.
   *
   * @get result
   * @var bool
   */
  public $is_register_require_card = false;

  /**
   * Key of the business.
   *
   * @get get
   * @var string
   * @see \RsBusinessSql
   */
  public $k_business = '0';

  /**
   * Home user`s location.
   * `null` if user has not home location.
   *
   * @get result
   * @var string|null
   * @see \RsLocationSql
   */
  public $k_location = null;

  /**
   * The user's key.
   *
   * @get get
   * @var string
   * @see \PassportLoginSql
   */
  public $uid = '0';
}

?>