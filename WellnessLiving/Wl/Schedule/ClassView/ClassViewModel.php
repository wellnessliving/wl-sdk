<?php

namespace WellnessLiving\Wl\Schedule\ClassView;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about class.
 */
class ClassViewModel extends WlModelAbstract
{
  /**
   * Class data.
   *
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_class = null;

  /**
   * Location data.
   *
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_location = null;

  /**
   * Staff list data.
   *
   * <tt>null</tt> if data is not loaded yet.
   *
   * @get result
   * @var array|null
   */
  public $a_staff = null;

  /**
   * Date/time of the class start in GMT.
   *
   * <tt>null</tt> if date is not loaded yet.
   *
   * @get get
   * @var string|null
   */
  public $dt_date = null;

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
   * Class Period ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $k_class_period = null;

  /**
   * User ID.
   *
   * <tt>null</tt> if not set yet.
   *
   * @get get
   * @var string|null
   */
  public $uid = null;

}

?>