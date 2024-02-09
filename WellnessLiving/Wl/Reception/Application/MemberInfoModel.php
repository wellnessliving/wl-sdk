<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about user for self check in application.
 */
class MemberInfoModel extends WlModelAbstract
{
  /**
   * Additional member data or `null` if any data can be shown. Will be filled if {@link InfoApi::$is_full} flag is set.
   *
   * @get result
   * @var array|null
   */
  public $a_info = null;

  /**
   * Items, which are prepared for application.
   *
   * They are generated here, because js has limitation for work with translated messages.
   *
   * <dl>
   *   <dt>string <var>id_color</var></dt>
   *   <dd>
   *     ID of color the notice is displayed in.
   *     One of {@link \WellnessLiving\Wl\Reception\Application\MemberInfoColorSid} constants.
   *   </dd>
   *   <dt>string <var>id_icon</var></dt>
   *   <dd>
   *     ID of icon that accompanies the message.
   *     One of {@link \WellnessLiving\Wl\Reception\Application\MemberInfoIconSid} constants
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
   * Keys - users primary keys. Values - users data.
   *
   * `null` if data of a single user is requested.
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
   * `true` if user is traveller; `false` otherwise.
   * `null` in case when user is walk-in or when {@link MemberInfoApi::$is_full} is `false`.
   *
   * @get result
   * @var bool|null
   */
  public $is_traveller = null;

  /**
   * ID of a business to retrieve information within.
   *
   * 0 to retrieve system-wide version of information.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Key of the location, where Self Check In application is run.
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
   * Member ID. `null` if specified user is not a member of specified business.
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
   * List of icons with additional information about business member.
   * If empty, then all available icons will be displayed.
   *
   * @get get
   * @var string
   */
  public $s_show = '';

  /**
   * First user name.
   *
   * @get result
   * @var string
   */
  public $text_first_name = '';

  /**
   * Full user name.
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