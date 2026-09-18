<?php

namespace WellnessLiving\Wl\Login\Rank;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * API to get and save list of ranks for specified users.
 *
 * @method WlModelRequest get() Returns list of ranks for specified users or login ranks.  Validates the business and the requested users, then loads rank category and rank information for each user, including the currently held rank and the ranks available for promotion in each category. Users can be requested either as a plain list of user keys or as a list of user and rank category pairs.
 * @method WlModelRequest post() Saves ranks for specified users in the business.  Validates the business, the specified users, and the requested ranks, then compares them against each user's current rank in each category. For every rank that changed, updates the previous rank's promotion condition data, marks it as no longer current, inserts the new current rank, and propagates the promotion to related franchisee businesses when applicable. Finally, logs the promotions for the client belt history report.
 */
class LoginRankListModel extends WlModelAbstract
{
  /**
 * List of users with information about their ranks in the business.
 *
 * <dl>
 *   <dt>array `a_rank_category`</dt>
 *   <dd>
 *     List of rank categories with rank details for the user.
 *     <dl>
 *       <dt>array `a_available`</dt>
 *       <dd>
 *         List of ranks available for the category.
 *         <dl>
 *           <dt>string `html_condition`</dt>
 *           <dd>Time and class belt conditions.</dd>
 * 
 *           <dt>bool `is_next`</dt>
 *           <dd>Whether this is the next rank for the user.</dd>
 * 
 *           <dt>bool `is_ready`</dt>
 *           <dd>Whether the user is ready for promotion to this rank.</dd>
 * 
 *           <dt>string `json_condition`</dt>
 *           <dd>Time and class belt conditions in JSON format.</dd>
 * 
 *           <dt>string `k_rank`</dt>
 *           <dd>Rank key. </dd>
 * 
 *           <dt>string `text_rank`</dt>
 *           <dd>Rank title.</dd>
 *         </dl>
 *       </dd>
 * 
 *       <dt>array `a_current`</dt>
 *       <dd>
 *         Data of the user's current rank in the category, merged with promotion condition data.
 * Contains only `html_condition` (the belt condition of the first available rank) when the user does not
 * have a current rank yet.
 * When the user has a current rank, also contains additional information.
 *         <dl>
 *           <dt>array `a_logo`</dt>
 *           <dd>
 *             Rank logo thumbnail data.
 *             <dl>
 *               <dt>int `i_height`</dt>
 *               <dd>Actual thumbnail height.</dd>
 * 
 *               <dt>int `i_width`</dt>
 *               <dd>Actual thumbnail width.</dd>
 * 
 *               <dt>bool `is_empty`</dt>
 *               <dd>`true` if the rank does not have its own image and a placeholder was returned.</dd>
 * 
 *               <dt>string `url`</dt>
 *               <dd>URL of the thumbnail image.</dd>
 *             </dl>
 *           </dd>
 * 
 *           <dt>string `k_login_rank`</dt>
 *           <dd>Login rank key. </dd>
 * 
 *           <dt>string `k_rank`</dt>
 *           <dd>Rank key. </dd>
 * 
 *           <dt>string `text_attendance_at_rank`</dt>
 *           <dd>Class attendance in the current rank.</dd>
 * 
 *           <dt>string `text_promote_date`</dt>
 *           <dd>Belt promotion date.</dd>
 * 
 *           <dt>string `text_rank`</dt>
 *           <dd>Rank title.</dd>
 * 
 *           <dt>string `text_time_at_rank`</dt>
 *           <dd>Time at the current rank.</dd>
 *         </dl>
 *       </dd>
 * 
 *       <dt>string `k_rank_category`</dt>
 *       <dd>Rank category key. </dd>
 * 
 *       <dt>string `text_rank_category`</dt>
 *       <dd>Rank category title.</dd>
 *     </dl>
 *   </dd>
 * 
 *   <dt>array `a_user_info`</dt>
 *   <dd>
 *     User information.
 *     <dl>
 *       <dt>string `html_info`</dt>
 *       <dd>HTML information about user.
 * </dd>
 * 
 *       <dt>string `text_name`</dt>
 *       <dd>Full user name.</dd>
 * 
 *       <dt>string `uid`</dt>
 *       <dd>User key. </dd>
 *     </dl>
 *   </dd>
 * </dl>
 * @get result
 * @var array[]
 */
  public $a_user_list;

  /**
 * Business key.
 *
 * @get get
 * @post get
 * @var string
 */
  public $k_business;

  /**
 * Class key.
 * Used to filter the list of ranks by their visit conditions.
 *
 * `null` if no need to filter by class.
 *
 * @get get
 * @var string|null
 */
  public $k_class = null;

  /**
 * Encoded list of UIDs.
 *
 * @get get
 * @var string
 */
  public $s_user_key;

  /**
 * Encoded users with rank categories.
 *
 * <tt>null</tt> if not initialized.
 *
 * @get get
 * @var string
 */
  public $s_user_rank_category = null;

  /**
 * Users with rank categories and ranks that need to be saved.
 *
 * <tt>null</tt> if not initialized.
 *
 * @post post
 * @var string
 */
  public $s_user_rank_save = null;

  /**
 * Whether need to return user detail information (mail, phone).
 *
 * @get get
 * @var bool
 */
  public $show_user_detail = true;
}

?>