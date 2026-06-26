<?php

namespace WellnessLiving\Wl\Marketing\Automation\List;

use WellnessLiving\WlModelAbstract;
use WellnessLiving\WlModelRequest;

/**
 * Manages automation list data.
 *
 * @method WlModelRequest get() Gets automation data.
 */
class AutomationListModel extends WlModelAbstract
{
  /**
   * List of automations.
   * This list matches all filters.
   *
   * @get result
   * @var array
   */
  public $a_automation_list = [];

  /**
   * Pagination data.
   *
   * @get result
   * @var array
   */
  public $a_page = [];

  /**
   * Number of active automations.
   * This number contains the number of all active automations that match all filters except
   * {@link AutomationListModel::$id_status} filter, so it may be greater than the number of items in
   * {@link AutomationListModel::$a_automation_list}.
   *
   * @get result
   * @var int
   */
  public $i_automation_active = 0;

  /**
   * Number of draft automations.
   * This number contains the number of all draft automations that match all filters except
   * {@link AutomationListModel::$id_status} filter, so it may be greater than the number of items in
   * {@link AutomationListModel::$a_automation_list}.
   *
   * @get result
   * @var int
   */
  public $i_automation_draft = 0;

  /**
   * Total number of automations.
   * This number contains the number of all automations that match all filters except
   * {@link AutomationListModel::$id_status} filter, so it may be greater than the number of items in
   * {@link AutomationListModel::$a_automation_list}.
   *
   * @get result
   * @var int
   */
  public $i_automation_total = 0;

  /**
   * A status of automation.
   * `null` to not perform filtering by status.
   *
   * @get get
   * @var int|null
   */
  public $id_status = null;

  /**
   * Business key.
   * `null` to use the system business.
   *
   * @get get
   * @var string|null
   */
  public $k_business = null;

  /**
   * Folder key.
   * `null` to load automations from all folders.
   * Empty string to load automations from the default folder.
   *
   * @get get
   * @var string|null
   */
  public $k_folder = null;

  /**
   * The filter phrase to filter automations by name.
   *
   * @get get
   * @var string
   */
  public $text_search = '';
}

?>