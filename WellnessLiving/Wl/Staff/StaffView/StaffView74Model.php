<?php

namespace WellnessLiving\Wl\Staff\StaffView;

use WellnessLiving\WlModelAbstract;

/**
 * Returns information about a specified staff member.
 *
 * This method can accept one staff UID {@link StaffView74Model::$uid_staff} or a staff UID list
 * {@link StaffView74Model::$a_uid_staff_list} but not both an exception would be thrown.
 */
class StaffView74Model extends WlModelAbstract
{
  /**
   * An array containing information about the classes this staff member is running.
   * Each element contains another array with three elements:
   *
   * @get result
   * @var array[]
   */
  public $a_class_day = null;

  /**
   * An array listing the class sessions the staff member provides at each location.
   *
   * @get result
   * @var array[]
   */
  public $a_result_list = null;

  /**
   * An array containing information about the staff member.
   *
   * @get result
   * @var array
   */
  public $a_staff;

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
   * The staff member user ID.
   * A staff member can work for more than one business.
   *
   * @get get
   * @var string
   */
  public $uid_staff = '0';
}

?>