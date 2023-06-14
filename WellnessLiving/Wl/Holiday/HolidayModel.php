<?php

namespace WellnessLiving\Wl\Holiday;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint displaying information about locations' business holidays.
 */
class HolidayModel extends WlModelAbstract
{
  /**
   * A list of the location's closed day titles by location keys on the date {@link \WellnessLiving\Wl\Holiday\HolidayApi::$dl_work}.
   *
   * @get result
   * @var array
   */
  public $a_location_holiday;

  /**
   * The date working hours are required for.
   * Set in the business's timezone.
   *
   * @get get
   * @var string
   */
  public $dl_work = '';

  /**
   * <tt>true</tt> if the business has a closed day on the date {@link \WellnessLiving\Wl\Holiday\HolidayModel::$dl_work}, <tt>false</tt> if otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_business_holiday;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * The message used for the business's closed day on the date {@link \WellnessLiving\Wl\Holiday\HolidayApi::$dl_work}.
   *
   * @get result
   * @var string
   */
  public $text_business_title = '';

}

?>