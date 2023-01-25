<?php

namespace WellnessLiving\Wl\Search\Tag;

use WellnessLiving\Wl\Business\BusinessCategorySid;
use WellnessLiving\WlModelAbstract;

/**
 * Returns list of all existing in the system search tags.
 *
 * Search tags can be used for quick search between businesses and services. Mainly in the directories.
 */
class SearchTagListModel extends WlModelAbstract
{
  /**
   * List of all tags.
   *
   * Each element is an array:
   * <dl>
   *   <dt>int <var>id_business_category</var></dt>
   *   <dd>
   *     Category of the business, which can use this search tag.
   *     One of the {@link BusinessCategorySid} constants.
   *     Can be found in business information here {@link \WellnessLiving\Wl\Business\DataModel::$id_category}.
   *   </dd>
   *   <dt>string <var>k_search_tag</var></dt>
   *   <dd>Key of the tag, primary key in the table of tags.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>Name of the tag.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_search_tag = [];
}

?>