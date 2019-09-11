<?php

namespace WellnessLiving\Wl\Login\Search\StaffApp;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of users.
 */
class SearchListModel extends WlModelAbstract
{
  /**
   * A list of users.
   *
   * The list depends on the search query.
   * If the query is empty then recent users will be loaded.
   *
   * @get result
   * @type {String[]}
   */
  public $a_list = [];

  /**
   * Whether staff has access to the Client Add page or not.
   *
   * @get result
   * @type {Boolean}
   */
  public $can_add = false;

  /**
   * Business ID.
   *
   * @get get
   * @type {String}
   */
  public $k_business = '';

  /**
   * Search query.
   *
   * @get get
   * @type {String}
   */
  public $text_search = '';

  /**
   * User ID that searches.
   *
   * @get get
   * @type {String}
   */
  public $uid = '';
}

?>