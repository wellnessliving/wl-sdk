<?php

namespace WellnessLiving\Wl\Login\Member;

use WellnessLiving\WlModelAbstract;

/**
 * Information about members of businesses.
 */
class MemberModel extends WlModelAbstract
{
  /**
   * A list of businesses where the client is present. Every element is an array with the following keys:
   * <dl>
   *   <dt>
   *     bool <var>is_franchisee</var>
   *   </dt>
   *   <dd>
   *     If `true`, then the business is a franchisee. Otherwise, it is `false`.
   *   </dd>
   *   <dt>
   *     string <var>k_business</var>
   *   </dt>
   *   <dd>
   *     The business key.
   *   </dd>
   *   <dt>
   *     string <var>k_business_franchisor</var>
   *   </dt>
   *   <dd>
   *     The business key of the franchise’s corporate account (if applicable).
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     The title of the business.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_business;

  /**
   * The user's key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>