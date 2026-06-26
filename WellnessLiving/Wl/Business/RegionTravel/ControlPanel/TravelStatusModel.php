<?php

namespace WellnessLiving\Wl\Business\RegionTravel\ControlPanel;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;
use WellnessLiving\Wl\WlRegionSid;

/**
 * API for retrieving the travel status of a business.
 * Includes travel quick check for business and status.
 * If business travel was initiated, information about travel process and steps is included.
 *
 * @method WlModelRequest get() Get quick check status of the business, and travel info if available.
 */
class TravelStatusModel extends WlModelAbstract
{
  /**
   * List of businesses that started transferring the earliest (max 100). Each element contains:
   *
   * <dl>
   *   <dt>string `k_business`</dt>
   *   <dd>Business Key.</dd>
   * 
   *   <dt>string `url_travel_panel`</dt>
   *   <dd>URL to the business' travel control panel.</dd>
   * </dl>
   * @get result
   * @var array[]
   */
  public $a_business_early_data;

  /**
   * Data for displaying a status message about business travel. Contains: 
   *
   * <dl>
   *   <dt>string `html_class`</dt>
   *   <dd>HTML class to use for the message element.</dd>
   * 
   *   <dt>string `text_message`</dt>
   *   <dd>
   *     Message to be displayed. Describes the state of the travel process.
   * Describes quick check result if travel hasn't started.
   *   </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_status_message;

  /**
   * Data for each step recorded in the business travel process.
   *
   * Steps do not exist if business never travelled.
   * Each element represents a travel step and contains: 
   *
   * <dl>
   *   <dt>int `cid_travel_step`</dt>
   *   <dd>Travel step class ID.</dd>
   * 
   *   <dt>string `dtu_start`</dt>
   *   <dd>Datetime for step start. Directly from {@link \Wl\Business\RegionTravel\TravelStepSql}</dd>
   * 
   *   <dt>string `dtu_status`</dt>
   *   <dd>Datetime for step status change. Directly from {@link \Wl\Business\RegionTravel\TravelStepSql}</dd>
   * 
   *   <dt>int `id_step_status`</dt>
   *   <dd>Step status ID.</dd>
   * 
   *   <dt>string `sid_step_status`</dt>
   *   <dd>Step status SID.</dd>
   * 
   *   <dt>string `text_step_status`</dt>
   *   <dd>
   *     Translated step status title.
   *   </dd>
   * 
   *   <dt>string `text_class`</dt>
   *
   * 
   *   <dt>string `text_title`</dt>
   *   <dd>Translated step title.</dd>
   * 
   *   <dt>string `text_time_start`</dt>
   *   <dd>Time that has elapsed since start of step in hh:mm:ss format. Empty string if there is no start time.</dd>
   * 
   *   <dt>string `text_time_status`</dt>
   *   <dd>
   *     Status time in hh:mm:ss format. Depends on the state of <tt>id_step_status</tt>.
   *   <ul>
   * <li></li>
   * <li></li>
   * <li></li>
   *   </ul>
   *   </dd>
   * </dl>
   * @get result
   * @var array
   */
  public $a_step_list;

  /**
   * Business travelling information is included if available.
   *
   * If business did not travel yet, data is unavailable and the object is empty.
   *
   * @get result
   * @var array
   */
  public $a_travel_data;

  /**
   * Current count of simultaneous business transfers.
   *
   * @get result
   * @var int
   */
  public $i_travel_current;

  /**
   * Maximum number of simultaneous business transfers.
   *
   * @get result
   * @var int
   */
  public $i_travel_max;

  /**
   * Amazon region of the business.
   *
   * @get result
   * @var int
   * @see WlRegionSid
   */
  public $id_region;

  /**
   * `true` if business passed quick check. `false` otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_quick_check_pass = false;

  /**
   * Key of business that is travelling. `null` by default.
   *
   * @get get
   * @var null|string
   */
  public $k_business = null;

  /**
   * Message for why quick check failed.
   *
   * @get result
   * @var string
   */
  public $text_quick_check_fail = '';
}

?>