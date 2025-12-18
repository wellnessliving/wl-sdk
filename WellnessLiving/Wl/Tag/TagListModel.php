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
   *   <dt>int <var>i_sort</var></dt>
   *   <dd>The sort order of the tag.</dd>
   *   <dt>string <var>k_tag</var> </dt>
   *   <dd>The tag key.</dd>
   *   <dt>string <var>text_title</var></dt>
   *   <dd>The tag title.</dd>
   * </dl>
   *
   * @get result
   * @post post,result
   * @var array[]
   */
  public $a_list = [];

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
   * List of tags in json format.
   * See {@link TagListModel::$a_list} for the structure of each tag.
   * `null` to use {@link TagListModel::$a_list} for getting the tag list.
   *
   * @post post
   * @var string|null
   */
  public $json_list = null;

  /**
   * The business key of the tags.
   *
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';
}

?>