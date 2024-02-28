<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about asset categories.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * A list of information about asset categories.
   * <dl>
   *   <dt>
   *     boolean <var>hide_application</var>
   *   </dt>
   *   <dd>
   *     <tt>true</tt> - all resources are hidden in this category for White Label mobile application. <tt>false</tt> - otherwise.
   *   </dd>
   *   <dt>
   *     string <var>k_resource_type</var>
   *   </dt>
   *   <dd>
   *     Resource type ID.
   *   </dd>
   *   <dt>
   *     string <var>html_title</var>
   *   </dt>
   *   <dd>
   *     Title of resource type.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_category;

  /**
   * If `true`, asset categories are loaded for backend mode. Otherwise, this will be `false` if asset categories
   * are loaded for frontend mode.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * `true` - search in all tabs.
   * `false` - search only for the selected book tab.
   *
   * @get get
   * @var bool
   */
  public $is_tab_all = false;

  /**
   * The class tab key to use for filtering services.
   *
   * @get get
   * @var string
   */
  public $k_class_tab = '0';

  /**
   * The key of the location to show information for.
   *
   * @get get
   * @var string
   */
  public $k_location = '0';
}

?>