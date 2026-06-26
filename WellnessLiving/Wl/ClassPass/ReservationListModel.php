<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Create class from data received from Class Pass.
 *
 * Dispatched URL: <tt>/cp/v1/reservations</tt>.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class ReservationListModel extends WlModelAbstract
{
  /**
   * @field spot_label
   * @post result
   * @var string|null
   */
  public $text_spot_label;
}

?>