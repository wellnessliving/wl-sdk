<?php

namespace WellnessLiving\Wl\Search\Template\Menu;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Search templates menu API.
 *
 * @method WlModelRequest delete() Removes search template.
 * @method WlModelRequest get() Gets list of saved search templates.
 * @method WlModelRequest post() Saves search template as default.
 */
class MenuModel extends WlModelAbstract
{
  /**
   * List of saved search templates.
   *
   * <dl>
   *   <dt>bool `is_default`</dt>
   *   <dd>Whether this template is used as default template.</dd>
   * 
   *   <dt>string `k_search_template`</dt>
   *   <dd>Template key.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Search template title.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_search_list;

  /**
   * Whether given template should be marked as default or not.
   *
   * <tt>null</tt> if field is not set.
   *
   * @post post
   * @var bool|null
   */
  public $is_default = null;

  /**
   * Whether the menu is opened.
   *
   * @get result
   * @var bool
   */
  public $is_open = false;

  /**
   * Business key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $k_business = '';

  /**
   * Key of existing template.
   *
   * @delete get
   * @post get
   * @var string
   */
  public $k_search_template = '';

  /**
   * Unique string identifying the name of the search group.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $s_search_group = '';

  /**
   * User key.
   *
   * @delete get
   * @get get
   * @post get
   * @var string
   */
  public $uid = '';
}

?>