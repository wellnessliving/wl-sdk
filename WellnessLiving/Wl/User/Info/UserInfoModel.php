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
   * <dl>
   *   <dt>string `k_field`</dt>
   *   <dd>Field key. </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Name of the field. Will be <tt>null</tt> for general fields. Their titles are static.</dd>
   * 
   *   <dt>string `text_value`</dt>
   *   <dd>Value of the field. This is the key of the selected item for `select` and `radio` elements.</dd>
   * 
   *   <dt>string `text_value_title`</dt>
   *   <dd>Title of the selected option for `select` and `radio` elements. Unused for other elements.</dd>
   * </dl>
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
   * <dl>
   *   <dt>int `i_height`</dt>
   *   <dd>The height of the photo.</dd>
   * 
   *   <dt>int `i_width`</dt>
   *   <dd>The width of the photo.</dd>
   * 
   *   <dt>string `url_photo`</dt>
   *   <dd>The URL of the photo.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_photo;

  /**
   * List of user's data.
   *
   * <dl>
   *   <dt>array `a_custom_field`</dt>
   *   <dd>
   *     List of the custom user fields. Each value is:
   *     <dl>
   *       <dt>string `k_field`</dt>
   *       <dd>Field key. </dd>
   * 
   *       <dt>string `text_title`</dt>
   *       <dd>Name of the field. Will be <tt>null</tt> for general fields. Their titles are static.</dd>
   * 
   *       <dt>string `text_value`</dt>
   *       <dd>Value of the field.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string[] `a_member_group`</dt>
   *   <dd>
   *     List of member groups that the user belongs to.
   *    
   *   </dd>
   * 
   *   <dt>array `a_photo`</dt>
   *   <dd>
   *     Information about the user's photo.
   *     <dl>
   *       <dt>int `i_height`</dt>
   *       <dd>The height of the photo.</dd>
   * 
   *       <dt>int `i_width`</dt>
   *       <dd>The width of the photo.</dd>
   * 
   *       <dt>string `url_photo`</dt>
   *       <dd>The URL of the photo.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dt_add`</dt>
   *   <dd>The date the user was added, given in UTC time.</dd>
   * 
   *   <dt>string `dt_birth`</dt>
   *   <dd>The user's birthday. This will be `null` if the birthday isn't set yet.</dd>
   * 
   *   <dt>int `id_gender`</dt>
   *   <dd>The ID of the user's gender. One of the {@link AGenderSid} constants.</dd>
   * 
   *   <dt>bool `is_customer_new`</dt>
   *   <dd>
   *     This will be `true` if the user has never made purchases or reservations in this business.
   * Otherwise, this will be `false`.
   *   </dd>
   * 
   *   <dt>bool `is_traveller`</dt>
   *   <dd>
   *     This will be `true` if the user is a traveler. A traveler is someone whose home location isn't the current location
   * in the Enterprise business.
   *   </dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>The key of the business.
   * This may be empty if system-wide information is needed.</dd>
   * 
   *   <dt>string `k_login_type`</dt>
   *   <dd>The key of the login type. The login type describes the user's client type in this business.</dd>
   * 
   *   <dt>string `s_first_name`</dt>
   *   <dd>The user's first name.</dd>
   * 
   *   <dt>string `s_last_name`</dt>
   *   <dd>The user's last name.</dd>
   * 
   *   <dt>string `s_mail`</dt>
   *   <dd>The user's email address.</dd>
   * 
   *   <dt>string `s_member`</dt>
   *   <dd>
   *     The user's member ID in the business. Also referred to as the client ID in the client's profile. This value
   * is set by the business and separate from the <var>uid</var> value.
   *   </dd>
   * 
   *   <dt>string `s_phone`</dt>
   *   <dd>The user's phone number.</dd>
   * 
   *   <dt>string `s_phone_home`</dt>
   *   <dd>The user's home phone number.</dd>
   * 
   *   <dt>string `s_phone_work`</dt>
   *   <dd>The user's work phone number.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>The key of the user.</dd>
   * 
   *   <dt>string `url_photo`</dt>
   *   <dd>The URL for the user's photo.</dd>
   * </dl>
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