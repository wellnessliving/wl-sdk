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
   * @var array|null
   */
  public $a_class_day = null;

  /**
   * Result staff list.
   *
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_result_list = null;

  /**
   * Staff data.
   *
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_staff = null;

  /**
   * List of staff keys.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string[]|null
   */
  public $a_staff_list = null;

  /**
   * ID of a business to show information for.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Staff ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_staff = null;
}

?>