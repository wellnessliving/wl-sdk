<?php

namespace WellnessLiving\Wl\Search\Tag;

use WellnessLiving\WlModelAbstract;

/**
 * Returns a list of all existing search tags in the system.
 *
 * Search tags can be used for quick searches between businesses and services (mainly in the directories).
 */
class SearchTagListModel extends WlModelAbstract
{
  /**
   * A list of all the search tags.
   *
   * Each element is an array with the following keys:
   *
   * @get result
   * @var array[]
   */
  public $a_search_tag = [];
}

?>