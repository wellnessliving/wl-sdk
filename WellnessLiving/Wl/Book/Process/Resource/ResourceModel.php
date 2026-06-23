<?php

namespace WellnessLiving\Wl\Book\Process\Resource;

use WellnessLiving\Core\a\ADateWeekSid;
use WellnessLiving\Core\a\ADurationSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Resource\Image\ImageIconSid;
use WellnessLiving\Wl\Resource\Image\ImageShapeSid;

/**
 * Selects assets for making a booking.
 *
 * @deprecated Use {@link Resource54Model} instead.
 *
 * @method WlModelRequest get() Returns the list of available assets for the booking session, grouped by asset category.  Loads all asset categories and their items available for the given class period or selected sessions, strips shared resources that clients should not choose individually, attaches image data and occupancy information, and returns the result as `a_resource_all`.
 * @method WlModelRequest post() Saves the asset selection for the booking and attempts to book the session if no further steps are required.  Validates and stores the selected assets and session data in the booking process context, then, when no quiz step is needed and payment is not required, attempts to complete the booking immediately. Returns visit keys, activity keys, and a flag indicating whether further wizard steps are needed.
 */
class ResourceModel extends WlModelAbstract
{
  /**
   * The keys of a user's activity.
   * This won't be empty only if the session(s) was booked at this step.
   *
   * @post result
   * @var string[]
   */
  public $a_login_activity = [];

  /**
   * Information about the recurring booking:
   *
   * This will be `null` if the booking isn't recurring.
   *
   * <dl>
   *   <dt>int[] `a_day`</dt>
   *   <dd>
   *     The days of week when the appointment repeat.One of the {@link ADateWeekSid} constants.
   * Should be passed for any type of repetition.
   *   </dd>
   * 
   *   <dt>int[] `a_week`</dt>
   *   <dd>Deprecated, use `a_day` instead!</dd>
   * 
   *   <dt>string `dl_end`</dt>
   *   <dd>Deprecated, use `dt_from` and `dt_to` instead!</dd>
   * 
   *   <dt>string `dt_from`</dt>
   *   <dd>Date to start recurring booking.
   * Expected for `id_repeat_</dd>
   * 
   *   <dt>string `dt_to`</dt>
   *   <dd>Date to complete recurring booking.
   * Expected for `id_repeat_</dd>
   * 
   *   <dt>int `i_count`</dt>
   *   <dd>
   *     The number of occurrences after which the appointment's repeat cycle stops.
   *  Should be empty if the repeat cycle doesn't stop after a certain number of occurrences.
   *  Expected for `id_repeat_
   *   </dd>
   * 
   *   <dt>int `i_duration`</dt>
   *   <dd>Count of days\weeks\months between recurring bookings.</dd>
   * 
   *   <dt>int `i_occurrence`</dt>
   *   <dd>Deprecated, use `i_count` instead!</dd>
   * 
   *   <dt>int `i_period`</dt>
   *   <dd>Deprecated, use `i_duration` instead!</dd>
   * 
   *   <dt>int `id_duration`</dt>
   *   <dd>
   *     The measurement unit of `i_period`. One of the {@link ADurationSid} constants.
   * Available duration units are: {@link ADurationSid::DAY}, {@link ADurationSid::WEEK}, {@link ADurationSid::MONTH}.
   *   </dd>
   * 
   *   <dt>int `id_period`</dt>
   *   <dd>Deprecated, use `id_duration` instead! One of {@link ADurationSid} constants.</dd>
   * 
   *   <dt>int `id_repeat_end`</dt>
   *   <dd>Possible ways to stop repeatable events.</dd>
   * </dl>
   * @post post
   * @var array|null
   */
  public $a_repeat = null;

