<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about user for self check in application.
 */
class MemberInfoModel extends WlModelAbstract
{
  /**
   * Additional member data or `null` if any data can be shown.
   *
   * @get result
   * @var array|null
   */
  public $a_info = null;

  /**
   * The options presented in the web app.
   *
   * The items are generated this way due to JavaScript limitations around translated messages.
   *
   * <dl>
   *   <dt>string <var>id_color</var></dt>
   *   <dd>
   *     ID of color the notice is displayed in.
   *     One of {@link MemberInfoColorSid} constants.
   *   </dd>
   *   <dt>string <var>id_icon</var></dt>
   *   <dd>
   *     ID of icon that accompanies the message.
   *     One of {@link MemberInfoIconSid} constants.
   *   </dd>
   *   <dt>string <var>text_class</var></dt>
   *   <dd>Name of the class for styles.</dd>
   *   <dt>string <var>text_message</var></dt>
   *   <dd>Plain message for info box.</dd>
   *   <dt>string <var>html_message</var></dt>
   *   <dd>Message for info box.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_items = [];

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
   * Date of the session, if we show it on the appointment info window or on the attendance list.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

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
   * This will be `null` in cases when the client is a walk-in. Or when {@link MemberInfoModel::$is_full} is `false`.
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
   * The location where the Self Check-In Web App is running.
   *
   * @get get
   * @var string
   */
  public $k_location = '';

  /**
   * ID of the visit, if we show icons on the attendance list and information that depends on visit is required.
   *
   * @get get
   * @var string
   */
  public $k_visit = '';

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
   * Key of the Check In application.
   *
   * @get get
   * @var string
   */
  public $s_secret = '';

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