<?php

namespace WellnessLiving\Wl\Reception\Application;

use WellnessLiving\WlModelAbstract;

/**
 * Returns client information for the Self Check-In Web App.
 */
class MemberInfoModel extends WlModelAbstract
{
  /**
   * Additional member data. This will be filled if the flag from {@link InfoApi::$is_full} is set.
   *
   * This will be `null` if there isn't any data to show.
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
   *     The ID of the color the notice is displayed in.
   *     One of the {@link \WellnessLiving\Wl\Reception\Application\MemberInfoColorSid} constants.
   *   </dd>
   *   <dt>string <var>id_icon</var></dt>
   *   <dd>
   *     The ID of the icon that accompanies the message.
   *     One of the {@link \WellnessLiving\Wl\Reception\Application\MemberInfoIconSid} constants
   *   </dd>
   *   <dt>string <var>text_class</var></dt>
   *   <dd>The name of the class for styles.</dd>
   *   <dt>string <var>text_message</var></dt>
   *   <dd>The plain message for info box.</dd>
   *   <dt>string <var>html_message</var></dt>
   *   <dd>The message for info box.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_items = [];

  /**
   * A list containing client data.
   *
   * Keys refer to clients' primary keys, and values refer to clients' data.
   *
   * If `null`, data for a single client is being requested.
   *
   * @get result
   * @var array|null
   */
  public $a_result_list = null;

  /**
   * The primary keys of clients whose information must be returned.
   *
   * If `null`, data for a single client is being requested.
   *
   * @get get
   * @var string[]|null
   */
  public $a_uid = null;

  /**
   * The session date, if it's shown on the appointment info window or the attendance list.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * If `true`, the API is being used from the backend. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * If `true`, additional information will be returned. Otherwise, this will be `false`.
   *
   * @get get
   * @var bool
   */
  public $is_full = false;

  /**
   * If `true`, the client is a traveler. Otherwise, this will be `false`.
   * This will be `null` in cases when the client is a walk-in or when {@link MemberInfoApi::$is_full} is `false`.
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
   * The visit ID used to show icons on the attendance list and visit information.
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
   * The application key of the Self Check-In Web App.
   *
   * @get get
   * @var string
   */
  public $s_secret = '';

  /**
   * A list of icons with additional information about the business member.
   *
   * If empty, all available icons will be displayed.
   *
   * @get get
   * @var string
   */
  public $s_show = '';

  /**
   * The client's first name.
   *
   * @get result
   * @var string
   */
  public $text_first_name = '';

  /**
   * The client's full name.
   *
   * @get result
   * @var string
   */
  public $text_fullname = '';

  /**
   * The client ID required to access member information.
   *
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * The barcode image URL.
   *
   * @get result
   * @var string
   */
  public $url_barcode;

  /**
   * The email URL.
   *
   * @get result
   * @var string
   */
  public $url_email = '';
}

?>