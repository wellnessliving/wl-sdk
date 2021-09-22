<?php 

namespace WellnessLiving\Wl\Staff;

use WellnessLiving\WlModelAbstract;

/**
 * Api to add\change staff members in the business.
 */
class StaffElementModel extends WlModelAbstract
{
  /**
   * Should staff member be shown on the directory site of the business.
   *
   * `null` means to not change the current value of the field.
   *
   * @post post
   * @var bool|null
   */
  public $is_microsite;

  /**
   * Key of the business to get\change staff member in.
   *
   * Primary key in the {@link \RsBusinessSql}.
   *
   * <tt>null</tt> if video does not have thumbnail image.
   *
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * Key of the staff member to be changed.
   *
   * Primary key in the {@link \RsStaffSql}.
   *
   * <tt>null</tt> if new staff member should be created.
   *
   * @post get,result
   * @var string|null
   */
  public $k_staff;

  /**
   * Staff email.
   *
   * @post post
   * @var string|null
   */
  public $s_email;

  /**
   * Staff first name.
   *
   * @post post
   * @var string|null
   */
  public $s_first_name;

  /**
   * Staff last name.
   *
   * @post post
   * @var string|null
   */
  public $s_last_name;

  /**
   * Password.
   *
   * @post post
   * @var string|null
   */
  public $s_password;

  /**
   * Confirmation of password.
   *
   * @post post
   * @var string|null
   */
  public $s_password_confirm;

  /**
   * Staff job title.
   *
   * @post post
   * @var string|null
   */
  public $s_position;

  /**
   * User key. Primary key in {@link \PassportLoginSql} table.
   *
   * @get get
   * @var string
   */
  public $uid;
}

?>