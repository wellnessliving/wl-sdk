<?php

namespace WellnessLiving\Wl\Login\Search\StaffApp;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves a list of users.
 */
class ListModel extends WlModelAbstract
{
  /**
   * A list of users.
   *
   * The list depends on the search query.
   * If the query is empty, the recent users will be loaded.
   *
   * @get result
   * @var array
   */
  public $a_list = [];

  /**
   * Whether staff has access to the Client Add page or not.
   *
   * @get result
   * @var bool
   */
  public $can_add = false;

  /**
   * Business ID.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Search query.
   *
   * @get get
   * @var string
   */
  public $text_search = '';
}

?>