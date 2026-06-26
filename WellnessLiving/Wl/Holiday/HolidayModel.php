<?php

namespace WellnessLiving\Wl\Holiday;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * An endpoint displaying information about locations' business holidays.
 *
 * @method WlModelRequest get() Returns information about holiday day of business/locations.  For the specified business and date, returns whether that date is a business-wide closed day, the closed day title if applicable, and a map of location keys to their closed day titles for any locations also closed on that date.
 */
class HolidayModel extends WlModelAbstract
{
  /**
   * A list of the location's closed day titles by location keys on the date {@link HolidayModel::$dl_work}.
   *
   * Keys are location keys. Values are holiday title strings.
   *
   * @get result
   * @var string[]
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
   * <tt>true</tt> if the business has a closed day on the date {@link HolidayModel::$dl_work}, <tt>false</tt> if otherwise.
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
   * The message used for the business's closed day on the date {@link HolidayModel::$dl_work}.
   *
   * @get result
   * @var string
   */
  public $text_business_title = '';
}

?>