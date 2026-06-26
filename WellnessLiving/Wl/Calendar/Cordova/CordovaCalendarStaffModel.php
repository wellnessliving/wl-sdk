<?php

namespace WellnessLiving\Wl\Calendar\Cordova;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Entry point for synchronization of staff member's calendar.
 *
 * @method WlModelRequest post() Gets schedule for calendar synchronisation. POST method is used instead GET because {@link \Wl\Calendar\Cordova\CordovaCalendarApiAbstract::$s_visit_synced} field value may be more than allowed for GET.
 */
class CordovaCalendarStaffModel extends WlModelAbstract
{
  /**
   * Events that must be synchronized in calendar.
   *
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
   * Serialized list of pairs [[visit key ({@link \RsVisitSql}) => visit hash], ...].
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