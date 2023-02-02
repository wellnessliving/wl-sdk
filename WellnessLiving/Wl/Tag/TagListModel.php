<?php 

namespace WellnessLiving\Wl\Tag;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint to get tags.
 */
class TagListModel extends WlModelAbstract
{
  /**
   * The tag list.
   *
   * Each element has the following structure:<dl>
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
   * The key of the business for the the tags.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>