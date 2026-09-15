<?php

namespace WellnessLiving\Wl\Calendar\Cordova;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point for synchronization of staff member's calendar.
 *
 * @method WlModelRequest post() Gets schedule for calendar synchronisation.  POST method is used instead GET because the `$s_visit_synced` field value may be more than allowed for GET.
 */
class CordovaCalendarStaffModel extends WlModelAbstract
{
  /**
 * Events that must be synchronized in calendar. See `data()` for detailed description.
 *
 * <dl>
 *   <dt>string `dtl_end`</dt>
 *   <dd>Date/time of end. Set if event is not cancelled.</dd>
 * 
 *   <dt>string `dtl_start`</dt>
 *   <dd>Date/time of start. Set if event is not cancelled.</dd>
 * 
 *   <dt>bool `is_cancel`</dt>
 *   <dd><tt>true</tt> - event is cancelled; <tt>false</tt> - event still actual.</dd>
 * 
 *   <dt>string `s_hash`</dt>
 *   <dd>Check sum. Set if event is not cancelled.</dd>
 * 
 *   <dt>string `s_key`</dt>
 *   <dd>Event unique ID.</dd>
 * 
 *   <dt>string `text_location`</dt>
 *   <dd>Location address. Set if event is not cancelled.</dd>
 * 
 *   <dt>string `text_note`</dt>
 *   <dd>Additional description. Set if event is not cancelled.</dd>
 * 
 *   <dt>string `text_title`</dt>
 *   <dd>Title. Set if event is not cancelled.</dd>
 * 
 *   <dt>string `url`</dt>
 *   <dd>URL to join virtual service. Set if event is not cancelled. Empty string if service is not virtual.</dd>
 * </dl>
 * @post result
 * @var array[]
 */
  public $a_visit_actual = null;

  /**
 * Date of last sync.
 *
 * @post get
 * @var string
 */
  public $dtu_synced_last = null;

  /**
 * Business to synchronize calendar from.
 *
 * @post get
 * @var string
 */
  public $k_business = '0';

  /**
 * Books/visits that are already synchronized in client's calendar.
 * Serialized list of pairs [[visit key () => visit hash], ...].
 *
 * @post post
 * @var string
 */
  public $s_visit_synced = '';

  /**
 * User to synchronize calendar for.
 *
 * @post get
 * @var string
 */
  public $uid = '0';
}

?>