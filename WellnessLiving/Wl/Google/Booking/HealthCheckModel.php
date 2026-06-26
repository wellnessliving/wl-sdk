<?php

namespace WellnessLiving\Wl\Google\Booking;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Health check status API endpoint.
 *
 * Used by Google to check that our services are available.
 *
 * **Cross-datacenter compatibility:** Requests to {@link HealthCheckModel} are routed to a random datacenter.
 * Although this is not entirely correct, we decided to do that to save request time - Google is very demanding to
 * response times.
 *
 * @link https://developers.google.com/maps-booking/reference/rest-api-v3/healthcheck-method
 *
 * @method WlModelRequest get()
 */
class HealthCheckModel extends WlModelAbstract
{
  }

?>