<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves the full list of a business's appointment services and their categories in a single request.
 *
 * Unlike the location-scoped {@link ServiceList52Model} and {@link CategoryModel}, this endpoint accepts a business key
 * and returns all active appointment services and categories across all locations of the business, deduped, with
 * an array of location keys for each entry.
 *
 * @method WlModelRequest get() Retrieves the full list of appointment services and categories for a business.  Returns all active appointment services and their categories across every location of the business. Each service and category includes an array of location keys where it is available. All active services are returned: unlike the location-scoped list, the result is not filtered by class tab or by online bookability, and removed locations are skipped.
 */
class ServiceListBusinessModel extends WlModelAbstract
{
  /**
 * A list of service categories of the business.
 *
 * Each element has the following structure:
 *
 * <dl>
 *   <dt>string[] `a_location`</dt>
 *   <dd>
 *     List of location keys where this category has at least one active service.
 * 
 *   </dd>
 * 
 *   <dt>int `i_sort`</dt>
 *   <dd>Sort order of the category.</dd>
 * 
 *   <dt>string `k_service_category`</dt>
 *   <dd>Service category key. </dd>
 * 
 *   <dt>string `s_title`</dt>
 *   <dd>Service category title.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_category = [];

  /**
 * A list of appointment services of the business.
 *
 * Each element has the following structure:
 *
 * <dl>
 *   <dt>string[] `a_location`</dt>
 *   <dd>
 *     List of location keys where this service is available.
 * 
 *   </dd>
 * 
 *   <dt>int `i_sort`</dt>
 *   <dd>Sort order of the service within its category.</dd>
 * 
 *   <dt>string `k_service`</dt>
 *   <dd>Service key. </dd>
 * 
 *   <dt>string `k_service_category`</dt>
 *   <dd>Service category key. </dd>
 * 
 *   <dt>string `s_service`</dt>
 *   <dd>Service title.</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_service = [];

  /**
 * The business key.
 *
 * @get get
 * @var string
 */
  public $k_business = '';
}

?>