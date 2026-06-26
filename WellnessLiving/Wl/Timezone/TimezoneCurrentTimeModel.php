<?php

namespace WellnessLiving\Wl\Timezone;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Get current date time in the timezone.
 *
 * @method WlModelRequest get() Gets current date time in the timezone.
 */
class TimezoneCurrentTimeModel extends WlModelAbstract
{
  /**
   * Current date time in the timezone.
   *
   * @get result
   * @var string
   */
  public $dtl_current = '';

  /**
   * Business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';

  /**
   * Timezone key.
   *
   * @get get
   * @var string
   */
  public $k_timezone = '';

  /**
   * Timezone abbreviation.
   *
   * @get result
   * @var string
   */
  public $text_timezone = '';

  /**
   * Timezone title.
   *
   * @get result
   * @var string
   */
  public $text_timezone_name = '';
}

?>