<?php

namespace WellnessLiving\Wl\Appointment\Book\Service;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about service categories.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * A list of information about service categories.
   *
   * @get result
   * @var array
   */
<dl>
  <dt>bool `hide_application`</dt>
  <dd>
    <tt>true</tt> - all services are hidden in this category for White Label mobile application. <tt>false</tt> - otherwise.
  </dd>

  <dt>bool `i_sort`</dt>
  <dd>Sort key for category. Used to sort categories on category list page.</dd>

  <dt>string `k_service_category`</dt>
  <dd>Service category key. 

  <dt>string `s_title`</dt>
  <dd>Service category title.</dd>
</dl>
  public $a_category = [];

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
   * `true` - return all service categories for a certain location.
   * `false` - return only service categories that are associated with a book tab and with staff members
   * able to conduct them.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * <tt>true</tt> - if client has a flag, <tt>false</tt> - otherwise.
   *
   * @get result
   * @var bool
   */
  public $is_client_flag;

  /**
   * Whether a flagged client is allowed to retrieve categories.
   * `true` - allowed, `false` - not allowed.
   *
   * @get get
   * @var bool
   */
  public $is_flag_ignore = false;

  /**
   * `true` - search in all tabs.
   * `false` - search only for the selected book tab.
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
   * The class tab key used to filter services.
   *
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

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