<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns information of one location.
 *
 * Dispatched URL: <tt>/cp/v1/partners/{partner_id}/venues/{venue_id}</tt>.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class LocationDataModel extends WlModelAbstract
{
  /**
   * @field venue
   * @get result
   * @var array
   */
  public $a_venue;

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