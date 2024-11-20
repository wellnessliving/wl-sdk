<?php

namespace WellnessLiving\Wl\Tag;

use WellnessLiving\WlModelAbstract;

/**
 * Gets tags for a business.
 */
class TagListModel extends WlModelAbstract
{
  /**
   * The tag list.
   *
   * Each element has the next structure:<dl>
   * <dt>string <var>k_tag</var> </dt>
   * <dd>The tag key.</dd>
   * <dt>string <var>text_title</var></dt>
   * <dd>The tag title.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_list;

  /**
   * Whether a business did set up a penalty fee for failed automatic payments.
   *
   * @get result
   * @var bool
   */
  public $has_fee = false;

  /**
   * Whether a business did set up surcharges.
   *
   * @get result
   * @var bool
   */
  public $has_surcharge = false;

  /**
   * The business key of the tags.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>