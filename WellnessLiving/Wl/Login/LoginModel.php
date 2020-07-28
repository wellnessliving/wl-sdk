<?php

namespace WellnessLiving\Wl\Login;

use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about Wellnessliving user.
 *
 * Can return public information about the staff.
 * To obtain full user information, you must have access to the requested user, otherwise there will be an access error.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * Gender. One of the {@link \WellnessLiving\Core\a\AGenderSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_gender = AGenderSid::FEMALE;

  /**
   * Key of business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * User's key as staff member.
   *
   * @get result
   * @var string
   */
  public $k_staff = '0';

  /**
   * User first name.
   *
   * @get result
   * @var string
   */
  public $s_first_name = '';

  /**
   * User last name.
   *
   * @get result
   * @var string
   */
  public $s_last_name = '';

  /**
   * Client`s mail.
   *
   * @get result
   * @var string
   */
  public $text_mail_client;

  /**
   * Staff`s mail.
   * Will be set if user is staff ({@link \WellnessLiving\Wl\Login\LoginModel::$k_staff}).
   *
   * @get result
   * @var string
   */
  public $text_mail_staff;

  /**
   * Staff`s first name.
   * Will be set if user is staff ({@link \WellnessLiving\Wl\Login\LoginModel::$k_staff}).
   *
   * @get result
   * @var string
   */
  public $text_name_first_staff;

  /**
   * User login is returned in a case neither first name, nor last name specified.
   * An empty string is returned in a case neither first name, nor last name specified, nor login.
   *
   * @get result
   * @var string
   */
  public $text_name_full_client;

  /**
   * Full staff name.
   * User login is returned in a case neither first name, nor last name specified.
   * An empty string is returned in a case neither first name, nor last name specified, nor login.
   * Will be set if user is staff ({@link \WellnessLiving\Wl\Login\LoginModel::$k_staff}).
   *
   * @get result
   * @var string
   */
  public $text_name_full_staff;

  /**
   * Staff`s last name.
   * Will be set if user is staff ({@link \WellnessLiving\Wl\Login\LoginModel::$k_staff}).
   *
   * @get result
   * @var string
   */
  public $text_name_last_staff;

  /**
   * ID of user.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;

  /**
   * Photo URL of a user that is currently signed in.
   *
   * @get result
   * @var string
   */
  public $url_photo='';
}

?>