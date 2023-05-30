<?php

namespace WellnessLiving\Wl\Member\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns a list of active clients with the given Purchase Options.
 *
 * This endpoint returns only active clients using active Purchase Options from the given list.
 */
class MemberByPromotionModel extends WlModelAbstract
{
  /**
   * The list of active clients with the given Purchase Options.
   *
   * <dl>
   *   <dt>array[] <var>a_purchase_options</var></dt>
   *   <dd>
   *     The list of active Purchase Options. Each element has:
   *
   *     <dl>
   *       <dt>string|null <var>dl_end</var></dt>
   *       <dd>The date in the location’s time zone when the Purchase Option expires.
   *           This will be `null` if the Purchase Option doesn't expire.</dd>
   *       <dt>string <var>dtu_purchase</var></dt>
   *       <dd>The global date and time when the Purchase Option was sold.</dd>
   *       <dt>string|null <var>dl_start</var></dt>
   *       <dd>The date in location's time zone when the Purchase Option starts.
   *           This will be `null` if not defined yet. For example, if the starting date is the date of the first visit
   *           and there haven't been any visits yet.</dd>
   *       <dt>string|null <var>dl_terminate</var></dt>
   *       <dd>The date in location’s time zone when the Purchase Option will be terminated.
   *           This will be `null` if the Purchase Option isn’t scheduled to be terminated.</dd>
   *       <dt>string <var>k_promotion</var></dt>
   *       <dd>The key of the Purchase Option.</dd>
   *     </dl>
   *   </dd>
   *
   *   <dt>string <var>uid</var></dt>
   *   <dd>The key of the client.</dd>
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
   * The comma-separated list of the Purchase Option keys.
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