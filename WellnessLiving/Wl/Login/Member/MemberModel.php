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