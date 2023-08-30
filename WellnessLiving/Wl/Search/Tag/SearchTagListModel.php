<?php

namespace WellnessLiving\Wl\Search\Tag;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that returns a list of all existing search tags in the system.
 *
 * Search tags can be used for quick searches between businesses and services (mainly in the directories).
 */
class SearchTagListModel extends WlModelAbstract
{
  /**
   * A list of all the search tags.
   *
   * Each element is an array with the following keys:
   * <dl>
   *   <dt>int <var>id_business_category</var></dt>
   *   <dd>
   *     The business category that can use this search tag.
   *     One of the {@link \WellnessLiving\Wl\Business\BusinessCategorySid} constants.
   *     This can be found in the business information found in {@link \WellnessLiving\Wl\Business\DataModel::$id_category}.
   *   </dd>
   *   <dt>string <var>k_search_tag</var></dt>
   *   <dd>The key of the tag. The primary key in the table of tags.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The name of the tag.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_search_tag = [];
}

?>