<?php

namespace WellnessLiving\Wl\Login\Member;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Field\WlFieldGeneralSid;

/**
 * Checking whether there is something that prevents the user from using the business.
 *
 * @method WlModelRequest get() Checks whether anything prevents the user from using the business and returns details about missing required fields.  Extends the base validation by additionally returning separate lists of missing profile fields grouped by their required context: booking and purchase, self-registration, or general requirement.
 */
class MemberValidate63Model extends WlModelAbstract
{
  /**
   * List of fields if the user has empty profile fields, which are required for booking.
   *
   * <dl>
   *   <dt>int `id_field_general`</dt>
   *   <dd>The general field ID. One of {@link WlFieldGeneralSid} constants.</dd>
   * 
   *   <dt>string `k_field`</dt>
   *   <dd>Profile field key. </dd>
   * 
   *   <dt>string `text_field_title`</dt>
   *   <dd>Human-readable field title describing what value is missing.</dd>
   * </dl>
   * @get result
   * @var string[]
   */
  public $a_empty_fields_booking = [];

  /**
   * List of fields if the user has empty profile fields, which are required for registration.
   *
   * <dl>
   *   <dt>int `id_field_general`</dt>
   *   <dd>The general field ID. One of {@link WlFieldGeneralSid} constants.</dd>
   * 
   *   <dt>string `k_field`</dt>
   *   <dd>Profile field key. </dd>
   * 
   *   <dt>string `text_field_title`</dt>
   *   <dd>Human-readable field title describing what value is missing.</dd>
   * </dl>
   * @get result
   * @var string[]
   */
  public $a_empty_fields_registration = [];

  /**
   * List of profile fields that are required but empty for this user.
   *
   * <dl>
   *   <dt>int `id_field_general`</dt>
   *   <dd>The general field ID. One of {@link WlFieldGeneralSid} constants.</dd>
   * 
   *   <dt>string `k_field`</dt>
   *   <dd>Profile field key. </dd>
   * 
   *   <dt>string `text_field_title`</dt>
   *   <dd>Human-readable field title describing what value is missing.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_empty_fields_required = [];

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
   */
  public $k_business = '0';

  /**
   * Home user`s location.
   * `null` if user has not home location.
   *
   * @get result
   * @var string|null
   */
  public $k_location = null;

  /**
   * The user's key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>