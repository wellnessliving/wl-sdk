<?php

namespace WellnessLiving\Wl\User\Info;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about a WellnessLiving user.
 */
class UserInfoModel extends WlModelAbstract
{
  /**
   * Information about the user's photo. It has the following structure:<dl>
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
  public $a_photo = [];

  /**
   * The date the user was added, given in UTC time.
   *
   * @get result
   * @var string
   */
  public $dt_add = '';

  /**
   * The user's birthday. This will be <tt>null</tt> if the birthday is not set.
   *
   * @get result
   * @var string
   */
  public $dt_birth = '';

  /**
   * ID of user's gender. One of the {@link \AGenderSid} constants.
   *
   * This will be <tt>null</tt> If gender is not set.
   *
   * @get result
   * @var int
   */
  public $id_gender = 0;

  /**
   * This will be <tt>true</tt> if the user has never made purchases or reservations in this business.
   * It will be <tt>false</tt> otherwise.
   *
   * @get result
   * @var int
   */
  public $is_customer_new = [];

  /**
   * This will be <tt>true</tt> if the user is a traveller. A traveller is someone who's home Franchisee is
   * not the current Franchisee.
   *
   * @get result
   * @var int
   */
  public $is_traveller = [];

  /**
   * Key of the business.
   * This may be empty if we need system-wide information.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The key of the login type. The login type describes what type of client this user is in this business.
   *
   * @get result
   * @var string
   */
  public $k_login_type = [];

  /**
   * The user's first name.
   *
   * @get result
   * @var string
   */
  public $s_first_name = [];

  /**
   * The user's last name.
   *
   * @get result
   * @var string
   */
  public $s_last_name = [];

  /**
   * The user's email address.
   *
   * @get result
   * @var string
   */
  public $s_mail = [];

  /**
   * The user's Member ID in the business. Also referred to as the Client ID in the client's profile. This value
   * is set by the business and is separate from the uid value.
   *
   * @get result
   * @var string
   */
  public $s_member = [];

  /**
   * The user's phone number.
   *
   * @get result
   * @var string
   */
  public $s_phone = [];

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
  public $url_photo = [];

}

?>