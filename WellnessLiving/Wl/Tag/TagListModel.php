<?php 

namespace WellnessLiving\Wl\Tag;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that gets tags for a business.
 */
class TagListModel extends WlModelAbstract
{
  /**
   * The tag list.
   *
   * Each element has the next structure:<dl>
   * <dt>string <var>k_tag</var> </dt>
   * <dd>The tag key.
   * <dt>string <var>text_title</var></dt>
   * <dd>The tag title.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_list;

  /**
   * The business key of the tags.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>