  /**
   * A list of asset categories which are available for specified session. Every element has next keys:
   *
   * <dl>
   *   <dt>bool[][] `a_client`</dt>
   *   <dd>
   *     A list of clients who have already occupied assets for this session.
   * 1st level keys are asset keys. 
   * 2nd level keys are asset index numbers (starting from 1).
   * Values are `true` if the asset spot is occupied.
   * For example, to check if asset spot 10 with key '125' is occupied,
   * check `a_client['125']['10']`.
   *   </dd>
   * 
   *   <dt>array[] `a_resource_list`</dt>
   *   <dd>
   *     A list of available assets. Every element has next keys:
   *     <dl>
   *       <dt>int[][][] `a_class_period`</dt>
   *       <dd>
   *         List of resources available for booking sessions.
   *   The field structure is `[k_class_period][dtu_session]['a_available']`.
   *   Contains indexes of resource available for each session.
   *       </dd>
   * 
   *       <dt>array `a_image`</dt>
   *       <dd>
   *         Asset image data.
   * 
   *         <dl>
   *           <dt>int `i_angle`</dt>
   *           <dd>Angle of shape rotation. Set only when `sid_image` equals 'shape'.</dd>
   * 
   *           <dt>int `i_height`</dt>
   *           <dd>Height of the image in pixels.</dd>
   * 
   *           <dt>int `i_width`</dt>
   *           <dd>Width of the image in pixels.</dd>
   * 
   *           <dt>bool `is_empty`</dt>
   *           <dd>`true` if no image was uploaded, `false` otherwise.</dd>
   * 
   *           <dt>string `sid_image`</dt>
   *           <dd>Image kind.</dd>
   * 
   *           <dt>string `sid_image_icon`</dt>
   *           <dd>
   *             Icon name. One of {@link ImageIconSid} string constants.
   * Set only when `sid_image` equals 'icon'.
   *           </dd>
   * 
   *           <dt>string `sid_image_shape`</dt>
   *           <dd>
   *             Shape name. One of {@link ImageShapeSid} string constants.
   * Set only when `sid_image` equals 'shape'.
   *           </dd>
   * 
   *           <dt>string `url`</dt>
   *           <dd>Thumbnail image URL.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>int `i_index`</dt>
   *       <dd>The asset number. Actual for assets with a quantity more than <tt>1</tt>.</dd>
   * 
   *       <dt>int `i_quantity`</dt>
   *       <dd>Total number of the asset spots.</dd>
   * 
   *       <dt>int `i_use`</dt>
   *       <dd>Number of already used asset units.</dd>
   * 
   *       <dt>bool `is_current`</dt>
   *       <dd>City for the off-site location.</dd>
   * 
   *       <dt>string `k_city`</dt>
   *       <dd><tt>true</tt> means that this asset is selected by client, <tt>false</tt> - otherwise.</dd>
   * 
   *       <dt>string `k_resource`</dt>
   *       <dd>The key of the asset in database.
   * </dd>
   * 
   *       <dt>string `s_resource`</dt>
   *       <dd>The title of the asset.</dd>
   * 
   *       <dt>string `text_address`</dt>
   *       <dd>Address for the off-site location.</dd>
   * 
   *       <dt>string `text_guide`</dt>
   *       <dd>Additional address tips for the off-site location.</dd>
   * 
   *       <dt>string `text_postal`</dt>
   *       <dd>Postal code for the off-site location.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>bool `has_current`</dt>
   *   <dd><tt>true</tt> - has current resource in the list of available assets; <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>int `id_category`</dt>
   *   <dd>Type of the asset category.</dd>
   * 
   *   <dt>bool `is_client_select`</dt>
   *   <dd><tt>true</tt> - the client selected the resource from the current group; <tt>false</tt> otherwise.</dd>
   * 
   *   <dt>bool `is_select`</dt>
   *   <dd><tt>true</tt> - has selected resources; <tt>false</tt> - otherwise.</dd>
   * 
   *   <dt>bool `is_share`</dt>
   *   <dd>
   *     <tt>true</tt> resources in this category don't belong to certain users, but to the entire session.
   * <tt>false</tt> belong to specific users.
   *   </dd>
   * 
   *   <dt>string `k_resource_layout`</dt>
   *   <dd>The key of the asset layout. </dd>
   * 
   *   <dt>string `k_resource_type`</dt>
   *   <dd>The key of the asset category. </dd>
   * 
   *   <dt>string `s_resource_type`</dt>
   *   <dd>The title of the asset category.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_resource_all = [];

  /**
   * The selected assets. Every element has the next keys:
   *
   * <dl>
   *   <dt>int `i_index`</dt>
   *   <dd>The asset number. Applies only for assets with a quantity greater than <tt>1</tt>.</dd>
   * 
   *   <dt>string `k_resource`</dt>
   *   <dd>The asset key. </dd>
   * </dl>
   * @post post
   * @var array
   */
  public $a_resource_select = [];

  /**
   * The selected sessions.
   * Only makes sense for session events.
   * Optional parameter for GET request: if not passed, all available sessions will be used.
   *
   * Keys are class period keys. 
   * Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_session = [];

  /**
   * The selected sessions on the wait list that are unpaid.
   *
   * Keys are class period keys. 
   * Values are index arrays of date/time strings when the session occurred, in MySQL format and in GMT.
   *
   * @post post
   * @var string[]
   */
  public $a_session_wait_list_unpaid = [];

  /**
   * The keys of the bookings that have been made.
   * Not empty only if session(s) was booked on this step.
   *
   * @post result
   * @var string[]
   */
  public $a_visit = [];

  /**
   * Determines whether the class/event can be booked at this step or not.
   * This is an external process control flag.
   *
   * @post post
   * @var bool
   */
  public $can_book = true;

  /**
   * Date/time to which session is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $dt_date_gmt = '';

  /**
   * The mode type.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * `true` if action is performed as a staff member; `false` otherwise.
   *
   * If `true` is sent, access to the business and to the client will be checked.
   * If `false` is sent, user can book only for himself or for relatives if this is allowed in business settings.
   *
   * @get get
   * @post get
   *
   * @var bool
   */
  public $is_backend = false;

  /**
   * `true` to book unpaid.
   * `false` otherwise.
   *
   * Allows booking unpaid when client has a login promotion that can be used to pay for the service.
   *
   * @post post
   * @var bool
   */
  public $is_book_unpaid = false;

  /**
   * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag is set to `false`.
   *
   * Use this field with caution.
   * The final booking will not use this flag, and the check will still be performed.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_credit_card_check = true;

  /**
   * `true` if user pressed 'Pay later'.
   * `false` if user pressed 'Pay now'.
   *
   * @post post
   * @var bool
   */
  public $is_force_pay_later = false;

  /**
   * `true` - the next steps of the booking wizard are required (for example, to purchase something to book the selected session).
   * `false` - no further booking steps are required.
   *
   * @post result
   * @var bool
   */
  public $is_next = false;

  /**
   * Key of session which is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * Login promotion to be used to book a class.
   *
   * @post post
   * @var string
   */
  public $k_login_promotion = '';

  /**
   * Session pass to be used to book a class.
   *
   * @post post
   * @var string
   */
  public $k_session_pass = '';

  /**
   * `true` to show "book for" option in booking wizard. `false` for default behavior.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $show_relation = false;

  /**
   * The client key for which the booking is being made.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>