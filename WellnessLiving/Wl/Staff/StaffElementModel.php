<?php

namespace WellnessLiving\Wl\Staff;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that can create or edit a staff member in a business.
 *
 * You can also use this endpoint to get information about a staff member's activity in another business when using
 * the {@link \WellnessLiving\Wl\Business\BusinessModel} endpoint.
 */
class StaffElementModel extends WlModelAbstract
{
  /**
   * Lis of locations where the staff member works. Each element is primary key from {@link \RsLocationSql} table.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var array|null
   */
  public $a_location;

  /**
   * Employment end date.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $dl_end;

  /**
   * Employment start date.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $dl_start;

  /**
   * Gender of staff member. One of {@link \WellnessLiving\Core\a\AGenderSid} constants.
   *
   * `null` means to not change the current value of the field or set gender by default for new staff.
   *
   * @post post
   * @var int|null
   */
  public $id_gender;

  /**
   * ID of the default system role from {@link \WellnessLiving\RsPrivilegeRoleSid}.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var int|null
   */
  public $id_role;

  /**
   * Whether the staff is currently employed.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var bool|null
   */
  public $is_employ;

  /**
   * Determines whether the staff member be shown on the directory site of the business.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var bool|null
   */
  public $is_microsite;

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
  public $k_business_role;

  /**
   * City key.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $k_city;

  /**
   * Home location key.
   *
   * `null` if not set.
   *
   * @post post
   * @var string|null
   */
  public $k_location;

  /**
   * The key of the staff member who is being created or edited.
   *
   * This will be `null` in cases where a new staff member is created.
   *
   * @post get,result
   * @var string|null
   */
  public $k_staff;

  /**
   * Address.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $text_address;

  /**
   * Staff biography.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $text_biography;

  /**
   * Custom city title.
   *
   * `null` means to not change the current value of the field or <var>k_city</var> is specified.
   *
   * @post post
   * @var string|null
   */
  public $text_city;

  /**
   * The staff member's email address.
   * This field is required when creating a new staff member.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_email;

  /**
   * The staff member's first name.
   * This field is required when creating a new staff member.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_first_name;

  /**
   * The staff member's last name.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_last_name;

  /**
   * The password.
   * This field is required when creating a new staff member.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_password;

  /**
   * Confirmation of the password.
   * This field is required when creating a new staff member.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_password_confirm;

  /**
   * Home phone.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $text_phone_home;

  /**
   * Cell phone.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var string|null
   */
  public $text_phone_mobile;

  /**
   * The staff member's job title.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_position;

  /**
   * The staff member's job title.
   *
   * If `null`, the current value of the field shouldn't be changed.
   *
   * @post post
   * @var string|null
   */
  public $text_postal;
}

?>