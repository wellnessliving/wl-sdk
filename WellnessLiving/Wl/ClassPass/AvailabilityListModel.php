<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint used to retrieve list of services.
 *
 * ## Dispatched URL:
 *   <tt>/cp/v1/partners/{partner_id}/venues/{venue_id}/availability?</tt>
 *   <tt>start_date={start_date}&end_date={end_date}</tt>
 *   <tt>&page={page}&page_size={page_size}</tt>
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get() Retrieves list of all services.
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class AvailabilityListModel extends WlModelAbstract
{
  /**
   * List of availabilities.
   *
   * @field availabilities
   * @get result
   * @var AvailabilityEntity[]
   */
  public $a_availability = [];

  /**
   * Pagination information.
   *
   * @field pagination
   * @get result
   * @var array
   */
  public $a_pagination;

  /**
   * End date of the range to search availability.
   *
   * @field end_date
   * @get get
   * @var string
   */
  public $dl_end;

  /**
   * Start date of the range to search availability.
   *
   * @field start_date
   * @get get
   * @var string
   */
  public $dl_start;

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