<?php

namespace WellnessLiving\Wl\Reception\Roster;

use WellnessLiving\WlModelAbstract;

/**
 * Api endpoint to get the secret string for Attendance Kiosk requests.
 */
class AttendanceSecretModel extends WlModelAbstract
{
  /**
     * Key of the business. Primary key in {@link \RsBusinessSql} table
     *
     * @get get
     * @var string
     */
  public $k_business = '';

  /**
     * Key of the location.
     *
     * @get get
     * @var string
     */
  public $k_location = '';

  /**
     * Secret string.
     *
     * @get result
     * @var string
     */
  public $s_secret = '';
}

?>