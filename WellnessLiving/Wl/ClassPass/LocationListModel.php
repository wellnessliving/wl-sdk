<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Returns a list of all locations of partner.
 *
 * Dispatched URL: <tt>/cp/v1/partners/{partner_id}/venues</tt>.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get()
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class LocationListModel extends WlModelAbstract
{
  /**
   * @field pagination
   * @get result
   * @var mixed
   */
  public $a_pagination;

  /**
   * @field venues
   * @get result
   * @var array
   */
  public $a_venue_list;

  /**
   * Partner ID.
   *
   * @get get
   * @var string
   */
  public $s_partner;
}

?>