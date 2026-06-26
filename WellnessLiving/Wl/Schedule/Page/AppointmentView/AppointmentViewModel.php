<?php

namespace WellnessLiving\Wl\Schedule\Page\AppointmentView;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves information about appointment.
 *
 * @method WlModelRequest get() Retrieves information about appointment.
 */
class AppointmentViewModel extends WlModelAbstract
{
  /**
   * Appointment information:
   *
   * <dl>
   *   <dt>array `a_date_end`</dt>
   *   <dd>End date of the appointment.</dd>
   * 
   *   <dt>array `a_date_start`</dt>
   *   <dd>Start date of the appointment.</dd>
   * 
   *   <dt>string `html_description`</dt>
   *   <dd>Description of the appointment.</dd>
   * 
   *   <dt>string `html_special`</dt>
   *   <dd>Special instructions.</dd>
   * 
   *   <dt>bool `is_virtual`</dt>
   *   <dd><tt>true</tt> if the appointment is virtual, <tt>false</tt> otherwise.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location key.</dd>
   * 
   *   <dt>string `text_service`</dt>
   *   <dd>Appointment title.</dd>
   * 
   *   <dt>string `text_staff_name`</dt>
   *   <dd>Staff name.</dd>
   * 
   *   <dt>string `text_timezone`</dt>
   *   <dd>Timezone name.</dd>
   * 
   *   <dt>string `uid_staff`</dt>
   *   <dd>Staff uid.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_appointment = [];

  /**
   * Asset list data.
   *
   * @get result
   * @post result
   * @var array[]|null
   */
  public $a_asset;

  /**
   * Location information:
   *
   * <dl>
   *   <dt>string `text_address`</dt>
   *   <dd>First address line of location.</dd>
   * 
   *   <dt>string `text_address2`</dt>
   *   <dd>Second address line of location.</dd>
   * 
   *   <dt>string `text_city`</dt>
   *   <dd>Name of city.</dd>
   * 
   *   <dt>string `text_phone`</dt>
   *   <dd>Phone number.</dd>
   * 
   *   <dt>string `text_postal`</dt>
   *   <dd>Postal code.</dd>
   * 
   *   <dt>string `text_region`</dt>
   *   <dd>Name of region.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Title of the location.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_location = [];

  /**
   * Service logo data.
   *
   * @get result
   * @var array
   */
  public $a_service_logo = [];

  /**
   * Appointment key.
   *
   * @get get
   * @var string
   */
  public $k_appointment;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>