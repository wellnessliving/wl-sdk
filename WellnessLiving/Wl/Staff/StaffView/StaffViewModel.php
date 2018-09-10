<?php

namespace WellnessLiving\Wl\Staff\StaffView;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about a staff member.
 */
class StaffViewModel extends WlModelAbstract
{
  /**
   * Staff schedule.
   *
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array
   */
  public $a_class_day = null;

  /**
   * Staff data.
   *
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array
   */
  public $a_staff = null;

  /**
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string
   */
  public $k_business = null;

  /**
   * Staff ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string
   */
  public $k_staff = null;
}

?>