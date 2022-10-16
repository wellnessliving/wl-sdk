<?php

namespace WellnessLiving\Wl\Member\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * Returns list of clients with given purchase options.
 *
 * Returns only active clients with only active purchase options from the given list.
 */
class MemberByPromotionModel extends WlModelAbstract
{
  /**
   * List of clients with the given active purchase options.
   *
   * <dl>
   *   <dt>array[] <var>a_purchase_options</var></dt>
   *   <dd>
   *     List of purchase options. Each element has:
   *
   *     <dl>
   *       <dt>string|null <var>dl_end</var></dt>
   *       <dd>Local date in location timezone, when purchase option expires.
   *          `null` if it does not expire.</dd>
   *       <dt>string <var>dtu_purchase</var></dt>
   *       <dd>Global date and time, when purchase option was sold.</dd>
   *       <dt>string|null <var>dl_start</var></dt>
   *       <dd>Local date in location timezone, when purchase option starts.
   *          `null` if this date is not defined yet. Can be, for example, if starting date is a date of the first visit and
   *          there were no visits yet.</dd>
   *       <dt>string|null <var>dl_terminate</var></dt>
   *       <dd>Local date in location timezone, when purchase option will be terminated.
   *          `null` if it's not scheduled to be terminated.</dd>
   *       <dt>string <var>k_promotion</var></dt>
   *       <dd>Key of the purchase option.</dd>
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
   * Key of the business to find clients in.
   *
   * @var string
   * @get get
   */
  public $k_business = '';

  /**
   * Separated with comma list of keys of the purchase options, which should have clients to be returned.
   *
   * For example: '324,123,11,556'
   *
   * @var string
   * @get get
   */
  public $s_promotion_keys = '';
}


?>