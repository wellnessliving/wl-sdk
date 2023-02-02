<?php

namespace WellnessLiving\Wl\Login;

use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns the profile information for a specific user.
 *
 * This endpoint can be used to return public information about a staff member or a user`s image. To obtain the
 * user's full information, you'll need access to the requested user.
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
   * This can be left as `null` to retrieve system-wide information.
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
   * The client`s mailing address.
   *
   * @get result
   * @var string
   */
  public $text_mail_client;

  /**
   * The staff member's mailing address.
   * This will be set if the user is a staff member ({@link \WellnessLiving\Wl\Login\LoginModel::$k_staff}).
   *
   * @get result
   * @var string
   */
  public $text_mail_staff;

  /**
   * The staff member's first name.
   * This will be set if the user is a staff member ({@link \WellnessLiving\Wl\Login\LoginModel::$k_staff}).
   *
   * @get result
   * @var string
   */
  public $text_name_first_staff;

  /**
   * The user's login name. This is returned in cases when neither the first name nor the last name have been specified.
   * An empty string is returned in cases where neither the first name, last name, nor login have been specified.
   *
   * @get result
   * @var string
   */
  public $text_name_full_client;

  /**
   * The staff member's full name.
   * The user login is returned in cases where neither the first name nor the last name have been specified.
   * An empty string is returned in cases where neither the first name, last name, nor login have been specified.
   * This will be set if the user is a staff member ({@link \WellnessLiving\Wl\Login\LoginModel::$k_staff}).
   *
   * @get result
   * @var string
   */
  public $text_name_full_staff;

  /**
   * The staff member's last name.
   * This will be set if the user is a staff member ({@link \WellnessLiving\Wl\Login\LoginModel::$k_staff}).
   *
   * @get result
   * @var string
   */
  public $text_name_last_staff;

  /**
   * The ID of the user.
   *
   * This will be `null` if not set yet.
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