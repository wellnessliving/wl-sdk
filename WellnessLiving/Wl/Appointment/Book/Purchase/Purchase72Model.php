<?php

namespace WellnessLiving\Wl\Appointment\Book\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about Purchase Options that can be used to pay for an appointment
 * during creating new or rescheduling existing appointment.
 */
class Purchase72Model extends WlModelAbstract
{
  /**
   * Data about the login prize which can be used to pay for service.
   *
   * @get result
   * @var array
   */
  public $a_login_prize = [];

  /**
   * A list of the client's login promotions that can be applied to a given service.
   *
   * @get result
   * @var array[]
   */
  public $a_login_promotion = [];

  /**
   * An array with information about available Purchase Options.
   *
   * @get result
   * @var array[]
   */
  public $a_purchase = [];

  /**
   * List of redeemable prizes which can be used to pay for service.
   *
   * @get result
   * @var array
   */
  public $a_reward_prize = [];

  /**
   * List of selected services without current {@link PurchaseModel::$k_service}.
   *
   * The list of these services directly affects the list of selected promotions.
   * Depending on the number and order of services, there may be different results.
   *
   * The current {@link PurchaseModel::$k_service} will be added to the end of this list.
   * It is worth considering this list as a list of previously selected services.
   *
   * Each element has the following structure:
   *
   * @get get
   * @var array[]
   *
   * @see PurchaseModel::$k_service
   */
  public $a_service = [];

  /**
   * Session pass information in a case if user books same appointment second time and already has Drop-in.
   *
   * @get result
   * @var array
   */
  public $a_session_pass = [];

  /**
   * List of user keys to book appointments.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * The date to use to check for expiration of Purchase Options.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * The asset booking duration.
   *
   * @get get
   * @var int
   */
  public $i_duration = 0;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int|null
   */
  public $i_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int|null
   */
  public $i_width = 0;

  /**
   * The mode type.
   *
   * @get get
   * @var int
   */
  public $id_mode = 0;

  /**
   * `true` - get all Purchase Options suitable for appointment.
   * `false` - get only Purchase Options available for the client.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Indicates if drop-in rate should be the default purchase option.
   *
   * @get result
   * @var bool
   */
  public $is_single_default = false;

  /**
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * Appointment key.  Not empty in case when we return payment options for rescheduling existing appointment.
   *
   * @get get
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The Purchase Option ID used to pay for the appointment.
   * This will be `null` if the client doesn't have a suitable Purchase Option.
   *
   * @get get,result
   * @var string|null
   * @see PurchaseModel::$text_login_promotion
   */
  public $k_login_promotion = null;

  /**
   * Default promotion key.
   * Empty if the appointment has no default promotion.
   *
   * @get result
   * @var string
   */
  public $k_promotion_default = '';

  /**
   * The resource key.
   *
   * @get get
   * @var string
   */
  public $k_resource = '0';

  /**
   * The service key used to select available Purchase Options.
   * If multiple services are selected, they should be specified in {@link PurchaseModel::$a_service} array.
   *
   * @get get
   * @var string
   * @see PurchaseModel::$a_service
   */
  public $k_service = '0';

  /**
   * The timezone key for {@link PurchaseModel::$dt_date}.
   *
   * Can be `null` if timezone is not selected.
   * If not selected, the default client timezone will be used.
   * 
   * In any case, the timezone will be used if the business allows client timezones.
   *
   * @get get
   * @var string|null
   */
  public $k_timezone = null;

  /**
   * Login promotion title suitable to pay for the services.
   *
   * @get result
   * @var string
   *
   * @see PurchaseModel::$k_login_promotion
   */
  public $text_login_promotion = '';

  /**
   * The user key.
   *
   * This field is used if the client books for himself or for the relative.
   *
   * This field is incorrect to use for guest booking since in this case the client will be checked as a relative.
   *
   * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>