<?php

namespace WellnessLiving\Core\Timing;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**/
class ComponentTimingModel extends WlModelAbstract
{
  /**
 * List of timing entries. Each entry has next keys:
 *
 * JSON-encoded array may arrive as a `string`.
 *
 * <dl>
 *   <dt>array[] `a_request`</dt>
 *   <dd>
 *     Only for view entries. Timings of the requests made while the view was loading. Absent for request
 * entries. Each item has next keys:
 *     <dl>
 *       <dt>int `i_duration_network`</dt>
 *       <dd>Approximate network duration in milliseconds. `null` if `i_duration_server` is unavailable.</dd>
 * 
 *       <dt>int `i_duration_server`</dt>
 *       <dd>Server-side processing duration in milliseconds. `null` if the header was not present.</dd>
 * 
 *       <dt>int `i_duration_total`</dt>
 *       <dd>Total client-perceived duration of the request in milliseconds.</dd>
 * 
 *       <dt>bool `is_success`</dt>
 *       <dd>`true` if the request succeeded, `false` otherwise.</dd>
 * 
 *       <dt>string|null `s_correlation`</dt>
 *       <dd>Correlation ID of the timed request, taken from the `X-Correlation-Id` response header.</dd>
 * 
 *       <dt>string `s_url`</dt>
 *       <dd>URL of the timed request.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>int `i_duration_network`</dt>
 *   <dd>
 *     Approximate network duration in milliseconds (`i_duration_total` minus `i_duration_server`).
 * `null` if `i_duration_server` is unavailable.
 *   </dd>
 * 
 *   <dt>int `i_duration_render`</dt>
 *   <dd>
 *     Only for view entries. Browser-side duration in milliseconds: from the moment view data is ready
 * until the rendered content is painted. Absent for request entries.
 *   </dd>
 * 
 *   <dt>int `i_duration_server`</dt>
 *   <dd>
 *     Server-side processing duration in milliseconds, taken from the `X-Response-Time` response
 * header. `null` if the header was not present, for example on a network failure.
 *   </dd>
 * 
 *   <dt>int `i_duration_startup`</dt>
 *   <dd>
 *     Only for view entries. Duration of the view startup in milliseconds, mostly waiting for models.
 * Absent for request entries.
 *   </dd>
 * 
 *   <dt>int `i_duration_total`</dt>
 *   <dd>Total client-perceived duration in milliseconds: of the request, or of the whole view load.</dd>
 * 
 *   <dt>bool `is_success`</dt>
 *   <dd>`true` if the request succeeded, `false` otherwise.</dd>
 * 
 *   <dt>string `s_component`</dt>
 *   <dd>Component name, as set by the caller in `WlSdk_ModelAbstract::s_timing_component`.</dd>
 * 
 *   <dt>string|null `s_correlation`</dt>
 *   <dd>Correlation ID of the timed request, taken from the `X-Correlation-Id` response header.</dd>
 * 
 *   <dt>string `s_url`</dt>
 *   <dd>URL of the timed request.</dd>
 * </dl>
 * @post post
 * @var array|string
 */
  public $a_timing_list = [];
}

?>