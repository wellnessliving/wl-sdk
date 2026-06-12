<?php

namespace WellnessLiving\Wl\Holiday;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint displaying information about all location/business holidays for a given business.
 */
class BulkBusinessHolidayModel extends WlModelAbstract
{
  /**
   * An array consisting of the business's closed day data for all locations by holiday keys {@link HolidayModel::$dl_work}.
   *
   * List of holidays.
   *
   * @get result
   * @var array[]
   */
  public $a_business_holidays;

  /**
   * The business key.
   *
   * @get get
   * @var string
   */
  public $k_business = '';
}

?>