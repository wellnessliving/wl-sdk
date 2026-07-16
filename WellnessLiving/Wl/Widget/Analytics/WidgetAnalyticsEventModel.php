<?php

namespace WellnessLiving\Wl\Widget\Analytics;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid;
use WellnessLiving\Wl\Service\ServiceSid;

/**
 * Receives versioned analytics events from React Widgets and SDK applications.
 *
 * @method WlModelRequest post() Accepts a Widget analytics event.  Validates the event envelope and payload, stores the event, and schedules asynchronous processing.
 */
class WidgetAnalyticsEventModel extends WlModelAbstract
{
  /**
   * Event-specific payload.
   *
   * <dl>
   *   <dt>array[] `a_item`</dt>
   *   <dd>
   *     Selected checkout items. Each entry has the following structure:
   *     <dl>
   *       <dt>int `id_item`</dt>
   *       <dd>
   *         Item type. A {@link WlPurchaseItemSid} constant for store checkout or a {@link ServiceSid} constant for booking.
   *       </dd>
   * 
   *       <dt>string `k_item`</dt>
   *       <dd>Selected item key.</dd>
   * 
   *       <dt>string `k_item_extra`</dt>
   *       <dd>Event enrollment block key, or an empty string.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>int `id_checkout_type`</dt>
   *   <dd>Checkout type.</dd>
   * 
   *   <dt>string `k_location`</dt>
   *   <dd>Location key.</dd>
   * 
   *   <dt>string|null `k_skin`</dt>
   *   <dd>Widget skin key, or `null` if the Widget does not use a registered skin.</dd>
   * 
   *   <dt>string `m_total`</dt>
   *   <dd>Checkout total.</dd>
   * 
   *   <dt>string `s_funnel_step`</dt>
   *   <dd>Last funnel step reached.</dd>
   * 
   *   <dt>string `s_session_id`</dt>
   *   <dd>Widget checkout session identifier.</dd>
   * 
   *   <dt>string `s_utm_campaign`</dt>
   *   <dd>UTM campaign value.</dd>
   * 
   *   <dt>string `s_utm_medium`</dt>
   *   <dd>UTM medium value.</dd>
   * 
   *   <dt>string `s_utm_source`</dt>
   *   <dd>UTM source value.</dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>User key.</dd>
   * 
   *   <dt>string `url_continue`</dt>
   *   <dd>Continuation URL.</dd>
   * </dl>
   * @field payload
   * @post post
   * @var array
   */
  public $a_payload = [];

  /**
   * Event schema version.
   *
   * @field event_version
   * @post post
   * @var int
   */
  public $i_event_version = 1;

  /**
   * Whether the event was durably accepted for asynchronous processing.
   *
   * @post result
   * @var bool
   */
  public $is_accepted = false;

  /**
   * Business key used for shard and datacenter routing.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * Client-generated idempotency identifier.
   * A retry of the same logical event must use the same value.
   *
   * @field event_id
   * @post post
   * @var string
   */
  public $s_event_id = '';

  /**
   * Event name. Initially only `abandoned_checkout` is supported.
   *
   * @field event_name
   * @post post
   * @var string
   */
  public $s_event_name = '';
}

?>