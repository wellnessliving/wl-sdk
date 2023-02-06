<?php

namespace WellnessLiving\Wl\Login\Search\StaffApp;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves a list of users.
 */
class SearchListModel extends WlModelAbstract
{
  /**
   * A list of users.
   *
   * The list depends on the search query.
   * If the query is empty, recent users will be returned.
   *
   * @get result
   * @type {String[]}
   */
  public $a_list = [];

  /**
   * Determines whether the staff member has access to the Client Add page.
   *
   * @get result
   * @type {Boolean}
   */
  public $can_add = false;

  /**
   * The business ID.
   *
   * @get get
   * @type {String}
   */
  public $k_business = '';

  /**
   * The search query.
   *
   * @get get
   * @type {String}
   */
  public $text_search = '';

  /**
   * The ID of the user performing the search.
   *
   * @get get
   * @type {String}
   */
  public $uid = '';
}

?>