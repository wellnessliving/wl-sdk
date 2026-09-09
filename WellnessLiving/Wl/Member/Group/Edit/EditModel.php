<?php

namespace WellnessLiving\Wl\Member\Group\Edit;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Lead\Conversion\LeadConversionTypeSid;
use WellnessLiving\Wl\Member\Group\ShapeSid;
use WellnessLiving\Wl\Search\SearchOperationSid;
use WellnessLiving\Wl\WlPrivilegeRoleSid;

/**
 * Point to add or change a client group.
 *
 * @method WlModelRequest get() Returns data for group edit form.  Gets full information about a client group.
 * @method WlModelRequest post() Adds or changes a client group.  Use to update existing client group or create a new one.
 * @method WlModelRequest put() Adds or edit client group Query.  Use to update existing client group search query or create a new one. Member group should be already created.
 */
class EditModel extends WlModelAbstract
{
  /**
   * Entity in array format.
   *
   * <dl>
   *   <dt>int `cid_search_criteria`</dt>
   *   <dd>Search criteria CID.</dd>
   * 
   *   <dt>int `id_operation`</dt>
   *   <dd>ID of selected operation. Constant from {@link SearchOperationSid}.</dd>
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
   * Lead conversion type.
   * `null` if this group is not used for to track lead conversion.
   *
   * @get result
   * @post post
   * @var int|null
   * @see LeadConversionTypeSid
   */
  public $id_conversion_type = null;

  /**
   * Shape of icon. One of {@link ShapeSid} constants.
   *
   * @get result
   * @post post
   * @put post
   * @var int
   */
  public $id_member_group_shape = 0;

  /**
   * Type of share option.
   *
   * @post post
   * @put post
   * @var string
   */
  public $id_share = null;

  /**
   * Whether Facility Access enabled for group.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_brivo_active = false;

  /**
   * Whether automatic check-in on Brivo access granted is enabled for the group.
   * When enabled, a successful Brivo door access reported for a client of this group triggers an automatic
   *  check-in attempt in WellnessLiving. When disabled, Brivo access events for these clients are ignored.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_brivo_checkin_active = false;

  /**
   * Whether Brivo invitation feature enabled for the group.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_brivo_invitation_active = false;

  /**
   * `true` to enable group icon. `false` to disable.
   *
   * @get result
   * @post post
   * @put post
   * @var bool
   */
  public $is_icon = false;

  /**
   * Whether auto-update enabled for group.
   *
   * @get result
   * @post post
   * @var bool
   */
  public $is_update = false;

  /**
   * Entity in array format.
   *
   * @post post
   * @put post
   * @var string
   */
  public $json_criteria = '[]';

  /**
   * The business key.
   *
   * @delete get
   * @get get
   * @post get
   * @put get
   * @var string
   */
  public $k_business = null;

  /**
   * Member group key.
   *
   * @get get
   * @post get,result
   * @put get
   * @var string
   */
  public $k_member_group;

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
   * Hexadecimal color of icon background.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $s_color_background = '';

  /**
   * Hexadecimal color of icon foreground.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $s_color_foreground = '';

  /**
   * Characters on icon.
   *
   * @get result
   * @post post
   * @put post
   * @var string
   */
  public $s_icon = '';

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
   * Title for a client group.
   *
   * @get result
   * @post post
   * @var string
   */
  public $text_title = '';

  /**
   * Additional warning message if there were some minor issues with request.
   *
   * @post result
   * @put result
   * @var string|null
   */
  public $text_warning = null;

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