<?php

namespace WellnessLiving\Wl\Login;

use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns the profile information for a specific user.
 *
 * This endpoint can be used to return public information about a staff member or a user`s image. To obtain the
 * user's full information, you'll need access to the requested user.
 *
 * @method WlModelRequest get() Retrieves information about user.  Returns name, gender, photo URL, email, and staff details for the specified user within the given business. Public staff information is returned even without profile access; full client details require access to the user's profile.
 * @method WlModelRequest post() Retrieves information about a list of users. This is done via "post" method because only "post" allows large requests.  Accepts a JSON-encoded array of user keys, validates each one, resolves staff and client roles, and returns name, gender, photo URL, email, and staff details for every user in the list, respecting per-user profile access rules.
 */
class LoginModel extends WlModelAbstract
{
  /**
   * List of information about users:
   *
   * <dl>
   *   <dt>int `id_gender`</dt>
   *   <dd>User's gender. One of {@link AGenderSid} constants.</dd>
   * 
   *   <dt>string `k_staff`</dt>
   *   <dd>User's key as staff member. </dd>
   * 
   *   <dt>string `s_first_name`</dt>
   *   <dd>User first name.</dd>
   * 
   *   <dt>string `s_last_name`</dt>
   *   <dd>First letter of user last name.</dd>
   * 
   *   <dt>string `text_mail_client`</dt>
   *   <dd>Client`s mail.</dd>
   * 
   *   <dt>string `text_mail_staff`</dt>
   *   <dd>Staff`s mail.</dd>
   * 
   *   <dt>string `text_name_first_staff`</dt>
   *   <dd>Staff's first name.</dd>
   * 
   *   <dt>string `text_name_full_client`</dt>
   *   <dd>
   *     Full client name. User login is returned in a case neither first name, nor last name specified.
   * An empty string is returned in a case neither first name, nor last name specified, nor login.
   * 
   *   </dd>
   * 
   *   <dt>string `text_name_full_staff`</dt>
   *   <dd>
   *     Full staff name. User login is returned in a case neither first name, nor last name specified. An empty string is returned in a case neither first name, nor last name specified, nor login.
   *   </dd>
   * 
   *   <dt>string `text_name_last_staff`</dt>
   *   <dd>Staff`s last name.</dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>The user's UID as a staff member. </dd>
   * 
   *   <dt>string `url_photo`</dt>
   *   <dd>User photo URL.</dd>
   * </dl>
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
   * Whether this user can send SMS. If `true` - user can send SMS, otherwise - `false`.
   *
   * @get result
   * @var bool
   */
  public $can_send_message = false;

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
   * This will be set if the user is a staff member ({@link LoginModel::$k_staff}).
   *
   * @get result
   * @var string
   */
  public $text_mail_staff;

  /**
   * The staff member's first name.
   * This will be set if the user is a staff member ({@link LoginModel::$k_staff}).
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
   * This will be set if the user is a staff member ({@link LoginModel::$k_staff}).
   *
   * @get result
   * @var string
   */
  public $text_name_full_staff;

  /**
   * The staff member's last name.
   * This will be set if the user is a staff member ({@link LoginModel::$k_staff}).
   *
   * @get result
   * @var string
   */
  public $text_name_last_staff;

  /**
   * List of users to get information for serialized as JSON string.
   *
   * `null` for mode of single user.
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
   * The user's UID as a staff member for the specified business.
   *
   * @get result
   * @var string|null
   */
  public $uid_staff;

  /**
   * The URL where the user photo can be retrieved.
   *
   * @get result
   * @var string
   */
  public $url_photo;
}

?>