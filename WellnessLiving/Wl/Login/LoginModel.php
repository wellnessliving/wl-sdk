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
   * List of information about users:
   * <dl>
   *   <dt>
   *     int <var>id_gender</var>
   *   </dt>
   *   <dd>
   *     User's gender. One of {@link \WellnessLiving\Core\a\AGenderSid} constants.
   *   </dd>
   *   <dt>
   *     string <var>k_staff</var>
   *   </dt>
   *   <dd>
   *     User's key as staff member.
   *   </dd>
   *   <dt>
   *     string <var>s_first_name</var>
   *   </dt>
   *   <dd>
   *     User first name.
   *   </dd>
   *   <dt>
   *     string <var>s_last_name</var>
   *   </dt>
   *   <dd>
   *     First letter of user last name.
   *   </dd>
   *   <dt>
   *     string <var>text_mail_client</var>
   *   </dt>
   *   <dd>
   *     Client`s mail.
   *   </dd>
   *   <dt>
   *     string <var>text_mail_staff</var>
   *   </dt>
   *   <dd>
   *     Staff`s mail.
   *   </dd>
   *   <dt>
   *     string <var>text_name_first_staff</var>
   *   </dt>
   *   <dd>
   *     Staff`s first name.
   *   </dd>
   *   <dt>
   *     string <var>text_name_full_client</var>
   *   </dt>
   *   <dd>
   *     Full client name. User login is returned in a case neither first name, nor last name specified. An empty string is returned in a case neither first name, nor last name specified, nor login. See
   *     description of the {@link Wl\User\Info\UserInfo::nameFullText()} method.
   *   </dd>
   *   <dt>
   *     string <var>text_name_full_staff</var>
   *   </dt>
   *   <dd>
   *     Full staff name. User login is returned in a case neither first name, nor last name specified. An empty string is returned in a case neither first name, nor last name specified, nor login.
   *   </dd>`
   *   <dt>
   *     string <var>text_name_last_staff</var>
   *   </dt>
   *   <dd>
   *     Staff`s last name.
   *   </dd>
   *   <dt>
   *     string <var>url_photo</var>
   *   </dt>
   *   <dd>
   *     User photo URL.
   *   </dd>
   * </dl>
   *
   * @post result
   * @var array[]
   */
  public $a_login;

  /**
   * Whether this user can send postcards.
   *
   * @get result
   * @var bool
   */
  public $can_postcard;

  /**
   * The height of the requested photo.
   *
   * @get get
   * @post get
   * @var int
   */
  public $i_photo_height = 0;

  /**
   * The width of the requested photo.
   *
   * @get get
   * @post get
   * @var int
   */
  public $i_photo_width = 0;

  /**
   * The gender ID. It will be one of the {@link AGenderSid} constants.
   *
   * @get result
   * @var int
   */
  public $id_gender;

  /**
   * Whether photo is uploaded.
   * `true` if photo is not uploaded, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_photo_empty = false;

  /**
   * The key of the business. Users can be in multiple businesses.
   * This can be left as `null` to retrieve system-wide information.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business;

  /**
   * The user's staff key for the specified business.
   *
   * @get result
   * @var string
   */
  public $k_staff;

  /**
   * The first name of the user.
   *
   * @get result
   * @var string
   */
  public $s_first_name;

  /**
   * The surname of the user.
   *
   * @get result
   * @var string
   */
  public $s_last_name;

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
   * List of users to get information for. Serialized as JSON string.
   *
   * <tt>null</tt> for mode of single user.
   *
   * @post post
   * @var string|null
   */
  public $text_uid = null;

  /**
   * The key of the user.
   *
   * `null` on case when is walk-in client.
   *
   * @get get,result
   * @var string|null
   */
  public $uid = '0';

  /**
   * The URL where the user photo can be retrieved.
   *
   * @get result
   * @var string
   */
  public $url_photo;
}

?>