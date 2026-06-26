<?php

namespace WellnessLiving\Wl\Search\Template\Panel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlPrivilegeRoleSid;

/**
 * Search template settings API.
 *
 * @method WlModelRequest get() Gets panel template data.
 * @method WlModelRequest post() Creates new search template.
 * @method WlModelRequest put() Updates search template.
 */
class PanelModel extends WlModelAbstract
{
  /**
   * Entity in array format.
   *
   * <dl>
   *   <dt>int `cid_search_criteria`</dt>
   *   <dd>Search criteria CID.</dd>
   * 
   *   <dt>int `id_operation`</dt>
   *   <dd>ID of selected operation.</dd>
   * 
   *   <dt>string `s_id`</dt>
   *   <dd>
   *     Unique criteria key.
   *  
   *   </dd>
   * 
   *   <dt>mixed `x_value`</dt>
   *   <dd>Operation data value.</dd>
   * </dl>
   * @post post
   * @put post
   * @var array[]
   * @deprecated Use {@link SearchTemplatePanelApiTrait::$json_criteria} to prevent number of variables more than
   *  can be transferred to server via HTTP.
   */
  public $a_criteria = [];

  /**
   * Logic connection between criteria.
   *
   * @post post
   * @put post
   * @var string[][][][]|null
   */
  public $a_logic = null;

  /**
   * Variables to pass into the panel template.
   *
   * <dl>
   *   <dt>string[] `a_staff_selected`</dt>
   *   <dd>List of user keys of shared search template.</dd>
   * 
   *   <dt>int `cid_search_entity`</dt>
   *   <dd>Search entity CID.</dd>
   * 
   *   <dt>int `id_share`</dt>
   *   <dd>Share option constant.</dd>
   * 
   *   <dt>string `k_search_template`</dt>
   *   <dd>Key of existing template.</dd>
   * 
   *   <dt>bool `show_staff_role_list`</dt>
   *   <dd>Whether staff role list should be shown for share.</dd>
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Search template title.</dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_panel;

  /**
   * Search entity CID list.
   *
   * @post post
   * @put post
   * @var int[]
   */
  public $a_search_entity = [];

  /**
   * Selected staff roles of the search template.
   *
   * <dl>
   *   <dt>int `id_privilege_role`</dt>
   *   <dd>ID of privilege role. Constant from {@link WlPrivilegeRoleSid}.</dd>
   * 
   *   <dt>string `k_business_role`</dt>
   *   <dd>Key of the business role. </dd>
   * </dl>
   * @post post
   * @put post
   * @var array[]
   */
  public $a_staff_role_selected = null;

  /**
   * Type of share option.
   *
   * @post post
   * @put post
   * @var string
   */
  public $id_share = null;

  /**
   * Entity in array format.
   *
   * @post post
   * @put post
   * @var string
   */
  public $json_criteria = '[]';

  /**
   * Business key.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * Key of existing template.
   *
   * Can be empty if template needs to be created.
   *
   * @get get,result
   * @post get,result
   * @put get
   * @var string
   */
  public $k_search_template = '';

  /**
   * Unique string identifying the name of the search group.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $s_search_group = '';

  /**
   * Search template title.
   *
   * @post post
   * @put post
   * @var string
   */
  public $text_title = '';

  /**
   * User key.
   *
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $uid = null;
}

?>