<?php

namespace WellnessLiving\Wl\Login;

use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;

/**
 * Returns the profile information for a specific user.
 *
 * Can return public information about a staff member.
 * Can return user`s image.
 * To obtain the user's full information you will need access to the requested user.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * The gender ID. It will be one of the {@link \WellnessLiving\Core\a\AGenderSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_gender = AGenderSid::FEMALE;

  /**
   * The key of the business. Users can be in multiple businesses.
   * This can be left as null to retrieve system wide information.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The user's staff key for the specified business.
   *
   * @get result
   * @var string
   */
  public $k_staff = '0';

  /**
   * The first name of the user.
   *
   * @get result
   * @var string
   */
  public $s_first_name = '';

  /**
   * The surname of the user.
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
   * The ID of the user.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;

  /**
   * The URL where the user’s photo can be retrieved.
   *
   * @get result
   * @var string
   */
  public $url_photo='';
}

?>