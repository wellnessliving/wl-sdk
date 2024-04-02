<?php

namespace WellnessLiving\Wl\User\Info;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about a WellnessLiving user.
 */
class UserInfoModel extends WlModelAbstract
{
  /**
   * Information about the user's photo. The information returned has the following structure:<dl>
   *   <dt>int <var>i_height</var></dt>
   *   <dd>The height of the photo.</dd>
   *
   *   <dt>int <var>i_width</var></dt>
   *   <dd>The width of the photo.</dd>
   *
   *   <dt>string <var>url_photo</var></dt>
   *   <dd>The URL of the photo.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_photo;

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
   * The ID of the user's gender. One of the {@link \WellnessLiving\Core\a\AGenderSid} constants.
   *
   * This will be `null` if the gender isn't set yet.
   *
   * @get result
   * @var int
   */
  public $id_gender;

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
   * The key of the login type. The login type describes the user's client type in this business.
   *
   * @get result
   * @var string
   */
  public $k_login_type;

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
   * The key of the user.
   *
   * @get get
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