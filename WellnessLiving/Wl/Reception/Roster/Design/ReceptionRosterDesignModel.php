<?php

namespace WellnessLiving\Wl\Reception\Roster\Design;

use WellnessLiving\Core\Drive\DriveTypeSid;
use WellnessLiving\WlModelAbstract;

/**
 * Api endpoint to get information about Attendance Kiosk settings.
 */
class ReceptionRosterDesignModel extends WlModelAbstract
{
  /**
   * Image data for image which will be displayed in attendance web app page.
   * <dl>
   *  <dt>int <var>i_height</var></dt>
   *  <dd>
   *      Requested image height.
   *  </dd>
   *  <dt>int <var>i_height_src</var></dt>
   *  <dd>
   *      Original image height.
   *  </dd>
   *  <dt>int <var>i_width</var></dt>
   *  <dd>
   *      Requested image width.
   *  </dd>
   *  <dt>int <var>i_width_src</var></dt>
   *  <dd>
   *      Original image width.
   *  </dd>
   *  <dt>int <var>id_type_src</var></dt>
   *  <dd>
   *      Image type ID. One of {@link DriveTypeSid} constants.
   *      Will be present only for \Core\Drive\Drive images.
   *  </dd>
   *  <dt>bool <var>is-resize</var></dt>
   *  <dd>
   *      Whether image was resized to satisfy specified
   *      <var>i_width</var> and <var>i_height</var>.
   *  </dd>
   *  <dt>string <var>url-thumbnail</var></dt>
   *  <dd>
   *      Url to requested image.
   *  </dd>
   *  <dt>string <var>url-view</var></dt>
   *  <dd>
   *     Url to original image.
   *  </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_image = [];

  /**
   * Whether to hide client profile images.
   * `true` if client profile images should be hidden, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $hide_profile_images = false;

  /**
   * Number of seconds of inactivity before automatic redirect.
   *
   * @get result
   * @var int
   */
  public $i_attendance_direct_delay = 15;

  /**
   * Number of minutes for the client check-in window after session has started.
   *
   * @get result
   * @var int
   */
  public $i_book_open = 0;

  /**
   * Units of time for the look ahead window for attendance app.
   *
   * @get result
   * @var int
   */
  public $i_book_quick_app = 0;

  /**
   * Delay in seconds on attendance web app confirmation screen before redirect to login screen.
   *
   * @get result
   * @var int
   */
  public $i_confirm_delay = 0;

  /**
   * ID of the action to take when automatically redirecting.
   *
   * @get result
   * @var int result
   */
  public $id_attendance_direct = 1;

  /**
   * Unit of time for the look ahead window for attendance app.
   *
   * @get result
   * @var int
   */
  public $id_book_quick_app = 2;

  /**
   * `true` if clients are allowed to check-in unpaid, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_attend_free = false;

  /**
   * Whether to allow sign-ins to classes in progress.
   *
   * @get result
   * @var bool
   */
  public $is_book_open = false;

  /**
   * `true` if clients are allowed to check-in without booking prior,
   * `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_book_optional = false;

  /**
   * `true` if clients are allowed to sign in before session is started.,
   * `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_book_quick_app = false;

  /**
   * Key of the business.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * `true` - show business name on attendance web app; `false` - do not show.
   *
   * @get result
   * @var bool
   */
  public $show_business_name = false;

  /**
   * `true` - show confirm screen on attendance web app;
   * `false` - do not show.
   *
   * @get result
   * @var bool
   */
  public $show_confirm_screen = false;

  /**
   * Name of the business to display in the attendance web app.
   *
   * @get result
   * @var string
   */
  public $text_business_name = '';
}

?>