<?php

namespace WellnessLiving\Wl\Login\Member;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Displays information about members of businesses.
 *
 * @method WlModelRequest get() Returns the list of businesses where the specified user is an active member.  Accepts a user key and returns all active businesses where that user has a membership, including franchise relationship flags, business title, and whether the user is allowed to sign in to each business. Forwards the request to other data centers in multi-region deployments and merges the results.
 * @method WlModelRequest post() Adds a user into a business.  Validates that the current user has profile access, then registers the specified user as a member of the given business without sending a registration email.
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