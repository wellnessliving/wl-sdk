<?php

namespace WellnessLiving\Wl\Appointment\Book;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves an information about booking processing.
 */
class ProfileModel extends WlModelAbstract
{
  /**
   * A list of answers for the appointment question.
   *
   * @get get
   * @type {{}}
   */
  public $a_answer = [];

  /**
   * List of solved conflicts.
   * Fields - appointments date/time (in UTC); values - constants of {@link WlAppointmentEditConflictSid} class.
   *
   * @private
   * @type {{}}
   */
  public $a_conflict = [];

  /**
   * Add-ons selected for appointment.
   * Fields - add-on IDs; values - always <tt>true</tt>.
   *
   * @get get
   * @type {{}}
   */
  public $a_product = [];

  /**
   * List of assets are selected for service booking.
   *
   * Please, never change default value of it to <tt>[]</tt>! Only <tt>{}</tt> must be here!
   *
   * Keys of this array is asset category ID.
   * For example, one of asset category ID is <tt>1000</tt>.
   *
   * In the case of default value <tt>[]</tt> we will have <tt>Array(1001)</tt>.
   * And, when we send it to server, it will be turner to 1000 empty elements + 1 not empty (it is very many).
   *
   * In the case of default value <tt>{}</tt> we will have <tt>{'1000':...}</tt>.
   * And, when we send it to server, it will be turner to 1 element only.
   *
   *
   * @get get
   * @type {{[i_index]:Number,k_resource:String}[]}
   */
  public $a_resource = [];

  /**
   * Sequence of steps in the booking wizard.
   *
   * @type {[]}
   */
  public $a_sequence = [];

  /**
   * Appointment booking date selected by user.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @type {String|null}
   */
  public $dt_date = null;

  /**
   * Duration of the asset.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @type {Number|null}
   */
  public $i_duration = null;

  /**
   * Order number of asset which is selected by user.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @type {Number|null}
   */
  public $i_index = null;

  /**
   * Current step.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @type {Number|null}
   */
  public $i_step_current = null;

  /**
   * ID of class tab type.
   *
   * <tt>null</tt> if not set yet.
   *
   * @type {Number|null}
   */
  public $id_class_tab = null;

  /**
   * Selected gender ID.
   *
   * <tt>null</tt> means that any available staff member was selected.
   *
   * @get get
   * @type {Number|null}
   */
  public $id_gender_staff = null;

  /**
   * Mode to require some amount while booking an appointment.
   * One of {@link RsServiceRequireSid} constants.
   *
   * <tt>null</tt> if not set yet.
   *
   * @type {Number|null}
   */
  public $id_service_require = null;

  /**
   * Purchase item ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @type {Number|null}
   */
  public $id_purchase_item = null;

  /**
   * <tt>true</tt> - if booking process is aborted,
   * show page "my schedule" (because appointments is not supported and page "book now" is not supported).
   * <tt>false</tt> - if booking process is aborted, show page "book now".
   *
   * @type {Boolean}
   */
  public $is_appointment_only = false;

  /**
   * <tt>true</tt> - wizard must work in backend mode; <tt>false</tt> - in frontend mode.
   *
   * @type {Boolean}
   */
  public $is_backend = false;

  /**
   * Determines that current step is the last step.
   *
   * @type {boolean}
   */
  public $is_finish = false;

  /**
   * Determines that customer selected 'Pay later' option.
   *
   * @type {boolean}
   */
  public $is_pay_later = false;

  /**
   * Determines that we have gone to the current step from the previous step.
   *
   * <tt>true</tt> if we have gone to the current step from the previous step, <tt>false</tt> - from the next step.
   *
   * @type {boolean}
   */
  public $is_previous = false;

  /**
   * Determines that client will book appointment which staff member must approve.
   *
   * <tt>true</tt> if staff member must approve appointments, <tt>false</tt> otherwise.
   *
   * @type {boolean}
   */
  public $is_staff_confirm = false;

  /**
   * ID of appointment to be rescheduled.
   * For backend mode.
   *
   * <tt>null</tt> to book new appointment.
   *
   * @type {String|null}
   */
  public $k_appointment = null;

  /**
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @type {String|null}
   */
  public $k_business = null;

  /**
   * Class tab ID to filter services.
   *
   * <tt>null</tt> if not set yet.
   *
   * @type {String|null}
   */
  public $k_class_tab = null;

  /**
   * Purchase item ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @type {String|null}
   */
  public $k_id = null;

  /**
   * Selected location ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @type {String|null}
   */
  public $k_location = null;

  /**
   * Promotion ID to pay for the appointment.
   *
   * <tt>null</tt> if client does not have suitable promotion.
   *
   * @get get
   * @type {String|null}
   */
  public $k_login_promotion = null;

  /**
   * Selected asset ID.
   *
   * <tt>null</tt> if not set yet. Must be set if {@link Wl_Appointment_Book_ProviderModel.k_service} is null.
   *
   * @get get
   * @type {String|null}
   */
  public $k_resource = null;

  /**
   * Selected asset category ID.
   *
   * <tt>null</tt> if not set yet. Must be set if {@link Wl_Appointment_Book_ProviderModel.k_service_category} is null.
   *
   * @get get
   * @type {String|null}
   */
  public $k_resource_category = null;

  /**
   * Selected service ID.
   *
   * <tt>null</tt> if not set yet. Must be set if {@link Wl_Appointment_Book_ProviderModel.k_resource} is null.
   *
   * @get get
   * @type {String|null}
   */
  public $k_service = null;

  /**
   * Selected service category ID.
   *
   * <tt>null</tt> if not set yet. Must be set if {@link Wl_Appointment_Book_ProviderModel.k_resource_category} is null.
   *
   * @get get
   * @type {String|null}
   */
  public $k_service_category = null;

  /**
   * Certain service category which booking process must be started for.
   *
   * <tt>null</tt> to promote user select service category.
   *
   * @type {String|null}
   */
  public $k_service_category_default = null;

  /**
   * Selected staff ID.
   *
   * <tt>null</tt> if staff member is not selected.
   *
   * @get get
   * @type {String|null}
   */
  public $k_staff = null;

  /**
   * This value is set if user selects time which is already occupied by another user and staff member
   * (but service capacity is not exhausted).
   * In this case ID of staff member is here.
   *
   * <tt>null</tt> if user selects not occupied time.
   *
   * @get get
   * @type {String|null}
   */
  public $k_staff_date = null;

  /**
   * ID of user to book appointment for.
   *
   * <tt>null</tt> to book for current user.
   *
   * @private
   * @type {String|null}
   */
  public $uid = null;
}

?>