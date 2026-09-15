<?php

namespace WellnessLiving\Wl\Appointment\Book\Promote;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Mode\ModeSid;

/**
 * An API to promote visits from a wait list to an active list for appointment/asset.
 *
 * @method WlModelRequest post() Promotes a waitlisted visit to an active list for an appointment or asset.  Validates that the caller has access to the business and location, that the specified visit  is for an appointment book, and that its scheduled book slot is still available, then  promotes the visit from the wait list. Updates  {@link \Wl\Appointment\Book\Promote\AppointmentBookPromoteApi::$is_wait_confirm} with whether the promoted visit is still  awaiting client confirmation.
 */
class AppointmentBookPromoteModel extends WlModelAbstract
{
  /**
   * ID of the source where a visit was promoted, one of {@link ModeSid} constants.
   *
   * `null` if not initialized yet.
   *
   * @post post
   * @var int|null
   */
  public $id_mode = null;

  /**
   * Whether is awaiting for user confirmation.
   *
   * @post result
   * @var bool
   */
  public $is_wait_confirm = false;

  /**
   * Business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Visit key.
   *
   * @post post
   * @var string
   */
  public $k_visit = '';
}

?>