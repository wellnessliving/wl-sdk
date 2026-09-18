<?php

namespace WellnessLiving\Wl\Schedule\WorkingTime;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api for staff working time.
 *
 * @method WlModelRequest get() Gets working hours for some staff.  Returns the working and break periods, with time already occupied cut out, for the requested  staff within the given date range at the given location. When no staff identifier is given,  the periods are returned for all staff of the business. Exactly one of `k_staff` or  `uid_staff` may be provided.
 */
class StaffWorkingModel extends WlModelAbstract
{
  /**
 * Staff period.
 *
 * <dl>
 *   <dt>string `dl_day`</dt>
 *   <dd>
 *     Array with keys as day from range and values - arrays with keys:
 *     <dl>
 *       <dt>array `a_break`</dt>
 *       <dd>
 *         Hours of break. Keys - primary keys in one of period table; values - arrays with keys:
 *         <dl>
 *           <dt>string[]|null `a_service`</dt>
 *           <dd>
 *             Services that affect this hours. 
 * <tt>null</tt> if affects all services.
 *           </dd>
 * 
 *           <dt>string `dtu_create`</dt>
 *           <dd>Date when created period.</dd>
 * 
 *           <dt>int `i_end`</dt>
 *           <dd>End time. In seconds.</dd>
 * 
 *           <dt>int `i_start`</dt>
 *           <dd>Start time. In seconds.</dd>
 * 
 *           <dt>string `k_location`</dt>
 *           <dd>Location key. </dd>
 * 
 *           <dt>string `text_note`</dt>
 *           <dd>Note to available/unavailable time.</dd>
 * 
 *           <dt>string `html_break_note`</dt>
 *           <dd>Info about when break time. Be present only in unavailable time.</dd>
 *         </dl>
 *       </dd>
 * 
 *       <dt>array[] `a_work`</dt>
 *       <dd>
 *         Working hours. Each element:
 *         <dl>
 *           <dt>string[]|null `a_service`</dt>
 *           <dd>
 *             Services that affect this hours. Primary keys in  table.
 * <tt>null</tt> if affects all services.
 *           </dd>
 * 
 *           <dt>string `dtu_create`</dt>
 *           <dd>Date when created period.</dd>
 * 
 *           <dt>int `i_end`</dt>
 *           <dd>End time. In seconds.</dd>
 * 
 *           <dt>int `i_start`</dt>
 *           <dd>Start time. In seconds.</dd>
 * 
 *           <dt>string `k_location`</dt>
 *           <dd>Location key. </dd>
 * 
 *           <dt>string `text_note`</dt>
 *           <dd>Note to available/unavailable time.</dd>
 * 
 *           <dt>string `html_break_note`</dt>
 *           <dd>Info about when break time. Be present only in unavailable time.</dd>
 *         </dl>
 *       </dd>
 *     </dl>
 *   </dd>
 * </dl>
 * @get result
 * @var array
 */
  public $a_staff_period;

  /**
 * End date of the staff working.
 *
 * @get get
 * @var string
 */
  public $dl_end = '';

  /**
 * Start date of the staff working.
 *
 * @get get
 * @var string
 */
  public $dl_start = '';

  /**
 * Business key.
 *
 * @get get
 * @var string
 */
  public $k_business = '0';

  /**
 * Location to show available appointment booking schedule.
 *
 * @get get
 * @var string
 */
  public $k_location = '0';

  /**
 * Service key.
 *
 * @get get
 * @var string
 */
  public $k_service = '0';

  /**
 * Staff Key to show what days are available for appointment booking.
 *
 * @get get
 * @var string|null
 * @deprecated Use {@link StaffWorkingModel::$uid_staff} instead.
 */
  public $k_staff = null;

  /**
 * Staff UID to show what days are available for appointment booking.
 *
 * @get get
 * @var string|null
 */
  public $uid_staff = null;
}

?>