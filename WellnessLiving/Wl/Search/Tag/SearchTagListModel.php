<?php

namespace WellnessLiving\Wl\Search\Tag;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Business\BusinessCategorySid;

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
   * <dl>
   *   <dt>int `id_business_category`</dt>
   *   <dd>
   *     The business category that can use this search tag.
   * One of the {@link BusinessCategorySid} constants.
   *
   *   </dd>
   * 
   *   <dt>string `k_search_tag`</dt>
   *   <dd>The key of the tag. The primary key in the table of tags.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The name of the tag.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_search_tag = [];
}

?>