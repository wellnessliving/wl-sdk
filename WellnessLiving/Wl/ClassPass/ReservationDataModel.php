<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Provides manipulations of the reservations.
 *
 * ## Dispatched URL:
 * <tt>/cp/v1/reservations/{reservation_id}</tt>.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class ReservationDataModel extends WlModelAbstract
{
  /**
   * `null` if not defined yet.
   *
   * @patch result
   * @var bool
   */
  public $is_late_cancel = null;

  /**
   * Reservation ID.
   *
   * @patch get
   * @var string
   */
  public $s_reservation;
}

?>