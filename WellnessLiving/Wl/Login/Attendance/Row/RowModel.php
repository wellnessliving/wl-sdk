<?php

namespace WellnessLiving\Wl\Login\Attendance\Row;

use WellnessLiving\Core\Quiz\RenderModeSid;
use WellnessLiving\Core\Quiz\ResponseStatusSid;
use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\Login\Attendance\Design\ListTypeSid;

/**
 * Loads data for a single attendance list row.
 *
 * @method WlModelRequest get() Returns data for a single attendance list row.  Loads the visit, its form statuses and the action URLs for each form that is linked to the visit. The render mode and the URLs follow the same gates as the legacy appointment panel.
 */
class RowModel extends WlModelAbstract
{
  /**
   * Data for a single attendance list row.
   *
   * <dl>
   *   <dt>array `a_quiz`</dt>
   *   <dd>
   *     Map of form quiz key to form data. Each value is:
   *     <dl>
   *       <dt>array `a_quiz_status`</dt>
   *       <dd>
   *         Status and action data for a single form:
   *         <dl>
   *           <dt>bool `can_amend`</dt>
   *           <dd>`true` if the current staff member may amend the completed form.</dd>
   * 
   *           <dt>bool `can_complete`</dt>
   *           <dd>`true` if the current staff member may complete the form.</dd>
   * 
   *           <dt>bool `can_view`</dt>
   *           <dd>`true` if the current staff member may view the form response.</dd>
   * 
   *           <dt>int `id_render`</dt>
   *           <dd>Render mode for the form. One of {@link RenderModeSid} constants.</dd>
   * 
   *           <dt>int `id_status`</dt>
   *           <dd>Response status. One of {@link ResponseStatusSid} constants.</dd>
   * 
   *           <dt>bool `is_private`</dt>
   *           <dd>`true` if the form is private.</dd>
   * 
   *           <dt>string `k_business`</dt>
   *           <dd>Business key. </dd>
   * 
   *           <dt>string `k_quiz`</dt>
   *           <dd>Quiz key. </dd>
   * 
   *           <dt>string `k_quiz_login`</dt>
   *           <dd>Quiz login key. </dd>
   * 
   *           <dt>string `k_quiz_response`</dt>
   *           <dd>Quiz response key. </dd>
   * 
   *           <dt>string `text_title`</dt>
   *           <dd>Form title.</dd>
   * 
   *           <dt>string `url_csv`</dt>
   *           <dd>URL to export the completed form as CSV. Empty string if not available.</dd>
   * 
   *           <dt>string `url_direct`</dt>
   *           <dd>Direct URL to fill in the outstanding form. Empty string if not available.</dd>
   * 
   *           <dt>string `url_pdf`</dt>
   *           <dd>URL to export the completed form as PDF. Empty string if not available.</dd>
   * 
   *           <dt>string `url_print`</dt>
   *           <dd>URL to print the form. Empty string if not available.</dd>
   *         </dl>
   *       </dd>
   * 
   *       <dt>string `html_quiz_status`</dt>
   *       <dd>Rendered HTML of the form status badge, as shown in the attendance list.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `dtu_date`</dt>
   *   <dd>Visit date and time in UTC, MySQL format.</dd>
   * 
   *   <dt>string `html_icon`</dt>
   *   <dd>
   *     Rendered HTML of the client info icon, as shown in the attendance list. Empty string if the visit has no client.
   *   </dd>
   * 
   *   <dt>string `html_remain`</dt>
   *   <dd>Rendered HTML of the promotion progress bar, as shown in the attendance list.</dd>
   * 
   *   <dt>string `html_visit_note`</dt>
   *   <dd>Rendered HTML of the visit note, as shown in the attendance list.</dd>
   * 
   *   <dt>bool `is_quiz_subscription_active`</dt>
   *   <dd>`true` if the business has an active quiz subscription.</dd>
   * 
   *   <dt>string `k_business`</dt>
   *   <dd>Business key. </dd>
   * 
   *   <dt>string `k_visit`</dt>
   *   <dd>Visit key. </dd>
   * 
   *   <dt>string `sid_list_type`</dt>
   *   <dd>
   *     String identifier of the attendance list view type. Corresponds to a {@link ListTypeSid} constant.
   *   </dd>
   * 
   *   <dt>string `uid`</dt>
   *   <dd>Client user key. </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_row = [];

  /**
   * Visit date and time in UTC, MySQL format.
   *
   * @get get
   * @var string
   */
  public $dtu_date = '';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Visit key.
   *
   * @get get
   * @var string
   */
  public $k_visit = '';
}

?>