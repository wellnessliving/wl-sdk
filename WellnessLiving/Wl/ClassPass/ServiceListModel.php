<?php

namespace WellnessLiving\Wl\ClassPass;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api endpoint used to retrieve list of services.
 *
 * ## Dispatched URL:
 * * <tt>/cp/v1/partners/{partner_id}/venues/{venue_id}/services?page={page}&page_size={page_size}</tt>.
 *
 * @method WlModelRequest delete()
 * @method WlModelRequest get() Retrieves list of all services.
 * @method WlModelRequest patch()
 * @method WlModelRequest post()
 * @method WlModelRequest put() This method is called to process <tt>PUT</tt> query.
 */
class ServiceListModel extends WlModelAbstract
{
  /**
   * Pagination information.
   *
   * @field pagination
   * @get result
   * @var array
   */
  public $a_pagination;

  /**
   * List of services.
   *
   * @field services
   * @get result
   * @var \Wl\ClassPass\ServiceEntity[]
   */
  public $a_service;

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