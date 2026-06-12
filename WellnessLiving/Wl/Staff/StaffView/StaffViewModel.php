<?php

namespace WellnessLiving\Wl\Staff\StaffView;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\Wl\Staff\StaffList\StaffListModel;

/**
 * Returns information about a specified staff member.
 *
 * This method can accept one staff key {@link StaffViewModel::$k_staff} or a staff list
 * {@link StaffViewModel::$a_staff_list} but not both (an exception would be thrown).
 *
 * @deprecated Use {@link StaffView74Model}
 */
class StaffViewModel extends WlModelAbstract
{
  /**
   * An array containing information about the classes this staff member is running.
   * Each element contains another array with three elements:
   *
   * @get result
   * @var array[]
   */
  public $a_class_day;

  /**
   * An array listing the class sessions the staff member provides at each location.
   *
   * @get result
   * @var array[]
   */
  public $a_result_list;

  /**
   * An array containing information about the staff member.
   *
   * @get result
   * @var array
   */
  public $a_staff;

  /**
   * A list of staff keys.
   *
   * @get get
   * @var string[]|null
   * @deprecated Use {@link StaffViewModel::$a_uid_staff_list} instead.
   */
  public $a_staff_list;

  /**
   * A list of staff user IDs.
   *
   * @get get
   * @var string[]|null
   */
  public $a_uid_staff_list = null;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int
   */
  public $i_image_width = 0;

  /**
   * The key of the business to show information for.
   *
   * @get get
   * @var string
   */
  public $k_business = '0';

  /**
   * The staff member key.
   * A staff member can work for more than one business.
   * This key can be found using the {@link StaffListModel} endpoint.
   *
   * @get get
   * @var string
   * @deprecated Use {@link StaffViewModel::$uid_staff} instead.
   */
  public $k_staff = '0';

  /**
   * The staff member user ID.
   * A staff member can work for more than one business.
   * This key can be found using the {@link StaffListModel} endpoint.
   *
   * @get get
   * @var string
   */
  public $uid_staff = '0';
}

?>