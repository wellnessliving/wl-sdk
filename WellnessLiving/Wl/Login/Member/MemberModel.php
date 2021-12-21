<?php

namespace WellnessLiving\Wl\Login\Member;

use WellnessLiving\WlModelAbstract;

/**
 * Information about members of businesses.
 */
class MemberModel extends WlModelAbstract
{
  /**
   * Businesses, member of which is user. Every element has next keys:
   * <dl>
   *   <dt>
   *     bool <var>is_franchisee</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> if business is franchisee; <tt>false</tt> otherwise.
   *   </dd>
   *   <dt>
   *     string <var>k_business</var>
   *   </dt>
   *   <dd>
   *     Business key.
   *   </dd>
   *   <dt>
   *     string <var>k_business_franchisor</var>
   *   </dt>
   *   <dd>
   *     Corporate account of the business franchise.
   *   </dd>
   *   <dt>
   *     string <var>text_title</var>
   *   </dt>
   *   <dd>
   *     Title of business.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_business;

  /**
   * User key.
   *
   * @get get
   * @var string
   */
  public $uid = '0';
}

?>