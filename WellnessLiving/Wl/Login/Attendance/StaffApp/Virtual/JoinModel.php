<?php

namespace WellnessLiving\Wl\Login\Attendance\StaffApp\Virtual;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to get information about virtual service.
 *
 * @method WlModelRequest get()
 */
class JoinModel extends WlModelAbstract
{
  /**
   * Local date with time of start virtual service.
   *
   * @get result
   * @var string
   */
  public $dtl_service = '';

  /**
   * Date with time in UTC of class period {@link JoinModel::$k_class_period}.
   * <tt>null</tt> - If the virtual service wait page is open for another type of service. For example: to the appointment.
   *
   * @get get
   * @var string|null
   */
  public $dtu_class_period = null;

  /**
   * Date with time in UTC of start virtual service.
   *
   * @get result
   * @var string
   */
  public $dtu_service = '';

  /**
   * <tt>true</tt> if business use FitLIVE, <tt>false</tt> otherwise.
   *
   * @get result
   * @var string
   */
  public $is_fitlive = '';

  /**
   * Key of the virtual appointment.
   * <tt>null</tt> - If the virtual service wait page is open for another type of service. For example: to the class period.
   *
   * @get get
   * @var string|null
   */
  public $k_appointment = null;

  /**
   * Key of the business, where session is going on.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Key of the virtual class period.
   * <tt>null</tt> - If the virtual service wait page is open for another type of service. For example: to the appointment.
   *
   * @get get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * Name of the virtual service.
   *
   * @get result
   * @var string
   */
  public $text_service = '';

  /**
   * The redirect to zoom meeting.
   *
   * @get result
   * @var string
   */
  public $url_virtual_redirect;
}

?>