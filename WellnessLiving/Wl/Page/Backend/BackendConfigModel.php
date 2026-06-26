<?php

namespace WellnessLiving\Wl\Page\Backend;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Api to return backend settings for the given user inside given business.
 *
 * @method WlModelRequest get() Returns backend settings for the given user inside given business. Also prepares and returns data sets for the left, right, and navigation panels.
 */
class BackendConfigModel extends WlModelAbstract
{
  /**
   * Data for the navigation banner template.
   *
   * @get result
   * @var array
   */
  public $a_head_quick;

  /**
   * Data for the left panel template.
   *
   * @get result
   * @var array
   */
  public $a_panel_left;

  /**
   * Whether user has passed partner program manage privilege.
   *
   * @get result
   * @var bool
   */
  public $can_partner;

  /**
   * Whether current user can search for enterprise clients or not.
   *
   * @get result
   * @var bool
   */
  public $can_search_franchise;

  /**
   * Whether user can use smart search or not.
   *
   * @get result
   * @var bool
   */
  public $can_search_uid;

  /**
   * Whether enterprise clients should be included in the search or not.
   *
   * @get result
   * @var bool
   */
  public $is_franchisee_search_wide;

  /**
   * @get get
   * @var string
   */
  public $k_business;

  /**
   * @get get
   * @var string
   */
  public $uid;
}

?>