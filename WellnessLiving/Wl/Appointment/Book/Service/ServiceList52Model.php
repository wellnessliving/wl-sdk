<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about services in the current service category.
 *
 * This is a new version of the {@link ServiceListModel} endpoint.
 * It allows for filtering a list of services by multiple book now tabs.
 */
class ServiceList52Model extends WlModelAbstract
{
  /**
   * The class tab key to use to filter services. If empty, this can be found on the standard book tab.
   *
   * If multiple tabs are sent, appointment types, which are in at least in one of the tabs, will be in the result.
   *
   * @get get
   * @var string[]
   */
  public $a_class_tab = [];

  /**
   * A list of services with information about them.
   *
   * <b>Key</b> - the service key.
   * <b>Value</b> - an array, with every element consisting of the next keys:
   *
   * @get result
   * @var array
   */
  public $a_service;

  /**
   * List of staff members to filter a result.
   *
   * Empty if the filtering is not necessary.
   *
   * @get get
   * @var string[]
   */
  public $a_staff = [];

  /**
   * List of user keys to book appointments.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int|null
   */
  public $i_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size.
   *
   * @get get
   * @var int|null
   */
  public $i_width = 0;

  /**
   * `true` - return all active services for a certain location ignoring user age and other restrictions.
   * `false` - return only services that are allowed for the user.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * Whether services allow multiple appointment booking.
   *
   * @get result
   * @var bool
   */
  public $is_multiple_booking;

  /**
   * `true` - search in all tabs.
   * `false` - search only on the selected book now tab.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * If `true`, the client is a walk-in. Otherwise, this will be `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The key of a service category to show information for.
   *
   * @get get
   * @var string
   */
  public $k_service_category = '0';

  /**
   * The user key.
   *
   * This field is used if the client books for himself or for the relative.
   *
   * This field is incorrect to use for guest booking since in this case the client will be checked as a relative.
   *
   * In case of a group booking or a guest booking, the key of the client who is making the booking is set here.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>