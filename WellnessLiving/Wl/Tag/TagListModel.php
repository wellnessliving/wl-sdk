<?php 

namespace WellnessLiving\Wl\Tag;

use WellnessLiving\WlModelAbstract;

/**
 * Tags API point.
 */
class TagListModel extends WlModelAbstract
{
  /**
   * Tag list.
   *
   * Each element has next structure:<dl>
   * <dt>string <var>k_tag</var> </dt>
   * <dd>Tag key. Primary key in the {@link \RsTagSql} table.</dd>
   * <dt>string <var>text_title</var></dt>
   * <dd>Tag title.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_list;

  /**
   * Business key of the tags.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>