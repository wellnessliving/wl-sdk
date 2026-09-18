<?php

namespace WellnessLiving\Wl\Profile\Rank;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to change addons for belts.
 *
 * @method WlModelRequest get() Gets full list of ranks owned by the client.  Validates that the user belongs to the given business and rank category, loads the list of addon colors available for the rank category, and loads the ranks currently owned by the client, enriching each rank with the calculated number of days left and duration text for ranks with a limited duration.
 * @method WlModelRequest post() Sets addon ranks in Belt.  Validates that the current user has permission to manage ranks for the client, resolves the addon colors available for the business rank type, checks that every submitted addon color is one of the available colors, and saves the new addon selection for the client's rank category.
 */
class AddonModel extends WlModelAbstract
{
  /**
 * Full list of ranks owned by the client.
 * The key of the array is a category rank key.
 *
 * <dl>
 *   <dt>string `dt_add`</dt>
 *   <dd>Date, when rank has been added.</dd>
 * 
 *   <dt>string `k_rank`</dt>
 *   <dd>Rank key. </dd>
 * 
 *   <dt>string `k_rank_category`</dt>
 *   <dd>Category rank key. </dd>
 * 
 *   <dt>string `s_rank`</dt>
 *   <dd>Rank name.</dd>
 * 
 *   <dt>string `s_rank_category`</dt>
 *   <dd>Rank category name.</dd>
 * 
 *   <dt>string `uid`</dt>
 *   <dd>User's key. </dd>
 * 
 *   <dt>string `z_addon`</dt>
 *   <dd>Compressed and serialised list of addons, that client has.</dd>
 * 
 *   <dt>string[] `a_addon`</dt>
 *   <dd>Colors for character and skill sections.</dd>
 * 
 *   <dt>string `s_date`</dt>
 *   <dd>Date, when rank has been added.</dd>
 * 
 *   <dt>int `i_days_left`</dt>
 *   <dd>The number of days that have passed since the start date of the set time period for class attendance.</dd>
 * 
 *   <dt>int `i_duration`</dt>
 *   <dd>The number of days/months/years that were set for attending the classes.</dd>
 * 
 *   <dt>string `s_duration`</dt>
 *   <dd>Tha name of the duration (day/month/year).</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_addon = [];

  /**
 * HEX color codes for Character and Skill fields.
 *
 * <dl>
 *   <dt>array `a_addon`</dt>
 *   <dd>
 *     Array of addons:
 *     <dl>
 *       <dt>string `s_value`</dt>
 *       <dd>HEX color code.</dd>
 * 
 *       <dt>string `s_title`</dt>
 *       <dd>The title for the color code.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>string `s_title`</dt>
 *   <dd>The title for the row (Character | Skill).</dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_addon_list = [];

  /**
 * List of new addons for rank where each item is a selected HEX color code.
 *
 * @post post
 * @var string[]
 */
  public $a_addon_new = [];

  /**
 * Business key.
 *
 * @get get
 * @post get
 * @var string
 */
  public $k_business = '';

  /**
 * Rank Category key.
 *
 * @get get
 * @post get
 * @var string
 */
  public $k_rank_category = '';

  /**
 * User's key in which profile should be shown addons.
 *
 * @get get
 * @post get
 * @var string
 */
  public $uid = '';
}

?>