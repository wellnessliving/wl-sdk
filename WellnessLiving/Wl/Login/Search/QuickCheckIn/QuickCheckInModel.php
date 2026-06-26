<?php

namespace WellnessLiving\Wl\Login\Search\QuickCheckIn;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlProfileNoteSid;

/**
 * Returns today's check-in sessions for a client when QUICK AUTO Check-In is active
 *  and "Navigate to client profile after QUICK AUTO Check-In scan" is disabled.
 *
 * If the business setting is enabled, returns the profile URL for navigation instead.
 *
 * @method WlModelRequest get()
 */
class QuickCheckInModel extends WlModelAbstract
{
  /**
   * Alert items for display in the check-in result modal.
   *
   * Empty when {@link QuickCheckInModel::$is_navigate} is `true` or when no alerts exist.
   *
   * Keys used for rendering: `html_text`, `s_class_css`, `s_text`, `url`, `is_panel`, `s_onclick`,
   *  `s_url`, `is_birthday_icon`, `is_hide`.
   *
   * @get result
   * @var array[]
   */
  public $a_note = [];

  /**
   * List of today's sessions available for check-in.
   * Empty when {@link QuickCheckInModel::$is_navigate} is `true` or when no sessions are found.
   * Each element: 
   *
   * <dl>
   *   <dt>string `dtu_date`</dt>
   *   <dd>Session datetime in UTC.</dd>
   * 
   *   <dt>int `i_book`</dt>
   *   <dd>Number of booked spots. `0` for gym visits and appointments.</dd>
   * 
   *   <dt>int `i_capacity`</dt>
   *   <dd>Total session capacity. `0` means unlimited (gym visits, appointments).</dd>
   * 
   *   <dt>int `id_profile_note`</dt>
   *   <dd>
   *     Profile note ID from {@link WlProfileNoteSid} that caused the denial, or `0` if there is no
   *    corresponding note. Used on the client side to suppress the specific denial message when the same issue
   *    is already shown in the alerts panel on the left.
   *   </dd>
   * 
   *   <dt>int `id_service`</dt>
   *   <dd>Service type.</dd>
   * 
   *   <dt>bool `is_access`</dt>
   *   <dd>`true` if the client already has access (membership or pass). `false` otherwise.</dd>
   * 
   *   <dt>bool `is_attend`</dt>
   *   <dd>`true` if the client has already attended this session today. `false` otherwise.</dd>
   * 
   *   <dt>bool `is_book`</dt>
   *   <dd>`true` if the client is already in the booking list. `false` otherwise.</dd>
   * 
   *   <dt>string `k_appointment`</dt>
   *   <dd>Appointment prrimary key. `'0'` if not an appointment.</dd>
   * 
   *   <dt>string|null `k_class`</dt>
   *   <dd>Class primary key. `0` for gym visits and appointments.</dd>
   * 
   *   <dt>string `k_class_period`</dt>
   *   <dd>Class session prrimary key. `0` if not a class.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location primary key.</dd>
   * 
   *   <dt>bool `show_free`</dt>
   *   <dd>`true` if the client can check in without payment. `false` if payment is required.</dd>
   * 
   *   <dt>string `text_deny`</dt>
   *   <dd>Human-readable denial reason when the client cannot check in. Empty string when check-in is available.</dd>
   * 
   *   <dt>string `text_location`</dt>
   *   <dd>Location name for display.</dd>
   * 
   *   <dt>string `text_service`</dt>
   *   <dd>Service name for display.</dd>
   * 
   *   <dt>string `text_room`</dt>
   *   <dd>Room name for display. Empty if no room is assigned to the session.</dd>
   * 
   *   <dt>string `text_staff`</dt>
   *   <dd>Staff name(s) for display. Empty for gym visits.</dd>
   * 
   *   <dt>string `text_time`</dt>
   *   <dd>Session time formatted for display. Empty for gym visits.</dd>
   * 
   *   <dt>string `url_attendance`</dt>
   *   <dd>Link to the attendance page for this session. Empty if not applicable.</dd>
   * 
   *   <dt>string `url_book_process`</dt>
   *   <dd>URL for the paid booking flow. Non-empty only for class sessions requiring payment.</dd>
   * 
   *   <dt>string `url_image`</dt>
   *   <dd>Class thumbnail image URL for the session preview. Empty for gym visits.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_session = [];

  /**
   * Number of seconds before the session popup auto-closes when all sessions are already attended.
   * Used only when {@link QuickCheckInModel::$is_attend_quick_close_success} is `true`.
   *
   * @get result
   * @var int
   */
  public $i_attend_quick_close_success = 0;

  /**
   * Whether the session popup should auto-close when all sessions are already attended.
   * The popup closes after {@link QuickCheckInModel::$i_attend_quick_close_success} seconds.
   *
   * @get result
   * @var bool
   */
  public $is_attend_quick_close_success = false;

  /**
   * `true` if the business is configured to navigate to the client profile after a QUICK AUTO Check-In scan.
   *  In this case {@link QuickCheckInModel::$url_user_profile} is non-empty and {@link QuickCheckInModel::$a_session} is empty.
   * `false` if sessions should be processed - see {@link QuickCheckInModel::$a_session}.
   *
   * @get result
   * @var bool
   */
  public $is_navigate = true;

  /**
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * Client full name.
   *
   * @get result
   * @var string
   */
  public $text_user_name = '';

  /**
   * Client user key.
   *
   * @get get
   * @var string
   */
  public $uid = '';

  /**
   * Client photo URL for display in the session popup.
   *
   * @get result
   * @var string
   */
  public $url_user_photo = '';

  /**
   * Client profile URL. Used for navigation when {@link QuickCheckInModel::$is_navigate} is `true`,
   *  and for the "View profile" link in the session popup when `false`.
   *
   * @get result
   * @var string
   */
  public $url_user_profile = '';
}

?>