<?php

namespace WellnessLiving\Wl\Login\Member;

use WellnessLiving\WlModelAbstract;

/**
 * Displays list of active members in a business.
 */
class LoginMemberListAllModel extends WlModelAbstract
{
  /**
   * List of UIDs for all active clients that belong to the business.
   *
   * @get result
   * @var array
   */
  public $a_uid = [];

  /**
   * The maximum number of members to return in the list.
   *
   * Use with `uid_last` to get the next page of results.
   *
   * @get get
   * @var int
   */
  public $i_page_size = 150;

  /**
   * The key of the business to get a list of members for.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The last member UID from the previous page.
   * Use with `i_page_size` to get the next page of results.
   * If empty, the first page of results is returned.
   *
   * @get get
   * @var string
   */
  public $uid_last = '';
}

?>