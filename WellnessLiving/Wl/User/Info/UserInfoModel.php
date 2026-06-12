<?php

namespace WellnessLiving\Wl\User\Info;

use WellnessLiving\Core\a\AGenderSid;
use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about a WellnessLiving user.
 */
class UserInfoModel extends WlModelAbstract
{
  /**
   * List of the custom user fields. Each value is: 
   *
   * @get result
   * @var array[]
   */
  public $a_custom_field = [];

  /**
   * List of member groups that the user belongs to.
   *
   * @get result
   * @var string[]
   */
  public $a_member_group = [];

  /**
   * Information about the user's photo. The information returned has the following structure:
   *
   * @get result
   * @var array
   */
  public $a_photo;

  /**
   * List of user's data.
   *
   * @get result
   * @var array[]
   */
  public $a_result_list;

  /**
   * A list of user keys.
   *
   * @get get
   * @var string[]
   */
  public $a_user_list;

  /**
   * Whether the user can purchase introductory offers.
   *
   * `true` if user can purchase introductory offers, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $can_introductory = false;

  /**
   * The date the user was added, given in UTC time.
   *
   * @get result
   * @var string
   */
  public $dt_add;

  /**
   * The user's birthday. This will be `null` if the birthday isn't set yet.
   *
   * @get result
   * @var string
   */
  public $dt_birth;

  /**
   * Whether client's login type has a discount.
   * `true` - login type has a discount, `false` - otherwise.
   *
   * This will be `null` if a client has no assigned login type.
   *
   * @get result
   * @var bool|null
   */
  public $has_discount = null;

  /**
   * The ID of the user's gender. One of the {@link AGenderSid} constants.
   *
   * This will be `null` if the gender isn't set yet.
   *
   * @get result
   * @var int
   */
  public $id_gender;

  /**
   * This will be `true` if the user has Google Calendar linked to their account; otherwise, `false`.
   *
   * @get result
   * @var bool
   */
  public $is_calendar_google;

  /**
   * This will be `true` if the user has Microsoft Calendar linked to their account; otherwise, `false`.
   *
   * @get result
   * @var bool
   */
  public $is_calendar_microsoft;

  /**
   * This will be `true` if the user has never made purchases or reservations in this business.
   * Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_customer_new;

  /**
   * This will be `true` if the user is a traveler. A traveler is someone whose home location isn't the current location
   * in the Enterprise business.
   *
   * @get result
   * @var bool
   */
  public $is_traveller;

  /**
   * The key of the business.
   * This may be empty if system-wide information is needed.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * City key.
   *
   * `null` if "address" field is disabled in the business.
   *
   * @get result
   * @var string|null
   */
  public $k_city;

  /**
   * The key of the login type. The login type describes the user's client type in this business.
   *
   * @get result
   * @var string
   */
  public $k_login_type;

  /**
   * `true` to ignore cache and load information from the database directly.
   * `false` - otherwise.
   *
   * @get get
   * @var bool
   */
  public $not_cached = false;

  /**
   * The user's first name.
   *
   * @get result
   * @var string
   */
  public $s_first_name;

  /**
   * The user's last name.
   *
   * @get result
   * @var string
   */
  public $s_last_name;

  /**
   * The user's email address.
   *
   * @get result
   * @var string
   */
  public $s_mail;

  /**
   * The user's member ID in the business. Also referred to as the client ID in the client's profile. This value
   * is set by the business and separate from the <var>uid</var> value.
   *
   * @get result
   * @var string
   */
  public $s_member;

  /**
   * The user's phone number.
   *
   * @get result
   * @var string
   */
  public $s_phone;

  /**
   * The user's home phone number.
   *
   * @get result
   * @var string
   */
  public $s_phone_home = '';

  /**
   * The user's work phone number.
   *
   * @get result
   * @var string
   */
  public $s_phone_work = '';

  /**
   * Address inside a city.
   *
   * `null` if "address" field is disabled in the business.
   *
   * @get result
   * @var string|null
   */
  public $text_address;

  /**
   * City name.
   *
   * `null` if "address" field is disabled in the business.
   *
   * @get result
   * @var string|null
   */
  public $text_city;

  /**
   * Login type title.
   * Empty if a client has no client type assigned.
   *
   * @get result
   * @var string
   */
  public $text_login_type = '';

  /**
   * Postal code.
   *
   * `null` if "address" field is disabled in the business.
   *
   * @get result
   * @var string|null
   */
  public $text_postal;

  /**
   * The key of the user.
   *
   * @get get,result
   * @var string
   */
  public $uid = '0';

  /**
   * The URL for the user's photo.
   *
   * @get result
   * @var string
   */
  public $url_photo;
}

?>