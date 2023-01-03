<?php

namespace WellnessLiving\Wl\Member\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of active clients with the given active Purchase Options.
 *
 * This endpoint returns only active clients with only active purchase options from the given list.
 */
class MemberByPromotionModel extends WlModelAbstract
{
  /**
   * The list of active clients with the given active Purchase Options.
   *
   * <dl>
   *   <dt>array[] <var>a_purchase_options</var></dt>
   *   <dd>
   *     The list of active Purchase Options. Each element has:
   *
   *     <dl>
   *       <dt>string|null <var>dl_end</var></dt>
   *       <dd>The local date in the location’s timezone, when Purchase Option expires.
   *           It will be `null` if it doesn’t expire.</dd>
   *       <dt>string <var>dtu_purchase</var></dt>
   *       <dd>The global date and time, when the Purchase Option was sold.</dd>
   *       <dt>string|null <var>dl_start</var></dt>
   *       <dd>The local date in location timezone, when Purchase Option starts. It will be `null` if this date isn’t
   *           defined yet. Can be, for example, if starting date is a date of the first visit and there were no visits
   *           yet.</dd>
   *       <dt>string|null <var>dl_terminate</var></dt>
   *       <dd>The local date in location’s timezone when the Purchase Option will be terminated. It will be `null` if
   *           it isn’t scheduled to be terminated.</dd>
   *       <dt>string <var>k_promotion</var></dt>
   *       <dd>The key of the Purchase Option.</dd>
   *     </dl>
   *   </dd>
   *
   *   <dt>string <var>uid</var></dt>
   *   <dd>Key of the client.</dd>
   * </dl>
   *
   * @var array[]
   * @get result
   */
  public $a_clients = [];

  /**
   * The key of the business for which to get a list of clients.
   *
   * @var string
   * @get get
   */
  public $k_business = '';

  /**
   * The comma separated list of the Purchase Option keys.
   * Only active clients with at least one active Purchase Option from this list will be returned.
   *
   * For example: '324,123,11,556'
   *
   * @var string
   * @get get
   */
  public $s_promotion_keys = '';
}


?>