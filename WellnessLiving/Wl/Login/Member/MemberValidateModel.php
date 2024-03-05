<?php

namespace WellnessLiving\Wl\Login\Member;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that checking whether there is something that prevents the user from using the business.
 */
class MemberValidateModel extends WlModelAbstract
{
  /**
   * `true` if the user has empty profile fields, which are required for booking, otherwise `false`.
   *
   *
   * @get result
   * @var array
   */
  public array $a_empty_fields_booking = [];

  /**
   * `true` If the user has empty profile fields, which are required for registration, otherwise `false`.
   *
   *
   * @get result
   * @var array
   */
  public array $a_empty_fields_registration = [];

  /**
   * `true` If the user has credit cards on profile, otherwise `false`.
   *
   *
   * @get result
   * @var bool
   */
  public bool $has_credit_card = false;

  /**
   * `true` if the user has an outstanding contract, otherwise `false`.
   *
   *
   * @get result
   * @var bool
   */
  public bool $has_outstanding_contract = false;

  /**
   * `true` If the user has an outstanding waiver for the business, otherwise `false`.
   *
   *
   * @get result
   * @var bool
   */
  public bool $has_outstanding_waiver = false;

  /**
   * `true` If the user has pending registration quizzes to complete, otherwise `false`.
   *
   *
   * @get result
   * @var bool
   */
  public bool $has_pending_quizzes = false;

  /**
   * `true` If the user has to provide credit card details before booking, otherwise `false`.
   *
   *
   * @get result
   * @var bool
   */
  public bool $is_booking_require_card = false;

  /**
   * `true` If the user has to provide credit card details to finish their registration, otherwise `false`.
   *
   *
   * @get result
   * @var bool
   */
  public bool $is_register_require_card = false;

  /**
   * Key of the business.
   *
   * @get get
   * @var string
   * @see \RsBusinessSql
   */
  public string $k_business = '0';

  /**
   * Home user`s location.
   * `null` if user has not home location.
   *
   *
   * @get result
   * @var null|string
   * @see \RsLocationSql
   */
  public ?string $k_location = null;

  /**
   * The user's key.
   *
   * @get get
   * @var string
   * @see \PassportLoginSql
   */
  public string $uid = '0';
}

?>