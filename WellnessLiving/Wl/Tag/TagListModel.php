<?php

namespace WellnessLiving\Wl\Tag;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Gets tags for a business.
 *
 * @method WlModelRequest get() Returns tags of the specified business.  Returns all client tags configured for the business in display order, along with flags indicating whether the business has configured a penalty fee for failed automatic payments and whether surcharges are enabled. Used to populate tag pickers and client profile forms.
 * @method WlModelRequest post() Saves the list of tags. Can be used to create new tags or update existing ones.  Persists the given set of client tags for the business. Tags without a key are created; tags with an existing key are updated with the new title. Requires backend access.
 */
class TagListModel extends WlModelAbstract
{
  /**
   * The tag list.
   *
   * Each element has the next structure:
   *
   * <dl>
   *   <dt>int `i_sort`</dt>
   *   <dd>The sort order of the tag.</dd>
   * 
   *   <dt>string `k_tag`</dt>
   *   <dd>The tag key. </dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>The tag title.</dd>
   * </dl>
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