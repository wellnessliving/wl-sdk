<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of all partners.
 *
 * Dispatched URL: <tt>/cp/v1/partners/{partner_id}/venues/{venue_id}/schedules</tt>.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class LocationScheduleModel extends WlModelAbstract
{
  /**
   * @field pagination
   * @get result
   * @var array
   */
  public $a_pagination;

  /**
   * @field schedules
   * @get result
   * @var array
   */
  public $a_schedule = [];

  /**
   * Partner ID.
   *
   * @get get
   * @var string
   */
  public $s_partner;

  /**
   * Venue ID.
   *
   * @get get
   * @var string
   */
  public $s_venue;
}

?>