<?php

namespace WellnessLiving\Wl\Holiday;

use WellnessLiving\WlModelAbstract;

/**
 * Information about locations/business holiday.
 */
class HolidayModel extends WlModelAbstract
{
  /**
   * List of location's closed day titles by location keys on date {@link \WellnessLiving\Wl\Holiday\HolidayApi::$dl_work}.
   *
   * @get result
   * @var array
   */
  public $a_location_holiday;

  /**
   * Date for which working hours are required.
   * In business timezone.
   *
   * @get get
   * @var string
   */
  public $dl_work = '';

  /**
   * <tt>true</tt> If business has closed day by date {@link \WellnessLiving\Wl\Holiday\HolidayModel::$dl_work}, <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_business_holiday;

  /**
   * Business key.
   * Primary key in {@link RsBusinessSql} table.
   *
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * Message of the closed day of business on date {@link \WellnessLiving\Wl\Holiday\HolidayApi::$dl_work}.
   *
   * @get result
   * @var string
   */
  public $text_business_title = '';

}

?>