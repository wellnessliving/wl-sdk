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
   *
   * <dl>
   *   <dt>bool `can_enter`</dt>
   *   <dd>
   *     <tt>true</tt> if the user is allowed to sign in into this business; <tt>false</tt> otherwise.
   * 
   *   </dd>
   * 
   *   <dt>bool `is_franchisee`</dt>
   *   <dd>If `true`, then the business is a franchisee. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>bool `is_franchisor`</dt>
   *   <dd>If `true`, then the business is a franchisor. Otherwise, this will be `false`.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>The business key. </dd>
   * 
   *   <dt>string `k_business_franchisor`</dt>
   *   <dd>
   *     The business key of the Enterprise Headquarters account (if applicable). 
   *   </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The title of the business.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_business;

  /**
   * Primary key of the business to add the user into.
   *
   * @post post
   * @var string
   */
  public $k_business = '0';

  /**
   * The user's key.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>