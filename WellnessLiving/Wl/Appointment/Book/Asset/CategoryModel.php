<?php

namespace WellnessLiving\Wl\Appointment\Book\Asset;

use WellnessLiving\WlModelAbstract;

/**
 * Retrieves information about asset categories.
 */
class CategoryModel extends WlModelAbstract
{
  /**
   * A list of information about asset categories.
   * <dl>
   *   <dt>bool `hide_application`</dt>
   *   <dd>
   *     <tt>true</tt> - all resources are hidden in this category for White Label mobile application. <tt>false</tt> - otherwise.
   *   </dd>
   *
   *   <dt>string `k_resource_type`</dt>
   *   <dd>
   *     Resource type ID.
   *   </dd>
   *
   *   <dt>string `html_title`</dt>
   *   <dd>
   *     Title of resource type.
   *   </dd>
   *
   *   <dt>string `text_title`</dt>
   *   <dd>
   *     Title of resource type as text.
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