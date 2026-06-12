<?php

namespace WellnessLiving\Wl\Member\Info;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about a member.
 */
class InfoModel extends WlModelAbstract
{
  /**
   * Additional member data or `null` if any data can be shown.
   * Will be filled if {@link InfoModel::$is_full} flag is set.
   *
   * @get result
   * @var array|null
   */
  public $a_info = null;

  /**
   * List of users data.
   * Keys - users primary keys.
   * Keys refer to clients' primary keys, and values refer to clients' data.
   * If `null`, data for a single client is being requested.
   *
   * @get result
   * @var array|null
   */
  public $a_result_list = null;

  /**
   * Primary keys of users whose information must be returned.
   *
   * `null` if data of a single user is requested.
   *
   * @get get
   * @var string[]|null
   */
  public $a_uid = null;

  /**
   * List of dates for load additional information about users.
   *
   * Key is UID of user. Value is date.
   *
   * `null` if data of a single user is requested.
   *
   * @get get
   * @var string[]|null
   */
  public $a_uid_date = null;

  /**
   * Information about last visit of the user.
   *
   * @get result
   * @var array
   */
  public $a_visit_last = [];

  /**
   * Information about next visit of the user.
   *
   * @get result
   * @var array
   */
  public $a_visit_next = [];

  /**
   * Date of the session, if we show it on the appointment info window or on the attendance list.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * Count attend visits for one client.
   *
   * @get result
   * @var int
   */
  public $i_lifetime_visit = 0;

  /**
   * `true` - if API is being used from backend, `false` - otherwise.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * If you need to return additional information set to `true` or `false` if not.
   *
   * @get get
   * @var bool
   */
  public $is_full = false;

  /**
   * If `true`, the client is a traveler. Otherwise, this will be `false`.
   * This will be `null` in cases when the client is a walk-in. Or when {@link InfoModel::$is_full} is `false`.
   *
   * @get result
   * @var bool|null
   */
  public $is_traveller = null;

  /**
   * The business ID required to access client information.
   *
   * Specify this as `0` to retrieve the system-wide version of the information.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * ID of the visit, if we show icons on the attendance list and information that depends on visit is required.
   *
   * @get get
   * @var string
   */
  public $k_visit = '';

  /**
   * The member's lifetime value.
   *
   * @get result
   * @var string
   */
  public $m_lifetime_value = '';

  /**
   * The member ID.
   *
   * If `null`, the specified client isn't a member of the specified business.
   *
   * @get result
   * @var string|null
   */
  public $s_member = null;

  /**
   * A list of icons with additional information about the business member.
   * If empty, all available icons will be displayed.
   *
   * @get get
   * @var string
   */
  public $s_show = '';

  /**
   * First user's name.
   *
   * @get result
   * @var string
   */
  public $text_first_name = '';

  /**
   * Full user's name.
   *
   * @get result
   * @var string
   */
  public $text_fullname = '';

  /**
   * ID of a user to retrieve member information for.
   *
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * URL to barcode image.
   *
   * @get result
   * @var string
   */
  public $url_barcode;

  /**
   * URL to email.
   *
   * @get result
   * @var string
   */
  public $url_email = '';
}

?>