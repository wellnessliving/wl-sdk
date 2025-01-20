<?php

namespace WellnessLiving\Wl\Login\Member;

use WellnessLiving\WlModelAbstract;

/**
 * Displays information about members of businesses.
 */
class MemberModel extends WlModelAbstract
{
  /**
   * A list of businesses where the client is present. Every element is an array with the following keys:
   * <dl>
   *   <dt>
   *     bool <var>can_enter</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if user is allowed to sign in into this business; <tt>false</tt> otherwise.
   *
   *   </dd>
   *   <dt>
   *     bool <var>is_franchisee</var>
   *   </dt>
   *   <dd>
   *     If `true`, then the business is a franchisee. Otherwise, this will be `false`.
   *   </dd>
   *   <dt>
   *     bool <var>is_franchisor</var>
   *   </dt>
   *   <dd>
   *     If `true`, then the business is a franchisor. Otherwise, this will be `false`.
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
   *     The business key of the Enterprise Headquarters account (if applicable).
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