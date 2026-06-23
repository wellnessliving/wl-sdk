<?php

namespace WellnessLiving\Wl\Staff;

use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Business\BusinessModel;
use WellnessLiving\Wl\WlPrivilegeRoleSid;

/**
 * Can create or edit a staff member in a business.
 *
 * You can also use this endpoint to get information about a staff member's activity in another business when using
 * the {@link BusinessModel} endpoint.
 *
 * @method WlModelRequest post() Update or create staff.  Creates a new staff member or updates an existing one in the business. When creating, a new user account is provisioned if no matching email exists. When updating, the target staff member must already belong to the business. Role, location, contact details, employment dates, and custom profile fields can all be set in a single call.
 */
class StaffElementModel extends WlModelAbstract
{
  /**
   * The list of locations where the staff member works.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string[]|null
   */
  public $a_location = null;

  /**
   * Employment end date.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $dl_end = null;

  /**
   * Employment start date.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $dl_start = null;

  /**
   * Gender of staff member. One of {@link AGenderSid} constants.
   *
   * `null` means to not change the current value of the field or set gender by default for new staff.
   *
   * @post post
   * @var int|null
   */
  public $id_gender = null;

  /**
   * ID of the default system role. One of {@link WlPrivilegeRoleSid}.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var int|null
   */
  public $id_role = null;

  /**
   * Whether the staff is currently employed.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var bool|null
   */
  public $is_employ = null;

  /**
   * Determines whether the staff member be shown on the directory site of the business.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var bool|null
   */
  public $is_microsite = null;

  /**
   * Whether password set is disabled. `true` - if the email is associated to a client profile which has a password set,
   *   `false` - otherwise.
   *
   * @post post
   * @var bool
   */
  public $is_password_set_disable = false;

  /**
   * Whether the staff member can to sign in.
   *
   * @post post
   * @var bool
   */
  public $is_uid = true;

  /**
   * The key of the business in which the staff member is being created or edited.
   * This field is required.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Business role key.
   *
   * `null` if not set.
   *
   * @post post
   * @var string|null
   */
  public $k_business_role = null;

  /**
   * City key.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $k_city = null;

  /**
   * Home location key.
   *
   * `null` if not set.
   *
   * @post post
   * @var string|null
   */
  public $k_location = null;

  /**
   * The key of the staff member resolved and used internally by this API.
   *
   * This property is populated from {@link StaffElementModel::$uid_staff} in {@link StaffElementApi::post()} and
   * returned in API result for compatibility.
   *
   * Passing `k_staff` in request payload is not supported and causes an error.
   *
   * @post get,result
   * @var string|null
   */
  public $k_staff = null;

  /**
   * Address.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $text_address = null;

  /**
   * Staff biography.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $text_biography = null;

  /**
   * Custom city title.
   *
   * `null` means to not change the current value of the field or <var>k_city</var> is specified.
   *
   * @post post
   * @var string|null
   */
  public $text_city = null;

  /**
   * The staff member's email address.
   * This field is required when creating a new staff member.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_email = null;

  /**
   * The staff member's first name.
   * This field is required when creating a new staff member.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_first_name = null;

  /**
   * The staff member's last name.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_last_name = null;

  /**
   * The password.
   * This field is required when creating a new staff member.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_password = null;

  /**
   * Confirmation of the password.
   * This field is required when creating a new staff member.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_password_confirm = null;

  /**
   * Home phone.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $text_phone_home = null;

  /**
   * Cell phone.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $text_phone_mobile = null;

  /**
   * The staff member's job title.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_position = null;

  /**
   * The staff member's job title.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_postal = null;

  /**
   * User key of a staff member.
   *
   * This is the supported request identifier for staff update operations.
   * Value is normalized into {@link StaffElementModel::$k_staff} in {@link StaffElementApi::post()}.
   *
   * @post post
   * @var string|null
   */
  public $uid_staff = null;
}

?>