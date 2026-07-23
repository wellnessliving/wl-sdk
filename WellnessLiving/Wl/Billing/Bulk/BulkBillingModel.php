<?php

namespace WellnessLiving\Wl\Billing\Bulk;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Schedules a bulk billing that charges the same set of purchase items to many clients at once.
 *
 * Call {@link PurchaseItemListModel} first to review the clients and items and to obtain the review id. Then call this
 * endpoint with that review id to schedule the billing, either immediately or on a chosen date and time. The set of
 * clients and items reviewed earlier is billed without having to send it again.
 *
 * @method WlModelRequest post() Schedules the bulk billing.  Reads the prepared data from the temporary session by the review id and schedules the billing. The eligibility and restriction checks were already done during preparation, so they are not repeated here.
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
   * @var array|null
   */
  public $a_schedule_time = null;

  /**
   * The scheduled billing date in `Y-m-d` format (business local time).
   * When empty, the billing runs immediately.
   *
   * @post post
   * @var string|null
   */
  public $dl_schedule = null;

  /**
   * The business key.
   *
   * @post post
   * @var string
   */
  public $k_business = '';

  /**
   * The key of the created purchase batch.
   *
   * @post result
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