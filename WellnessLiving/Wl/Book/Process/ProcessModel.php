<?php

namespace WellnessLiving\Wl\Book\Process;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Classes\RequirePaySid;
use WellnessLiving\Wl\Family\Relation\WlFamilyRelationSid;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * Performs the booking wizard steps.
 *
 * @deprecated Use {@link Process54Model} instead.
 */
class ProcessModel extends WlModelAbstract
{
  /**
   * Relationships who clients are allowed to book for.
   * One of the {@link WlFamilyRelationSid} constants.
   *
   * This will be `null` if clients aren't allowed to book for their relationships.
   *
   * @get result
   * @var int[]|null
   * @deprecated Use {@link ProcessModel::$is_family_relation_book} instead. Full list of relatives available, see {@link WlFamilyRelationSid}.
   */
  public $a_family_relation_login_allow;

  /**
   * All the steps to be performed to make a booking. Every element has the next keys:
   *
   * @get result
   * @var array[]
   */
  public $a_path = [];

  /**
   * Information about the recurring booking:
   *
   * This will be `null` if the booking isn't recurring.
   *
   * @post post
   * @var array|null
   */
  public $a_repeat = null;

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
   * The mode type. One of the {@link ModeSid} constants.
   *
   * @get get
   * @post get
   * @var int
   */
  public $id_mode = 0;

  /**
   * The purchase rule ID.
   * One of the {@link RequirePaySid} constants.
   *
   * @get result
   * @var int
   */
  public $id_pay_require;

  /**
   * `true` if this class has age restriction and requires user to specify age. `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_age_require;

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
   * Allowed in {@link ModeSid::WIDGET} mode only.
   *
   * @post post
   * @var bool
   */
  public $is_book_unpaid = false;

  /**
   * Determines if the client must authorize the credit card.
   *
   * @get result
   * @var bool
   */
  public $is_card_authorize = false;

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
   * If `true`, the session being booked is an event. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_event;

  /**
   * Determines whether clients are allowed to book for their relationships without switching profiles.
   *
   * @get result
   * @var bool
   */
  public $is_family_relation_book;

  /**
   * `true` if user pressed 'Pay later'.
   * `false` if user pressed 'Pay now'.
   *
   * @post post
   * @var bool
   */
  public $is_force_pay_later = false;

  /**
   * Determines whether the class/event is free (price).
   *
   * @get result
   * @var bool
   */
  public $is_free = false;

  /**
   * `true` if the client has an ach account, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_have_ach = false;

  /**
   * If `true`, the client has a credit card. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_have_credit_card = false;

  /**
   * `true` - the client can select several sessions per booking.
   *
   * `false` - the client can't select several sessions.
   *
   * @get result
   * @var bool
   */
  public $is_session;

  /**
   * If `true`, the user can be placed on a wait list. Otherwise, this will be `false`.
   *
   * @get result
   * @var bool
   */
  public $is_wait;

  /**
   * If `true`, the user can be placed on a wait list without payment, `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_wait_list_unpaid;

  /**
   * Key of session which is booked.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_class_period = '0';

  /**
   * The key of the location where the session is booked.
   *
   * @get result
   * @var string
   */
  public $k_location;

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