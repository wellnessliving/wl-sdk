<?php

namespace WellnessLiving\Wl\Login\Search\StaffApp;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that gets a list of clients whose names match a search string.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of users matching the search string.
   *
   * The list depends on the search query.
   * If the query is empty, recent users will be returned.
   *
   * Each element is an array with the following keys:
   * <dl>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The client’s name.</dd>
   *   <dt>string <var>uid</var></dt>
   *   <dd>The client’s ID.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_list = [];

  /**
   * If `true`, then this user can add other users via the Add Client page.
   *
   * @get result
   * @var bool
   */
  public $can_add = false;

  /**
   * The business ID number used internally by WellnessLiving.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * The search string. Clients can be matched by name or email.
   *
   * @get get
   * @var string
   */
  public $text_search = '';
}

?>