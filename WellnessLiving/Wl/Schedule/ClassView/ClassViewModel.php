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
   * List of sessions to get information for. Every element has next keys:
   * <dl><dt>string <var>dt_date</var></dt><dd>Date/time of the session in UTC.</dd>
   * <dt>string <var>k_class_period</var></dt><dd>Session primary key in {@link RsClassPeriodSql} table.</dd></dl>
   * <tt>null</tt> for mode of single session.
   *
   * @get get
   * @var array[]|null
   */
  public $a_session_request = null;

  /**
   * List of sessions information received in a multiple session mode.
   * Every element has next keys:
   * <dl><dt>array <var>a_class</var></dt><dd>Class information.</dd>
   * <dt>array <var>a_location</var></dt><dd>Location information.</dd>
   * <dt>array <var>a_staff</var></dt><dd>Staff member information.</dd>
   * <dt>array <var>dt_date</var></dt><dd>Session date/time in UTC.</dd>
   * <dt>array <var>k_class_period</var></dt><dd>Session key.</dd></dl>
   *
   * @get result
   * @var array[]|null
   */
  public $a_session_result = null;

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