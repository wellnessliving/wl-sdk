<?php

namespace WellnessLiving\Wl\Billing\Bulk;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages a bulk billing that charges the same set of purchase items to many clients at once.
 *
 * Covers the whole life cycle of a scheduled bulk billing: <ul>
 *   <li>
 *     Schedules the billing, either immediately or on a chosen date and time. Call {@link PurchaseItemListModel} first
 *     to review the clients and items and to obtain the review id, then schedule the billing with that review id. The
 *     set of clients and items reviewed earlier is billed without having to send it again.
 *   </li>
 *   <li>Reschedules a still-scheduled billing to a new date and time.</li>
 *   <li>Cancels a still-scheduled billing so that it is never billed.</li>
 * </ul>
 *
 * Only a billing that has not started yet can be rescheduled or cancelled.
 *
 * @method WlModelRequest delete() Cancels a scheduled bulk billing so that it is never billed.  Only a batch that has not started billing yet can be cancelled.
 * @method WlModelRequest post() Schedules the bulk billing.  Reads the prepared data from the temporary session by the review id and schedules the billing. The eligibility and restriction checks were already done during preparation, so they are not repeated here.
 * @method WlModelRequest put() Reschedules a previously scheduled bulk billing to a new date and time.  A reschedule always targets an explicit date and time. Only a batch that has not started billing yet can be rescheduled.
 */
class BulkBillingModel extends WlModelAbstract
{
  /**
   * The scheduled billing time: 
   *
   * <dl>
   *   <dt>int `i_hour`</dt>
   *   <dd>Number of hours. Value between 1 and 12.</dd>
   * 
   *   <dt>int `i_minute`</dt>
   *   <dd>Number of minutes. Value between 0 and 59.</dd>
   * 
   *   <dt>bool `is_am`</dt>
   *   <dd>Whether hours and minutes AM or PM. `true` if AM.</dd>
   * </dl>
   * @post post
   * @put post
   * @var array|null
   */
  public $a_schedule_time = null;

  /**
   * The scheduled billing date (business local time).
   * When `null` the billing runs immediately.
   *
   * @post post
   * @put post
   * @var string|null
   */
  public $dl_schedule = null;

  /**
   * The business key.
   *
   * @delete post
   * @post post
   * @put post
   * @var string
   */
  public $k_business = '';

  /**
   * The purchase batch key.
   *
   * @delete post
   * @post result
   * @put post
   * @var string
   */
  public $k_purchase_batch = '';

  /**
   * The unique review id returned by {@link PurchaseItemListModel} that identifies the prepared bulk billing
   *  data in the temporary session.
   *
   * @post post
   * @var string
   */
  public $s_id = '';
}

?>