<?php

namespace WellnessLiving\Wl\Virtual;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Retrieves currently active meetings.
 *
 * @method WlModelRequest get()
 */
class MeetingListModel extends WlModelAbstract
{
  /**
   * Active meeting list. Each element has next structure: 
   *
   * <dl>
   *   <dt>array[] `a_staff`</dt>
   *   <dd>
   *     Information about staff. Each element has next structure:
   *     <dl>
   *       <dt>string `text_staff`</dt>
   *       <dd>Full name of the staff.</dd>
   * 
   *       <dt>string `url_photo`</dt>
   *       <dd>Url photo of the staff.</dd>
   * 
   *       <dt>string `url_staff`</dt>
   *       <dd>Url for view information about the staff.</dd>
   *     </dl>
   *   </dd>
   * 
   *   <dt>string `text_service`</dt>
   *   <dd>Name of the class or service.</dd>
   * 
   *   <dt>string `text_date`</dt>
   *   <dd>Date of the session.</dd>
   * 
   *   <dt>string `text_time`</dt>
   *   <dd>Time of the session.</dd>
   * 
   *   <dt>string `s_meeting_id`</dt>
   *   <dd>Meeting id.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_meeting_list = [];

  /**
   * <tt>true</tt> if can add FitLIVE licenses, <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $can_add_license;

  /**
   * Number of paid FitLIVE licenses.
   *
   * @get result
   * @var int
   */
  public $i_license;

  /**
   * <tt>true</tt> if business use FitLIVE, <tt>false</tt> otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_fitlive;

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business;
}

?>