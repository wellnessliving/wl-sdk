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
   * <dl>
   *   <dt>
   *     bool <var>hide_application</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> - all services are hidden in this category for White Label mobile application. <tt>false</tt> - otherwise.
   *   </dd>
   *   <dt>
   *     bool <var>i_sort</var>
   *   </dt>
   *   <dd>
   *     Sort key for category. Used to sort categories on category list page.
   *   </dd>
   *   <dt>
   *     string <var>k_service_category</var>
   *   </dt>
   *   <dd>
   *     Service category key.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     Service category title.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array
   */
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
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>