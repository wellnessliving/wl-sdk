<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint used to retrieve list of bookables.
 * Basically this is a working schedule of specific resource. Resource can be whether staff members or assets.
 *
 * ## Dispatched URL:
 * * <tt>/cp/v1/partners/{partner_id}/venues/{venue_id}/bookables</tt>.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get() Retrieves list of all available bookables.
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class BookableListModel extends WlModelAbstract
{
  /**
   * List of bookable items.
   *
   * @field bookables
   * @get result
   * @var BookableEntity[]
   */
  public $a_bookable;

  /**
   * Pagination information.
   *
   * @field pagination
   * @get result
   * @var array
   */
  public $a_pagination;

  /**
   * Partner ID.
   *
   * @get get
   * @var string
   */
  public $s_partner_id;

  /**
   * Venue ID.
   *
   * @get get
   * @var string
   */
  public $s_venue_id;
}

?>